<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/UsuarioModel.php';
require_once __DIR__ . '/../bean/UsuarioBean.php';

$objUsuarioBean = new UsuarioBean();
$usuarioModel = new UsuarioModel();

$data_back = json_decode(file_get_contents('php://input'));


$nu_pagina = $data_back->{"nu_pagina"};
$nu_regis_mostrar = $data_back->{"nu_regis_mostrar"};
$f_no_nombre = $data_back->{"f_no_nombre"};
$f_no_apelido = $data_back->{"f_no_apelido"};
$f_no_login = $data_back->{"f_no_login"};
$listaUsuarioPag = $usuarioModel->listarUsuarioPaginado($nu_pagina, $nu_regis_mostrar,$f_no_nombre,$f_no_apelido,$f_no_login);
header('Content-type: application/json');
echo json_encode($listaUsuarioPag);
?>