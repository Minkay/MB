<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/SedeModel.php';
require_once __DIR__ . '/../bean/SedeBean.php';

// $id_area=$_POST['id_area'];
$objSedeBean = new SedeBean();
$sedeModel = new SedeModel();
// $objAreaBean->setId_area($id_area);
$listaSede = $sedeModel->listaSede($objSedeBean);

header('Content-type: application/json');
echo json_encode($listaSede);
?>