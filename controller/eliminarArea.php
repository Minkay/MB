<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/AreaModel.php';
require_once __DIR__ . '/../bean/AreaBean.php';

$objAreaBean = new AreaBean();
$areaModel = new AreaModel();
$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//define nombre de los parametros a usar por json
    $id_area = $data_back->{'id_area'};


//setear los valores al objeto
    $objAreaBean->setIdArea($id_area);

    $eliminarArea = $areaModel->eliminaArea($objAreaBean);


    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($eliminarArea == true) {
            $eliminarAr = array("status" => 1, "mensaje" => "División Eliminado Correctamente");
        } else {
            $eliminarAr = array("status" => 0, "mensaje" => "No se puede Eliminar porque este registro esta en uso.");
        }
        echo json_encode($eliminarAr);
    } else {
        $eliminarAr = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($eliminarAr);
    }
}
?>
