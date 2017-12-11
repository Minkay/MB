<?php

include __DIR__ . '/../cors.php';

require_once __DIR__ . '/../model/CostoModel.php';
require_once __DIR__ . '/../bean/CostoBean.php';

$objCostoBean = new CostoBean();
$costoModel = new CostoModel();
$data_back = json_decode(file_get_contents('php://input'));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* datos recibidos de  json */
    $id_costo = $data_back->{"id_costo"};
    $id_solicitud = $data_back->{"id_solicitud"};
    $il_tipo = $data_back->{"il_tipo"};
    $id_ejecutor = $data_back->{"id_ejecutor"};
    $id_rubro = $data_back->{"id_rubro"};
    $id_material = $data_back->{"id_material"};
    $id_cat_servicio = $data_back->{"id_cat_servicio"};
    $id_servicio = $data_back->{"id_servicio"};
    $id_sede = $data_back->{"id_sede"};
    $nu_cantidad = $data_back->{"nu_cantidad"};
    $va_costo_unitario = $data_back->{"va_costo_unitario"};
    $va_costo_servicio = $data_back->{"va_costo_servicio"};

    /* setear data en el objeto */
    $objCostoBean->setIdCosto($id_costo);
    $objCostoBean->setIdSolicitud($id_solicitud);
    $objCostoBean->setIlTipo($il_tipo);
    $objCostoBean->setIdEjecutor($id_ejecutor);
    $objCostoBean->setIdRubro($id_rubro);
    $objCostoBean->setIdMaterial($id_material);
    $objCostoBean->setIdCatServicio($id_cat_servicio);
    $objCostoBean->setIdServicio($id_servicio);
    $objCostoBean->setIdSede($id_sede);
    $objCostoBean->setNumCantidad($nu_cantidad);
    $objCostoBean->setVaCostoUnitario($va_costo_unitario);
    $objCostoBean->setVaCostoServicio($va_costo_servicio);


    $actualizaCosto = $costoModel->actualizaCosto($objCostoBean);

    header('Content-type: application/json');
    if (http_response_code() >= 200 && http_response_code() < 300) {
        if ($actualizaCosto == true) {
            $actualizaCos = array("status" => 1, "mensaje" => "Costo Actualizado Correctamente");
        } else {
            $actualizaCos = array("status" => 0, "mensaje" => "Error al Actualizar, Revise sus datos");
        }

        echo json_encode($actualizaCos);
    } else {
        $actualizaCos = array("status" => -1, "mensaje" => "Error en el llamado al servicio");
        echo json_encode($actualizaCos);
    }
}
?>