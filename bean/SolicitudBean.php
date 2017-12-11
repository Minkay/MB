<?php

class SolicitudBean {

    public $idSolicitud;
    public $nomSolicitud;
    public $nomDescripcion;
    public $imgSolicitud;
    public $idUsuario;
    public $idRespuesta;
    public $idCosto;
    public $ilEstadoSolicitud;
    public $ilEstadoGeneral;

    function getIdSolicitud() {
        return $this->idSolicitud;
    }

    function getNomSolicitud() {
        return $this->nomSolicitud;
    }

    function getNomDescripcion() {
        return $this->nomDescripcion;
    }

    function getImgSolicitud() {
        return $this->imgSolicitud;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdRespuesta() {
        return $this->idRespuesta;
    }

    function getIdCosto() {
        return $this->idCosto;
    }

    function getIlEstadoSolicitud() {
        return $this->ilEstadoSolicitud;
    }

    function getIlEstadoGeneral() {
        return $this->ilEstadoGeneral;
    }

    function setIdSolicitud($idSolicitud) {
        $this->idSolicitud = $idSolicitud;
    }

    function setNomSolicitud($nomSolicitud) {
        $this->nomSolicitud = $nomSolicitud;
    }

    function setNomDescripcion($nomDescripcion) {
        $this->nomDescripcion = $nomDescripcion;
    }

    function setImgSolicitud($imgSolicitud) {
        $this->imgSolicitud = $imgSolicitud;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdRespuesta($idRespuesta) {
        $this->idRespuesta = $idRespuesta;
    }

    function setIdCosto($idCosto) {
        $this->idCosto = $idCosto;
    }

    function setIlEstadoSolicitud($ilEstadoSolicitud) {
        $this->ilEstadoSolicitud = $ilEstadoSolicitud;
    }

    function setIlEstadoGeneral($ilEstadoGeneral) {
        $this->ilEstadoGeneral = $ilEstadoGeneral;
    }

}
