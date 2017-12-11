<?php

class RespuestaSolicitudBean {

    public $idRespuesta;
    public $idSolicitud;
    public $nomPrioridad;
    public $nomTiempoRespuesta;
    public $idRubro;
    public $nomResponsable;
    public $idResponsable;
    public $ilTipoMantenimiento;
    public $nomComentario;
    public $imgRespuestaSolicitud;
    public $feFechaRespuesta;

    function getIdRespuesta() {
        return $this->idRespuesta;
    }

    function getIdSolicitud() {
        return $this->idSolicitud;
    }

    function getNomPrioridad() {
        return $this->nomPrioridad;
    }

    function getNomTiempoRespuesta() {
        return $this->nomTiempoRespuesta;
    }

    function getIdRubro() {
        return $this->idRubro;
    }

    function getNomResponsable() {
        return $this->nomResponsable;
    }

    function getIdResponsable() {
        return $this->idResponsable;
    }

    function getNomComentario() {
        return $this->nomComentario;
    }

    function getImgRespuestaSolicitud() {
        return $this->imgRespuestaSolicitud;
    }

    function getFeFechaRespuesta() {
        return $this->feFechaRespuesta;
    }

    function setIdRespuesta($idRespuesta) {
        $this->idRespuesta = $idRespuesta;
    }

    function setIdSolicitud($idSolicitud) {
        $this->idSolicitud = $idSolicitud;
    }

    function setNomPrioridad($nomPrioridad) {
        $this->nomPrioridad = $nomPrioridad;
    }

    function setNomTiempoRespuesta($nomTiempoRespuesta) {
        $this->nomTiempoRespuesta = $nomTiempoRespuesta;
    }

    function setIdRubro($idRubro) {
        $this->idRubro = $idRubro;
        if ($idRubro == null) {
            $this->idRubro = 0;
        }
    }

    function setNomResponsable($nomResponsable) {
        $this->nomResponsable = $nomResponsable;
    }

    function setIdResponsable($idResponsable) {
        $this->idResponsable = $idResponsable;
    }

    function getIlTipoMantenimiento() {
        return $this->ilTipoMantenimiento;
    }

    function setIlTipoMantenimiento($ilTipoMantenimiento) {
        $this->ilTipoMantenimiento = $ilTipoMantenimiento;
    }

    function setNomComentario($nomComentario) {
        $this->nomComentario = $nomComentario;
    }

    function setImgRespuestaSolicitud($imgRespuestaSolicitud) {
        $this->imgRespuestaSolicitud = $imgRespuestaSolicitud;
    }

    function setFeFechaRespuesta($feFechaRespuesta) {
        $this->feFechaRespuesta = $feFechaRespuesta;
    }

}
