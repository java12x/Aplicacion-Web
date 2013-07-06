<?php

include_once '../../datos/conexion/ConexionBD.php';

class Plantilla {

    public $id;
    public $pla_descripcion;
    public $pla_texto_;

    public function __construct($id, $pla_descripcion, $pla_texto_) {
        $this->id = $id;
        $this->pla_descripcion = $pla_descripcion;
        $this->pla_texto_ = $pla_texto_;
    }

    private function getValoresObj() {
        $valores['pla_descripcion'] = $this->pla_descripcion;
        $valores['pla_texto_'] = $this->pla_texto_;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Plantilla', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Plantilla', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Plantilla where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from Plantilla', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Plantilla where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->pla_descripcion = $res[0][1];
            $this->pla_texto_ = $res[0][2];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'Plantilla';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPla_descripcion() {
        return $this->pla_descripcion;
    }

    public function setPla_descripcion($pla_descripcion) {
        $this->pla_descripcion = $pla_descripcion;
    }

    public function getPla_texto_() {
        return $this->pla_texto_;
    }

    public function setPla_texto_($pla_texto_) {
        $this->pla_texto_ = $pla_texto_;
    }

}

?>
