<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/ProveedorBean.php';

class ProveedorModel {

    public function listaProveedor(ProveedorBean $objpv) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objpv->getIdProveedor() == 0 || $objpv->getIdProveedor() == null) {
                $sql = "CALL sp_lista_proveedor(null)";
            } else {
                $sql = "CALL sp_lista_proveedor($objpv->idProveedor)";
            }

            $result = mysql_query($sql, $cn);

            $lista = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista, $row);
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

    public function listaProveedorPaginado($no_ruc, $no_proveedor, $nu_pagina, $nu_regis_mostrar) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_proveedor_paginado('$no_ruc','$no_proveedor',$nu_pagina, $nu_regis_mostrar)";

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

    public function insertaProveedor(ProveedorBean $objpv) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_inserta_proveedor('$objpv->nomRuc','$objpv->nomProveedor','$objpv->nomTelefono','$objpv->nomCelular','$objpv->nomEmail',"
                    . "'$objpv->nomDireccion','$objpv->nomDescripcion')";
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

    public function actualizaProveedor(ProveedorBean $objpv) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_actualiza_proveedor($objpv->idProveedor,'$objpv->nomRuc','$objpv->nomProveedor','$objpv->nomTelefono','$objpv->nomCelular','$objpv->nomEmail',"
                    . "'$objpv->nomDireccion','$objpv->nomDescripcion')";
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

    public function eliminaProveedor(ProveedorBean $objpv) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_eliminar_proveedor($objpv->idProveedor)";
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
