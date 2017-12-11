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

//setear los valores al objeto
    $objProveedorBean->setIdProveedor($id_proveedor);

    $eliminaProveedor = $proveedorModel->eliminaProveedor($objProveedorBean);
    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($eliminaProveedor == true) {
            $eliminaProv = array("status" => 1, "mensaje" => "Proveedor Eliminado Correctamente");
        } else {
            $eliminaProv = array("status" => 0, "mensaje" => "Error al Eliminar, Revise sus datos");
        }

        echo json_encode($eliminaProv);
    } else {
        $eliminaProv = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($eliminaProv);
    }
}
?>
