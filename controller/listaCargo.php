<?php
include __DIR__ .'/../cors.php';

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once __DIR__ . '/../model/CargoModel.php';
require_once __DIR__ . '/../bean/CargoBean.php';

// $id_area=$_POST['id_area'];
$objCargoBean = new CargoBean();
$cargoModel = new CargoModel();
// $objCargoBean->setId_cargo($id_area);
$listaCargo = $cargoModel->listaCargo($objCargoBean);

header('Content-type: application/json');
echo json_encode($listaCargo);
?>
