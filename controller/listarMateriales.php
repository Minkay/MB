<?php

include __DIR__ . '/../cors.php';



require_once __DIR__ . '/../model/MaterialModel.php';
require_once __DIR__ . '/../bean/MaterialBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objMaterialBean = new MaterialBean();
$materialModel = new MaterialModel();

$id_material = $data_back->{"id_material"};

$objMaterialBean->setIdMaterial($id_material);

$listaMaterial = $materialModel->listaMaterial($objMaterialBean);

header('Content-type: application/json');
echo json_encode($listaMaterial);
?>