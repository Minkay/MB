<?php

class RolUsuarioBean {

    public $idRolUsuario;
    public $noRolUsuario;
    public $noDescripcion;
    public $ilEstado;

    function getIdRolUsuario() {
        return $this->idRolUsuario;
    }

    function getNoRolUsuario() {
        return $this->noRolUsuario;
    }

    function getNoDescripcion() {
        return $this->noDescripcion;
    }

    function getIlEstado() {
        return $this->ilEstado;
    }

    function setIdRolUsuario($idRolUsuario) {
        $this->idRolUsuario = $idRolUsuario;
    }

    function setNoRolUsuario($noRolUsuario) {
        $this->noRolUsuario = $noRolUsuario;
    }

    function setNoDescripcion($noDescripcion) {
        $this->noDescripcion = $noDescripcion;
    }

    function setIlEstado($ilEstado) {
        $this->ilEstado = $ilEstado;
    }

}
