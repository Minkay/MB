<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroRespuestaModel.php';
require_once __DIR__ . '/../bean/RubroRespuestaBean.php';
$objRubroRespuestaBean = new RubroRespuestaBean();
$rubroRespuestaModel = new RubroRespuestaModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_rubro_respuesta = $data_back->{'id_rubro_respuesta'};
    $no_rubro_respuesta = $data_back->{'no_rubro_respuesta'};
    $no_descripcion = $data_back->{'no_descripcion'};

    $objRubroRespuestaBean->setIdRubroRespuesta($id_rubro_respuesta);
    $objRubroRespuestaBean->setNomRubroRespuesta($no_rubro_respuesta);
    $objRubroRespuestaBean->setNomDescripcion($no_descripcion);

    $actualizaRubroRespuesta = $rubroRespuestaModel->actualizaRubroRespuesta($objRubroRespuestaBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($actualizaRubroRespuesta == true) {
            $actualizaRubroRpta = array("status" => 1, "mensaje" => "Familia Materiales Actualizado Correctamente");
        } else {
            $actualizaRubroRpta = array("status" => 0, "mensaje" => "Error al actualizar, Revise sus datos");
        }

        echo json_encode($actualizaRubroRpta);
    } else {
        $actualizaRubroRpta = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($actualizaRubroRpta);
    }
}
?>