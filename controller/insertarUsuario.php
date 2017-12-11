<?php
include __DIR__ .'/../cors.php';

require_once __DIR__ . '/../model/UsuarioModel.php';
require_once __DIR__ . '/../bean/UsuarioBean.php';

$objUsuarioBean = new UsuarioBean();
$usuarioModel = new UsuarioModel();

$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$id_rol_usuario = $data_back->{"id_rol_usuario"};
$no_login = $data_back->{"no_login"};
$no_password = $data_back->{"no_password"};
$no_nombre = $data_back->{"no_nombre"};
$no_apellido = $data_back->{"no_apellido"};
$no_email = $data_back->{"no_email"};
$id_area = $data_back->{"id_area"};
$id_cargo = $data_back->{"id_cargo"};
$no_piso = $data_back->{"no_piso"};
$id_sede = $data_back->{"id_sede"};
$no_telefono = $data_back->{"no_telefono"};
$no_edad = $data_back->{"no_edad"};
$no_sexo = $data_back->{"no_sexo"};
$foto_perfil = $data_back->{"foto_perfil"};


$objUsuarioBean->setIdRolUsuario($id_rol_usuario);
$objUsuarioBean->setNomLogin($no_login);
$objUsuarioBean->setNomPassword($no_password);
$objUsuarioBean->setNomNombre($no_nombre);
$objUsuarioBean->setNomApellido($no_apellido);
$objUsuarioBean->setNomEmail($no_email);
$objUsuarioBean->setIdArea($id_area);
$objUsuarioBean->setIdCargo($id_cargo);
$objUsuarioBean->setNomPiso($no_piso);
$objUsuarioBean->setIdSede($id_sede);
$objUsuarioBean->setNomTelefono($no_telefono);
$objUsuarioBean->setNomEdad($no_edad);
$objUsuarioBean->setNomSexo($no_sexo);
$objUsuarioBean->setFotoPerfil($foto_perfil);


$insertaUsuario = $usuarioModel->insertaUsuario($objUsuarioBean);
header('Content-type: application/json');
echo json_encode($insertaUsuario);
}
?>