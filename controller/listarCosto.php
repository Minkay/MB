<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/CostoModel.php';
require_once __DIR__ . '/../bean/CostoBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objCostoBean = new CostoBean();
$costoModel = new CostoModel();

$id_costo = $data_back->{"id_costo"};
$objCostoBean->setIdCosto($id_costo);
$listaCosto = $costoModel->listaCosto($objCostoBean);

header('Content-type: application/json');
echo json_encode($listaCosto);
?>