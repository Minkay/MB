<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CostoModel.php';
require_once __DIR__ . '/../bean/CostoBean.php';



$objCostoBean = new CostoBean();
$costoModel = new CostoModel();
$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_costo = $data_back->{"id_costo"};

    $objCostoBean->setIdCosto($id_costo);

    $eliminaCosto = $costoModel->eliminaCosto($objCostoBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($eliminaCosto == true) {
            $eliminaCos = array("status" => 1, "mensaje" => "Costo Eliminado Correctamente");
        } else {
            $eliminaCos = array("status" => 0, "mensaje" => "Error al Eliminar, Revise sus datos");
        }

        echo json_encode($eliminaCos);
    } else {
        $eliminaCos = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($eliminaCos);
    }
}
?>