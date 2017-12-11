<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/ProveedorModel.php';
require_once __DIR__ . '/../bean/ProveedorBean.php';

$objProveedorBean = new ProveedorBean();
$proveedorModel = new ProveedorModel();

$data_back = json_decode(file_get_contents('php://input'));

$id_proveedor = $data_back->{"id_proveedor"};

$objProveedorBean->setIdProveedor($id_proveedor);
$listaProveedor = $proveedorModel->listaProveedor($objProveedorBean);

header('Content-type: application/json');

if (http_response_code() >= 200 && http_response_code() < 300) {

    $listaProvee = array("status" => http_response_code(), 'mensaje' => 'ok', "proveedor" => $listaProveedor);
    echo json_encode($listaProvee);
} else {
    $listaProvee = array('status' => http_response_code(), 'error' => 'error', "proveedor" => $listaProveedor);
    echo json_encode($listaProvee);
}
?>