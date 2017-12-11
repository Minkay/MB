<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CatServicioModel.php';
require_once __DIR__ . '/../bean/CatServicioBean.php';

$objCatServicioBean = new CatServicioBean();
$catServicioModel = new CatServicioModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    //define nombre de los parametros a usar por json

    $id_cat_servicio = $data_back->{'id_cat_servicio'};
    $no_cat_servicio = $data_back->{'no_cat_servicio'};
    $no_descripcion = $data_back->{'no_descripcion'};

    //setear los valores al objeto
    $objCatServicioBean->setIdCatServicio($id_cat_servicio);
    $objCatServicioBean->setNomCatServicio($no_cat_servicio);
    $objCatServicioBean->setNomDescripcion($no_descripcion);


    $actualizaCatServicio = $catServicioModel->actualizaCatServicio($objCatServicioBean);
    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($actualizaCatServicio == true) {
            $actualizaCatServ = array("status" => 1, "mensaje" => "Categoría Servicio Actualizado Correctamente");
        } else {
            $actualizaCatServ = array("status" => 0, "mensaje" => "Error al insertar Revise sus datos");
        }

        echo json_encode($actualizaCatServ);
    } else {
        $actualizaCatServ = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($actualizaCatServ);
    }
}
?>
