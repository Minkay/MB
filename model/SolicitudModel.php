<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/SolicitudBean.php';

class SolicitudModel {

    public function listaSolicitud(SolicitudBean $obsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "";
            if ($obsb->getIdSolicitud() == 0 || $obsb->getIdSolicitud() == null) {

                $sql = "CALL sp_lista_solicitud(null)";
            } else {
                $sql = "CALL sp_lista_solicitud($obsb->idSolicitud)";
            }

            $result = mysql_query($sql, $cn);
            $lista['solicitud'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['solicitud'], $row);
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

    public function listaSolicitudPaginado($id_rol_usuario, $id_usuario, $nu_pagina, $nu_regis_mostrar, $no_nombre, $no_area, $no_piso, $no_sede, $no_solicitud, $no_descripcion, $il_solicitud) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_lista_solicitud_paginado($id_rol_usuario ,$id_usuario,$nu_pagina, $nu_regis_mostrar,'$no_nombre','$no_area','$no_piso','$no_sede','$no_solicitud','$no_descripcion','$il_solicitud')";


            $result = mysql_query($sql, $cn);
            $lista['solicitud'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['solicitud'], $row);
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

    public function listaSolicitudPendiente(SolicitudBean $obsb, $id_rol_usuario, $id_usuario) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_lista_solicitud_pendiente_notificacion($id_rol_usuario, $id_usuario)";
            $result = mysql_query($sql, $cn);
            $lista['solicitud'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['solicitud'], $row);
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

    public function listaSolicitudMayorDia() {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_solicitud_mayor_un_dia()";
            $result = mysql_query($sql, $cn);
            $lista['solicitud'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['solicitud'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function insertaSolicitud(SolicitudBean $obsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();


            $sql = "INSERT INTO tb_solicitud (no_solicitud,no_descripcion,img_solicitud,id_usuario,id_respuesta,il_estado_solicitud,il_estado_general)"
                    . " values ('$obsb->nomSolicitud','$obsb->nomDescripcion','$obsb->imgSolicitud',$obsb->idUsuario,$obsb->idRespuesta,$obsb->ilEstadoSolicitud,$obsb->ilEstadoGeneral)";

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

    public function actualizaSolicitud(SolicitudBean $obsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "UPDATE tb_solicitud SET id_respuesta=$obsb->idRespuesta=$obsb->idCosto WHERE id_solicitud=$obsb->idSolicitud";
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

    public function eliminaSolicitud(SolicitudBean $obsb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "DELETE FROM tb_solicitud  WHERE id_Solicitud=$obsb->idSolicitud";
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