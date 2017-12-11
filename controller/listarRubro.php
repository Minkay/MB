<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/RubroModel.php';
require_once __DIR__ . '/../bean/RubroBean.php';

$objRubroBean = new RubroBean();
$rubroModel = new RubroModel();

$data_back = json_decode(file_get_contents('php://input'));
$id_rubro = $data_back->{'id_rubro'};

$objRubroBean->setIdRubro($id_rubro);
$listaRubro = $rubroModel->listaRubro($objRubroBean);

header('Content-type: application/json');

if (http_response_code() >= 200 && http_response_code() < 300) {

    $ListRubro = array("status" => http_response_code(), 'mensaje' => 'ok', "rubro" => $listaRubro);
    echo json_encode($ListRubro);
} else {
    $ListRubro = array('status' => http_response_code(), 'error' => 'error', "rubro" => $listaRubro);
    echo json_encode($ListRubro);
}
?>