<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CatServicioModel.php';
require_once __DIR__ . '/../bean/CatServicioBean.php';

$objCatServicioBean = new CatServicioBean();
$catServicioModel = new CatServicioModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cat_servicio = $data_back->{'id_cat_servicio'};

    $objCatServicioBean->setIdCatServicio($id_cat_servicio);
    $listaCatServicio = $catServicioModel->listaCatServicio($objCatServicioBean);

    header('Content-type: application/json');

    if (http_response_code() >= 200 && http_response_code() < 300) {

        $ListCatServicio = array("status" => http_response_code(), 'mensaje' => 'ok', "cat_servicio" => $listaCatServicio);
        echo json_encode($ListCatServicio);
    } else {
        $ListCatServicio = array('status' => http_response_code(), 'error' => 'error', "cat_servicio" => $listaCatServicio);
        echo json_encode($ListCatServicio);
    }
}
?>