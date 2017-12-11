<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/ProveedorModel.php';
require_once __DIR__ . '/../bean/ProveedorBean.php';

$objProveedorBean = new ProveedorBean();
$proveedorModel = new ProveedorModel();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $data_back = json_decode(file_get_contents('php://input'));
    $no_ruc = $data_back->{"no_ruc"};
    $no_proveedor = $data_back->{"no_proveedor"};    
    $nu_pagina = $data_back->{"nu_pagina"};
    $nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};


    $listaProveedorPaginado = $proveedorModel->listaProveedorPaginado($no_ruc,$no_proveedor,$nu_pagina, $nu_regis_mostrar);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listaProveePag = array("status" => http_response_code(), 'mensaje' => 'ok', "proveedor" => $listaProveedorPaginado);
        echo json_encode($listaProveePag);
    } else {
        $listaProveePag = array('status' => http_response_code(), 'error' => 'error', "proveedor" => $listaProveedorPaginado);
        echo json_encode($listaProveePag);
    }
}
?>