<?php

include __DIR__ . '/../cors.php';


require_once __DIR__ . '/../model/AreaModel.php';
require_once __DIR__ . '/../bean/AreaBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objAreaBean = new AreaBean();
$areaModel = new AreaModel();

$id_area = $data_back->{"id_area"};
 


$objAreaBean->setIdArea($id_area);
$listaArea = $areaModel->listaArea($objAreaBean );

header('Content-type: application/json');


if (http_response_code() >= 200 && http_response_code()<300) {

    $arrayName = array("status" => http_response_code(), 'mensaje' => 'ok', "area" => $listaArea);
    echo json_encode($arrayName);
} else {
    $arrayName = array('status' => http_response_code(), 'error' => 'error', "area" => $listaArea);
    echo json_encode($arrayName);
}
?>