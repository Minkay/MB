<?php

class SedeBean {

    public $idSede;
    public $nomSede;
    public $nomDescripcion;
    public $ilEstado;

    function getIdSede() {
        return $this->idSede;
    }

    function getNomSede() {
        return $this->nomSede;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function getIlEstado() {
        return $this->ilEstado;
    }

    function setIdSede($idSede) {
        $this->idSede = $idSede;
    }

    function setNomSede($nomSede) {
        $this->nomSede = $nomSede;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

    function setIlEstado($ilEstado) {
        $this->ilEstado = $ilEstado;
    }

}
