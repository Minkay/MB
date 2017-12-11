<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/CostoBean.php';

class CostoModel {

    public function listaCosto(CostoBean $obcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($obcb->getIdCosto() == 0 || $obcb->getIdCosto() == null) {
                $sql = "SELECT * FROM tb_costo";
            } else {
                $sql = "SELECT * FROM tb_costo WHERE  id_costo=$obcb->idCosto";
            }

            $result = mysql_query($sql, $cn);
            $lista['costo'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['costo'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function listaCostoPorSolicitud(CostoBean $obcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_costo_por_solicitud($obcb->idSolicitud)";

            $result = mysql_query($sql, $cn);
            $lista['costo'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['costo'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function insertaCosto(CostoBean $obcb) {

        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_inserta_costo($obcb->idSolicitud,'$obcb->ilTipo',$obcb->idEjecutor, $obcb->idRubro,$obcb->idMaterial,$obcb->idCatServicio,$obcb->idServicio,$obcb->idSede,$obcb->numCantidad,'$obcb->vaCostoUnitario','$obcb->vaCostoServicio')";

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

    public function actualizaCosto(CostoBean $obcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_actualiza_costo($obcb->idCosto, $obcb->idSolicitud,'$obcb->ilTipo',$obcb->idEjecutor, $obcb->idRubro,$obcb->idMaterial,$obcb->idCatServicio,$obcb->idServicio, $obcb->idSede, $obcb->numCantidad,'$obcb->vaCostoUnitario','$obcb->vaCostoServicio')";

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

    public function eliminaCosto(CostoBean $obcb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_elimina_costo($obcb->idCosto)";
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