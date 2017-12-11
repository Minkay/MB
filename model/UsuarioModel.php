<?php

require_once __DIR__ . '/../util/ConexionBD.php';
require_once __DIR__ . '/../bean/UsuarioBean.php';

class UsuarioModel {

    public function listaUsuario(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";
            if ($objub->getIdUsuario() != 0 || $objub->getIdUsuario() != null) {
                $sql = "SELECT  * FROM tb_usuario WHERE id_usuario=$objub->idUsuario AND il_estado=true";
            } else {
                $sql = "SELECT  * FROM tb_usuario WHERE  il_estado=true";
            }

            $result = mysql_query($sql, $cn);
            $lista['usuario'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['usuario'], $row);
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

    public function listarUsuarioPaginado($nu_pagina, $nu_regis_mostrar, $no_nombre, $no_apelido, $no_login) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_lista_usuario_paginado($nu_pagina, $nu_regis_mostrar,'$no_nombre','$no_apelido','$no_login')";


            $result = mysql_query($sql, $cn);
            $lista['usuario'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['usuario'], $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
          
        }
        return $lista;
    }

    /*
     * Listado de usuario sin rol usuario
     * aca se muestran todos los usuarios que no se les ha asignado algun tipo de rol
     */

    public function listaUsuarioSinRol(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();


            $sql = "SELECT  * FROM tb_usuario WHERE id_rol_usuario is NULL AND il_estado=true";


            $result = mysql_query($sql, $cn);
            $lista['usuario'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['usuario'], $row);
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

    /*
     * Listado de usuario con rol usuario
     * aca se muestran todos los usuarios que  se les ha asignado algun tipo de rol
     */

    public function listaUsuarioConRol(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "";

            $sql = "SELECT  * FROM tb_usuario WHERE id_rol_usuario is NOT NULL AND il_estado=true";


            $result = mysql_query($sql, $cn);
            $lista['usuario'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['usuario'], $row);
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

    public function insertaUsuario(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "INSERT INTO tb_usuario (id_rol_usuario,no_login,no_password,no_nombre,no_apellido,no_email,id_area,id_cargo,no_piso,id_sede,no_telefono,no_edad,no_sexo,foto_perfil)"
                    . " values ('$objub->idRolUsuario','$objub->nomLogin',MD5('$objub->nomPassword'),'$objub->nomNombre','$objub->nomApellido', "
                    . "'$objub->nomEmail',$objub->idArea,$objub->idCargo,'$objub->nomPiso',$objub->idSede,'$objub->nomTelefono', "
                    . "'$objub->nomEdad','$objub->nomSexo','$objub->fotoPerfil')";
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

    public function actualizaUsuario(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_actualiza_usurario($objub->idUsuario,$objub->idRolUsuario,'$objub->nomLogin','$objub->nomPassword','$objub->nomNombre','$objub->nomApellido','$objub->nomEmail',$objub->idArea,$objub->idCargo,'$objub->nomPiso',$objub->idSede,'$objub->nomTelefono','$objub->nomEdad','$objub->nomSexo','$objub->fotoPerfil')";

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

    public function agregaRolUsuario(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "UPDATE  tb_usuario SET id_rol_usuario=$objub->idRolUsuario WHERE id_usuario=$objub->idUsuario ";

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

    /*
     */

    public function eliminaUsuario(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "UPDATE  tb_usuario SET il_estado=0 WHERE id_usuario=$objub->idUsuario";
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

    public function loginUsuario(UsuarioBean $objub) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();

            $sql = "CALL sp_login_usuario('$objub->nomLogin','$objub->nomPassword')";

            $result = mysql_query($sql, $cn);
            $lista['usuario'] = array();
            while ($row = mysql_fetch_assoc($result)) {
                array_push($lista['usuario'], $row);
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

    public function listaResponsableSolicitud($no_responsable, $buscador) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $sql = "CALL sp_lista_responsable_solicitud('$no_responsable','$buscador')";

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

}

?>