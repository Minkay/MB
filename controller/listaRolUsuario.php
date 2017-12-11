<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/RolUsuarioModel.php';
require_once __DIR__ . '/../bean/RolUsuarioBean.php';

$data_back = json_decode(file_get_contents('php://input'));

// $id_area=$_POST['id_area'];
$objRolUsuarioBean = new RolUsuarioBean();
$rolUsuarioModel = new RolUsuarioModel();

// $objAreaBean->setId_area($id_area);
$listaRolUsuario = $rolUsuarioModel->listaRolUsuario($objRolUsuarioBean);

header('Content-type: application/json');
echo json_encode($listaRolUsuario);
?>