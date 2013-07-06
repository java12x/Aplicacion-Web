<?php

include_once '../../datos/conexion/ConexionBD.php';

class TemaForo {

    public $id;
    public $temF_per_id;
    public $temF_catF_id;
    public $temF_titulo;
    public $temF_texto;
    public $temF_fecha;
    public $temF_estado;

    public function __construct($id, $temF_per_id, $temF_catF_id, $temF_titulo, $temF_texto, $temF_fecha, $temF_estado) {
        $this->id = $id;
        $this->temF_per_id = $temF_per_id;
        $this->temF_catF_id = $temF_catF_id;
        $this->temF_titulo = $temF_titulo;
        $this->temF_texto = $temF_texto;
        $this->temF_fecha = $temF_fecha;
        $this->temF_estado = $temF_estado;
    }

    private function getValoresObj() {
        $valores['temF_per_id'] = $this->temF_per_id;
        $valores['temF_catF_id'] = $this->temF_catF_id;
        $valores['temF_titulo'] = $this->temF_titulo;
        $valores['temF_texto'] = $this->temF_texto;
        $valores['temF_fecha'] = $this->temF_fecha;
        $valores['temF_estado'] = $this->temF_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('TemaForo', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('TemaForo', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from TemaForo where id=" . $id);
    }

    public function listar() {
        return ConexionBD::obtener('select * from TemaForo');
    }
    
    public function listarTemasPersona($per_id, $cat_id) {
        return ConexionBD::obtener("select t.* from temaforo t where t.temf_per_id=" . $per_id . " and t.temf_catf_id=" . $cat_id . " order by t.temf_fecha");
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from TemaForo where id=" . $id);
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->temF_per_id = $res[0][1];
            $this->temF_catF_id = $res[0][2];
            $this->temF_titulo = $res[0][3];
            $this->temF_texto = $res[0][4];
            $this->temF_fecha = $res[0][5];
            $this->temF_estado = $res[0][6];
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

    public function getTemF_per_id() {
        return $this->temF_per_id;
    }

    public function setTemF_per_id($temF_per_id) {
        $this->temF_per_id = $temF_per_id;
    }

    public function getTemF_catF_id() {
        return $this->temF_catF_id;
    }

    public function setTemF_catF_id($temF_catF_id) {
        $this->temF_catF_id = $temF_catF_id;
    }

    public function getTemF_titulo() {
        return $this->temF_titulo;
    }

    public function setTemF_titulo($temF_titulo) {
        $this->temF_titulo = $temF_titulo;
    }

    public function getTemF_texto() {
        return $this->temF_texto;
    }

    public function setTemF_texto($temF_texto) {
        $this->temF_texto = $temF_texto;
    }

    public function getTemF_fecha() {
        return $this->temF_fecha;
    }

    public function setTemF_fecha($temF_fecha) {
        $this->temF_fecha = $temF_fecha;
    }

    public function getTemF_estado() {
        return $this->temF_estado;
    }

    public function setTemF_estado($temF_estado) {
        $this->temF_estado = $temF_estado;
    }

}

?>
