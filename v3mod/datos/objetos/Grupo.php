<?php

include_once '../../datos/conexion/ConexionBD.php';

class Grupo {

    public $id;
    public $gru_nombre;
    public $gru_descripcion;
    public $gru_tipo;
    public $gru_estado;

    public function __construct($id, $gru_nombre, $gru_descripcion, $gru_tipo, $gru_estado) {
        $this->id = $id;
        $this->gru_nombre = $gru_nombre;
        $this->gru_descripcion = $gru_descripcion;
        $this->gru_tipo = $gru_tipo;
        $this->gru_estado = $gru_estado;
    }

    private function getValoresObj() {
        $valores['gru_nombre'] = $this->gru_nombre;
        $valores['gru_descripcion'] = $this->gru_descripcion;
        $valores['gru_tipo'] = $this->gru_tipo;
        $valores['gru_estado'] = $this->gru_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Grupo', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Grupo', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Grupo where id=?", array($id));
    }
    
    public function listar() {
        return ConexionBD::obtener('select * from Grupo order by gru_tipo, gru_nombre', array());
    }
    
    public function listarPorTipo($tipo) {
        return ConexionBD::obtener('select * from Grupo where gru_tipo=? order by gru_tipo, gru_nombre', array($tipo));
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Grupo where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->gru_nombre = $res[0][1];
            $this->gru_descripcion = $res[0][2];
            $this->gru_tipo = $res[0][3];
            $this->gru_estado = $res[0][4];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'Grupo';
    }
    
    public function definirHabilitado($id, $habilitado){
        $this->obtener($id);
        $this->setGru_estado($habilitado);
        $this->actualizar();
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getGru_nombre() {
        return $this->gru_nombre;
    }

    public function setGru_nombre($gru_nombre) {
        $this->gru_nombre = $gru_nombre;
    }

    public function getGru_descripcion() {
        return $this->gru_descripcion;
    }

    public function setGru_descripcion($gru_descripcion) {
        $this->gru_descripcion = $gru_descripcion;
    }

    public function getGru_tipo() {
        return $this->gru_tipo;
    }

    public function setGru_tipo($gru_tipo) {
        $this->gru_tipo = $gru_tipo;
    }

    public function getGru_estado() {
        return $this->gru_estado;
    }

    public function setGru_estado($gru_estado) {
        $this->gru_estado = $gru_estado;
    }

}

?>
