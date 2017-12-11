<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CargoModel.php';
require_once __DIR__ . '/../bean/CargoBean.php';


$objCargoBean = new CargoBean();
$cargoModel = new CargoModel();

$data_back = json_decode(file_get_contents('php://input'));

$id_cargo = $data_back->{"id_cargo"};

$objCargoBean->setIdCargo($id_cargo);
$listaCargo = $cargoModel->listaCargo($objCargoBean);

header('Content-type: application/json');
echo json_encode($listaCargo);
?>
