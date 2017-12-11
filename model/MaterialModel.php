<?php

/**
 * MaterialModel
 */
require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/MaterialBean.php';

class MaterialModel {

    public function listaMaterial(MaterialBean $objMb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objMb->getIdMaterial() == 0 || $objMb->getIdMaterial() == null) {
                $sql = "SELECT * FROM tb_materiales";
            } else {
                $sql = "SELECT * FROM tb_materiales WHERE id_material=$objMb->idMaterial";
            }
            $result = mysql_query($sql, $cn);
            $lista['materiales'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['materiales'], $row);
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

    public function listaMaterialPaginado($no_material,$no_rubro,$co_codigo,$nu_pagina, $nu_regis_mostrar) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_materiales_paginado('$no_material','$no_rubro','$co_codigo',$nu_pagina, $nu_regis_mostrar)";

            $result = mysql_query($sql, $cn);
            $lista['materiales'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['materiales'], $row);
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

    public function listaMaterialPorRubro(MaterialBean $objMb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "SELECT * FROM tb_materiales WHERE id_rubro=$objMb->idRubro";

            $result = mysql_query($sql, $cn);
            $lista['materiales'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['materiales'], $row);
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

    public function insertaMaterial(MaterialBean $objMb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_insertar_materiales($objMb->idRubro,'$objMb->nomMaterial','$objMb->vaCosto','$objMb->coCodigo','$objMb->nomDescripcion')";
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

    public function actualizaMaterial(MaterialBean $objMb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_actualizar_materiales($objMb->idMaterial,$objMb->idRubro,'$objMb->nomMaterial','$objMb->vaCosto','$objMb->coCodigo','$objMb->nomDescripcion')";
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

    public function eliminaMaterial(MaterialBean $objMb) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_eliminar_materiales($objMb->idMaterial)";
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