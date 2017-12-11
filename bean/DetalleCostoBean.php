<?php

class DetalleCostoBean {

    public $idCosto;
    public $numCantidad;
    public $vaPrecio;

    function getIdCosto() {
        return $this->idCosto;
    }

    function getNumCantidad() {
        return $this->numCantidad;
    }

    function getVaPrecio() {
        return $this->vaPrecio;
    }

    function setIdCosto($idCosto) {
        $this->idCosto = $idCosto;
    }

    function setNumCantidad($numCantidad) {
        $this->numCantidad = $numCantidad;
    }

    function setVaPrecio($vaPrecio) {
        $this->vaPrecio = $vaPrecio;
    }

}
