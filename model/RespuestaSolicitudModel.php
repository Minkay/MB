<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/RespuestaSolicitudBean.php';

/**
 * RespuestaSolicitudModel
 */
class RespuestaSolicitudModel {

    public function listaRespuestaSolicitud(RespuestaSolicitudBean $obrsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($obrsb->getIdRespuesta() == 0 || $obrsb->getIdRespuesta() == null) {
                $sql = "CALL sp_lista_respuesta_solicitud(NULL)";
            } else {
                $sql = "CALL sp_lista_respuesta_solicitud($obrsb->idRespuesta)";
            }

            $result = mysql_query($sql, $cn);
            $lista['respuesta_solicitud'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['respuesta_solicitud'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
        return $lista;
    }

    public function listaRespuestaSolicitudPorSolicitud(RespuestaSolicitudBean $obrsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            if ($obrsb->idSolicitud != null) {
                $sql = "CALL sp_lista_respuesta_solicitud_por_solicitud($obrsb->idSolicitud)";
            } else {
                $sql = "CALL sp_lista_respuesta_solicitud_por_solicitud(null)";
            }
            $result = mysql_query($sql, $cn);
            $lista['respuesta_solicitud'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['respuesta_solicitud'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
        return $lista;
    }

    public function insertaRespuestaSolicitud(RespuestaSolicitudBean $obrsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            if ($obrsb->getIdResponsable() == null) {
                $obrsb->idResponsable = 0;
            }
            $sql = "CALL sp_inserta_respuesta($obrsb->idSolicitud,'$obrsb->nomPrioridad','$obrsb->nomTiempoRespuesta',$obrsb->idRubro,'$obrsb->nomResponsable',$obrsb->idResponsable,'$obrsb->ilTipoMantenimiento','$obrsb->nomComentario','$obrsb->imgRespuestaSolicitud')";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
    }

    public function actualizaRespuestaSolicitud(RespuestaSolicitudBean $obrsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "UPDATE tb_respuesta_solicitud";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
    }

    public function eliminaRespuestaSolicitud(RespuestaSolicitudBean $obrsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "DELETE FROM tb_respuesta_solicitud  WHERE id_respuesta=$obrsb->idRespuesta";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
    }

}

?>