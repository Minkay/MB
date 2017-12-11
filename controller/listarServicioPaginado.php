<?php

include __DIR__ . '/../cors.php';
require_once __DIR__ . '/../model/ServicioModel.php';

$objServicioBean = new ServicioBean();
$servicioModel = new ServicioModel();
$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $no_servicio = $data_back->{"no_servicio"};
    $no_cat_servicio = $data_back->{"no_cat_servicio"};
    $nu_pagina = $data_back->{"nu_pagina"};
    $nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};

    $listaservicioPaginado = $servicioModel->listaServicioPaginado($no_servicio, $no_cat_servicio,$nu_pagina, $nu_regis_mostrar);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {

        $listaservicePag = array("status" => http_response_code(), 'mensaje' => 'ok', "servicio" => $listaservicioPaginado);
        echo json_encode($listaservicePag);
    } else {
        $listaservicePag = array('status' => http_response_code(), 'error' => 'error en el llamado de  servicio');
        echo json_encode($listaservicePag);
    }
}
?>