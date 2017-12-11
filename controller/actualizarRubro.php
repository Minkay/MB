<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroModel.php';
require_once __DIR__ . '/../bean/RubroBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objRubroBean = new RubroBean();
$rubroModel = new RubroModel();

//define nombre de los parametros a usar por json
$id_rubro = $data_back->{'id_rubro'};
$no_rubro = $data_back->{'no_rubro'};
$no_descripcion = $data_back->{'no_descripcion'};

//setear los valores al objeto
$objRubroBean->setIdRubro($id_rubro);
$objRubroBean->setNomRubro($no_rubro);
$objRubroBean->setNomDescripcion($no_descripcion);


$actualizaRubro = $rubroModel->actualizaRubro($objRubroBean);
header('Content-type: application/json');
if (http_response_code() >= 200 && http_response_code() < 300) {
    if ($actualizaRubro == true) {
        $actualizaRub = array("status" => 1, "mensaje" => "Rubro Actualizado Correctamente");
    } else {
        $actualizaRub = array("status" => 0, "mensaje" => "Error al Actualizar Revise sus datos");
    }

    echo json_encode($actualizaRub);
} else {
    $actualizaRub = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
    echo json_encode($actualizaRub);
}
?>
