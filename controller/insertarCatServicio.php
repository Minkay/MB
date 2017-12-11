<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CatServicioModel.php';
require_once __DIR__ . '/../bean/CatServicioBean.php';

$objCatServicioBean = new CatServicioBean();
$catServicioModel = new CatServicioModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


//define nombre de los parametros a usar por json

    $no_cat_servicio = $data_back->{'no_cat_servicio'};
    $no_descripcion = $data_back->{'no_descripcion'};

//setear los valores al objeto
    $objCatServicioBean->setNomCatServicio($no_cat_servicio);
    $objCatServicioBean->setNomDescripcion($no_descripcion);


    $insertaCatServicio = $catServicioModel->insertaCatServicio($objCatServicioBean);
    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($insertaCatServicio == true) {
            $insertaCatServ = array("status" => 1, "mensaje" => "Categoría Servicio Insertado Correctamente");
        } else {
            $insertaCatServ = array("status" => 0, "mensaje" => "Error al insertar Revise sus datos");
        }

        echo json_encode($insertaCatServ);
    } else {
        $insertaCatServ = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($insertaCatServ);
    }
}
?>
