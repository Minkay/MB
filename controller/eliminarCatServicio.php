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
    $il_estado = $data_back->{'il_estado'};
    //setear los valores al objeto
    $objCatServicioBean->setIdCatServicio($id_cat_servicio);
    $objCatServicioBean->setIlEstado($il_estado);

    $eliminaCatServicio = $catServicioModel->eliminaCatServicio($objCatServicioBean);
    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($eliminaCatServicio == true) {
            $eliminaCatServ = array("status" => 1, "mensaje" => "Categoría Servicio Eliminado Correctamente");
        } else {
            $eliminaCatServ = array("status" => 0, "mensaje" => "Error al insertar Revise sus datos");
        }

        echo json_encode($eliminaCatServ);
    } else {
        $eliminaCatServ = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($eliminaCatServ);
    }
}
?>
