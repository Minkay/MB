<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/HistorialSolicitudBean.php';

class HistorialSolicitudModel {

    public function listaHistorialSolicitud(HistorialSolicitudBean $obhsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_listado_historial($obhsb->idSolicitud)";

            $result = mysql_query($sql, $cn);

            $lista['historial_solicitud'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['historial_solicitud'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function insertaHistorialSolicitud(HistorialSolicitudBean $obhsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_inserta_hisotorial_solicitud($obhsb->idSolicitud,'$obhsb->nomRespuestaSolicitud','$obhsb->nomComentario','$obhsb->imgSolicitudRespuesta')";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result(mysql_query($sql, $cn));
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}

?>