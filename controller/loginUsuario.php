<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/UsuarioModel.php';
require_once __DIR__ . '/../bean/UsuarioBean.php';

$objUsuarioBean = new UsuarioBean();
$usuarioModel = new UsuarioModel();

$data_back = json_decode(file_get_contents('php://input'));

$no_login = $data_back->{"no_login"};
$no_password = $data_back->{"no_password"};

$objUsuarioBean->setNomLogin($no_login);
$objUsuarioBean->setNomPassword($no_password);

$listaUsuario = $usuarioModel->loginUsuario($objUsuarioBean);
header('Content-type: application/json');
echo json_encode($listaUsuario);
?>