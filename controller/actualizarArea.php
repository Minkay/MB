<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/AreaModel.php';
require_once __DIR__ . '/../bean/AreaBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objAreaBean = new AreaBean();
$areaModel = new AreaModel();

//define nombre de los parametros a usar por json
$id_area= $data_back->{'id_area'};
$no_area = $data_back->{'no_area'};
$no_descripcion = $data_back->{'no_descripcion'};

//setear los valores al objeto
$objAreaBean->setIdArea($id_area);
$objAreaBean->setNomArea($no_area);
$objAreaBean->setNomDescripcion($no_descripcion);
$actualizaArea = $areaModel->actualizaArea($objAreaBean);

header('Content-type: application/json');
echo json_encode($actualizaArea);
?>
