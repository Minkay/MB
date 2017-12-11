<?php

class RubroBean {

    public $idRubro;
    public $nomRubro;
    public $nomDescripcion;

    function getIdRubro() {
        return $this->idRubro;
    }

    function getNomRubro() {
        return $this->nomRubro;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function setIdRubro($idRubro) {
        $this->idRubro = $idRubro;
    }

    function setNomRubro($nomRubro) {
        $this->nomRubro = $nomRubro;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

}
