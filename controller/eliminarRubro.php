<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroModel.php';
require_once __DIR__ . '/../bean/RubroBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objRubroBean = new RubroBean();
$rubroModel = new RubroModel();

//define nombre de los parametros a usar por json
$id_rubro = $data_back->{'id_rubro'};
 

//setear los valores al objeto
$objRubroBean->setIdRubro($id_rubro);
 


$eliminaRubro = $rubroModel->eliminaRubro($objRubroBean);
header('Content-type: application/json');
if (http_response_code() >= 200 && http_response_code() < 300) {
    if ($eliminaRubro == true) {
        $eliminaRub = array("status" => 1, "mensaje" => "Rubro Eliminado Correctamente");
    } else {
        $eliminaRub = array("status" => 0, "mensaje" => "Error al Eliminar Revise sus datos");
    }

    echo json_encode($eliminaRub);
} else {
    $eliminaRub = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
    echo json_encode($eliminaRub);
}
?>
