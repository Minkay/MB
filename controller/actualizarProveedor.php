<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/ProveedorModel.php';
require_once __DIR__ . '/../bean/ProveedorBean.php';

$objProveedorBean = new ProveedorBean();
$proveedorModel = new ProveedorModel();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_back = json_decode(file_get_contents('php://input'));

//define nombre de los parametros a usar por json
    $id_proveedor = $data_back->{'id_proveedor'};
    $no_ruc = $data_back->{'no_ruc'};
    $no_proveedor = $data_back->{'no_proveedor'};
    $no_telefono = $data_back->{'no_telefono'};
    $no_celular = $data_back->{'no_celular'};
    $no_email = $data_back->{'no_email'};
    $no_direccion = $data_back->{'no_direccion'};
    $no_descripcion = $data_back->{'no_descripcion'};


//setear los valores al objeto
    $objProveedorBean->setIdProveedor($id_proveedor);
    $objProveedorBean->setNomRuc($no_ruc);
    $objProveedorBean->setNomProveedor($no_proveedor);
    $objProveedorBean->setNomTelefono($no_telefono);
    $objProveedorBean->setNomCelular($no_celular);
    $objProveedorBean->setNomEmail($no_email);
    $objProveedorBean->setNomDireccion($no_direccion);
    $objProveedorBean->setNomDescripcion($no_descripcion);

    $actualizaProveedor = $proveedorModel->actualizaProveedor($objProveedorBean);
    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($actualizaProveedor == true) {
            $actualizaProv = array("status" => 1, "mensaje" => "Proveedor Actualizado Correctamente");
        } else {
            $actualizaProv = array("status" => 0, "mensaje" => "Error al Actualizar, Revise sus datos");
        }

        echo json_encode($actualizaProv);
    } else {
        $actualizaProv = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($actualizaProv);
    }
}
?>
