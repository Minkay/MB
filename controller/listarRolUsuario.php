<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/RolUsuarioModel.php';
require_once __DIR__ . '/../bean/RolUsuarioBean.php';

$data_back = json_decode(file_get_contents('php://input'));


$objRolUsuarioBean = new RolUsuarioBean();
$rolUsuarioModel = new RolUsuarioModel();

$id_rol_usuario =$data_back->{"id_rol_usuario"};

$objRolUsuarioBean->setIdRolUsuario($id_rol_usuario);

$listaRolUsuario = $rolUsuarioModel->listaRolUsuario($objRolUsuarioBean);

header('Content-type: application/json');
echo json_encode($listaRolUsuario);
?>