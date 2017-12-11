<?php
include __DIR__ .'/../cors.php';
 
require_once __DIR__ . '/../model/CargoModel.php';
require_once __DIR__ . '/../bean/CargoBean.php';

 
$objCargoBean = new CargoBean();
$cargoModel = new CargoModel();

$data_back = json_decode(file_get_contents('php://input'));

$id_cargo=$data_back->{"id_cargo"};
$id_area=$data_back->{"id_area"};
$no_cargo=$data_back->{"no_cargo"};
$no_descripcion=$data_back->{"no_descripcion"};
 
$objCargoBean->setIdCargo($id_cargo);
$objCargoBean->setIdArea($id_area);
$objCargoBean->setNomCargo($no_cargo);
$objCargoBean->setNomDescripcion($no_descripcion);


$actualizaCargo = $cargoModel->actualizaCargo($objCargoBean);

header('Content-type: application/json');
echo json_encode($actualizaCargo);
?>
