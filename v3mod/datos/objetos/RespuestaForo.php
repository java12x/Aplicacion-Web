<?php

include_once '../../datos/conexion/ConexionBD.php';

class RespuestaForo {

    public $id;
    public $resF_per_id;
    public $resF_temF_id;
    public $resF_texto;
    public $resF_fecha;
    public $resF_estado;

    public function __construct($id, $resF_per_id, $resF_temF_id, $resF_texto, $resF_fecha, $resF_estado) {
        $this->id = $id;
        $this->resF_per_id = $resF_per_id;
        $this->resF_temF_id = $resF_temF_id;
        $this->resF_texto = $resF_texto;
        $this->resF_fecha = $resF_fecha;
        $this->resF_estado = $resF_estado;
    }

    private function getValoresObj() {
        $valores['resF_per_id'] = $this->resF_per_id;
        $valores['resF_temF_id'] = $this->resF_temF_id;
        $valores['resF_texto'] = $this->resF_texto;
        $valores['resF_fecha'] = $this->resF_fecha;
        $valores['resF_estado'] = $this->resF_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('RespuestaForo', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('RespuestaForo', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from RespuestaForo where id=" . $id);
    }

    public function listar() {
        return ConexionBD::obtener('select * from RespuestaForo');
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from RespuestaForo where id=" . $id);
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->resF_per_id = $res[0][1];
            $this->resF_temF_id = $res[0][2];
            $this->resF_texto = $res[0][3];
            $this->resF_fecha = $res[0][4];
            $this->resF_estado = $res[0][5];
            return $res[0];
        }
        return null;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getResF_per_id() {
        return $this->resF_per_id;
    }

    public function setResF_per_id($resF_per_id) {
        $this->resF_per_id = $resF_per_id;
    }

    public function getResF_temF_id() {
        return $this->resF_temF_id;
    }

    public function setResF_temF_id($resF_temF_id) {
        $this->resF_temF_id = $resF_temF_id;
    }

    public function getResF_texto() {
        return $this->resF_texto;
    }

    public function setResF_texto($resF_texto) {
        $this->resF_texto = $resF_texto;
    }

    public function getResF_fecha() {
        return $this->resF_fecha;
    }

    public function setResF_fecha($resF_fecha) {
        $this->resF_fecha = $resF_fecha;
    }

    public function getResF_estado() {
        return $this->resF_estado;
    }

    public function setResF_estado($resF_estado) {
        $this->resF_estado = $resF_estado;
    }

}

?>
