<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CatServicioModel.php';
require_once __DIR__ . '/../bean/CatServicioBean.php';

$objCatServicioBean = new CatServicioBean();
$catServicioModel = new CatServicioModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $no_cat_servicio = $data_back->{"no_cat_servicio"};
    $nu_pagina = $data_back->{"nu_pagina"};
    $nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};


    $listaCatServicioPaginado = $catServicioModel->listaCatServicioPaginado($no_cat_servicio, $nu_pagina, $nu_regis_mostrar);

    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $ListCatServicioPag = array("status" => http_response_code(), 'mensaje' => 'ok', "cat_servicio" => $listaCatServicioPaginado);
        echo json_encode($ListCatServicioPag);
    } else {
        $ListCatServicioPag = array('status' => http_response_code(), 'error' => 'error', "cat_servicio" => $listaCatServicioPaginado);
        echo json_encode($ListCatServicioPag);
    }
}
?>