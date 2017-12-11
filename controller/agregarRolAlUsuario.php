<?php
 include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/UsuarioModel.php';
require_once __DIR__ . '/../bean/UsuarioBean.php';

$data_back = json_decode(file_get_contents('php://input'));

$objUsuarioBean = new UsuarioBean();
$usuarioModel = new UsuarioModel();



$id_usuario = $data_back->{"id_usuario"};
$id_rol_usuario = $data_back->{"id_rol_usuario"};

$objUsuarioBean->setIdUsuario($id_usuario);
$objUsuarioBean->setIdRolUsuario($id_rol_usuario);

$agregarRolAlUsuario = $usuarioModel->agregaRolUsuario($objUsuarioBean);
header('Content-type: application/json');
echo json_encode($agregarRolAlUsuario);
?>