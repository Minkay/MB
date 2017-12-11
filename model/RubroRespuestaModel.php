<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/RubroRespuestaBean.php';

class RubroRespuestaModel {

    public function listaRubroRespuesta(RubroRespuestaBean $objrrb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objrrb->getIdRubroRespuesta() == 0 || $objrrb->getIdRubroRespuesta() == null) {
                $sql = "CALL sp_lista_rubro_respuesta(null)";
            } else {
                $sql = "CALL sp_lista_rubro_respuesta($objrrb->idRubroRespuesta)";
            }

            $result = mysql_query($sql, $cn);

            $lista = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function listaRubroRespuestaPaginado($no_rubro_respuesta, $nu_pagina, $nu_regis_mostrar) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_rubro_respuesta_paginado('$no_rubro_respuesta',$nu_pagina, $nu_regis_mostrar)";

            $result = mysql_query($sql, $cn);

            $lista = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        return $lista;
    }

    public function insertaRubroRespuesta(RubroRespuestaBean $objrrb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_inserta_rubro_respuesta('$objrrb->nomRubroRespuesta','$objrrb->nomDescripcion')";
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

    public function actualizaRubroRespuesta(RubroRespuestaBean $objrrb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_actualiza_rubro_respuesta($objrrb->idRubroRespuesta,'$objrrb->nomRubroRespuesta','$objrrb->nomDescripcion')";
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

    public function eliminaRubroRespuesta(RubroRespuestaBean $objrrb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_elimina_rubro_respuesta($objrrb->idRubroRespuesta)";
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
