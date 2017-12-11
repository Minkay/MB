<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/UsuarioModel.php';
require_once __DIR__ . '/../bean/UsuarioBean.php';

$objUsuarioBean = new UsuarioBean();
$usuarioModel = new UsuarioModel();

$data_back = json_decode(file_get_contents('php://input'));

$id_usuario = $data_back->{"id_usuario"};
 

$objUsuarioBean->setIdUsuario($id_usuario);

$listaUsuario = $usuarioModel->listaUsuario($objUsuarioBean);
header('Content-type: application/json');
echo json_encode($listaUsuario);
?>