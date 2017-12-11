<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/MaterialModel.php';
require_once __DIR__ . '/../bean/MaterialBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objMaterialBean = new MaterialBean();
$materialModel = new MaterialModel();

$id_area = $data_back->{"id_area"};

$objMaterialBean->setIdArea($id_area);

$listaMaterialPorArea = $materialModel->listaMaterialPorArea($objMaterialBean);

header('Content-type: application/json');
echo json_encode($listaMaterialPorArea);
?>