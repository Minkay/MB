<?php

class RubroRespuestaBean {

    public $idRubroRespuesta;
    public $nomRubroRespuesta;
    public $nomDescripcion;
    
    function getIdRubroRespuesta() {
        return $this->idRubroRespuesta;
    }

    function getNomRubroRespuesta() {
        return $this->nomRubroRespuesta;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function setIdRubroRespuesta($idRubroRespuesta) {
        $this->idRubroRespuesta = $idRubroRespuesta;
    }

    function setNomRubroRespuesta($nomRubroRespuesta) {
        $this->nomRubroRespuesta = $nomRubroRespuesta;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }


}