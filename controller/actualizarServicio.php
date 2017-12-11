<?php

include __DIR__ . '/../cors.php';
require_once __DIR__ . '/../model/ServicioModel.php';
require_once __DIR__ . '/../bean/ServicioBean.php';

$objServicioBean = new ServicioBean();
$servicioModel = new ServicioModel();
$data_back = json_decode(file_get_contents('php://input'));
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_servicio = $data_back->{"id_servicio"};
    $id_cat_servicio = $data_back->{'id_cat_servicio'};
    $no_servicio = $data_back->{"no_servicio"};
    $no_descripcion = $data_back->{"no_descripcion"};
    $va_precio = $data_back->{"va_precio"};
    $co_codigo = $data_back->{"co_codigo"};

    $objServicioBean->setIdServicio($id_servicio);
    $objServicioBean->setIdCatServicio($id_cat_servicio);
    $objServicioBean->setNomServicio($no_servicio);
    $objServicioBean->setNomDescripcion($no_descripcion);
    $objServicioBean->setVaPrecio($va_precio);
    $objServicioBean->setCoCodigo($co_codigo);

    $actualizaServicio = $servicioModel->actualizaServicio($objServicioBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($actualizaServicio == true) {
            $actualizaService = array("status" => 1, "mensaje" => "Servicio actualizado Correctamente");
        } else {
            $actualizaService = array("status" => 0, "mensaje" => "Error al actualizar, Revise sus datos");
        }
        echo json_encode($actualizaService);
    } else {
        $actualizaService = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($actualizaService);
    }
}
?>