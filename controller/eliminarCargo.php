<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CargoModel.php';
require_once __DIR__ . '/../bean/CargoBean.php';


$objCargoBean = new CargoBean();
$cargoModel = new CargoModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_cargo = $data_back->{"id_cargo"};

    $objCargoBean->setIdCargo($id_cargo);


    $eliminaCargo = $cargoModel->eliminaCargo($objCargoBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($eliminaCargo == true) {
            $eliminaCarg = array("status" => 1, "mensaje" => "Gerencia Eliminado Correctamente");
        } else {
            $eliminaCarg = array("status" => 0, "mensaje" => "No se puede Eliminar porque este registro esta en uso.");
        }
        echo json_encode($eliminaCarg);
    } else {
        $eliminaCarg = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($eliminaCarg);
    }
}
?>
