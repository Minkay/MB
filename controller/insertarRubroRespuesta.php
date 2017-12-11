<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroRespuestaModel.php';
require_once __DIR__ . '/../bean/RubroRespuestaBean.php';
$objRubroRespuestaBean = new RubroRespuestaBean();
$rubroRespuestaModel = new RubroRespuestaModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $no_rubro_respuesta = $data_back->{'no_rubro_respuesta'};
    $no_descripcion = $data_back->{'no_descripcion'};

    $objRubroRespuestaBean->setNomRubroRespuesta($no_rubro_respuesta);
    $objRubroRespuestaBean->setNomDescripcion($no_descripcion);

    $insertaRubroRespuesta = $rubroRespuestaModel->insertaRubroRespuesta($objRubroRespuestaBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($insertaRubroRespuesta == true) {
            $insertaRubroRpta = array("status" => 1, "mensaje" => "Familia Materiales Insertado Correctamente");
        } else {
            $insertaRubroRpta = array("status" => 0, "mensaje" => "Error al insertar Revise sus datos");
        }

        echo json_encode($insertaRubroRpta);
    } else {
        $insertaRubroRpta = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($insertaRubroRpta);
    }
}
?>