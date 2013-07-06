<?php

include_once '../../datos/conexion/ConexionBD.php';

class SeccionCur {

    public $id;
    public $sCur_nombre;
    public $sCur_pla_id;
    public $sCur_orden;
    public $sCur_descripcion;

    public function __construct($id, $sCur_nombre, $sCur_pla_id, $sCur_orden, $sCur_descripcion) {
        $this->id = $id;
        $this->sCur_nombre = $sCur_nombre;
        $this->sCur_pla_id = $sCur_pla_id;
        $this->sCur_orden = $sCur_orden;
        $this->sCur_descripcion = $sCur_descripcion;
    }

    private function getValoresObj() {
        $valores['sCur_nombre'] = $this->sCur_nombre;
        $valores['sCur_pla_id'] = $this->sCur_pla_id;
        $valores['sCur_orden'] = $this->sCur_orden;
        $valores['sCur_descripcion'] = $this->sCur_descripcion;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('SeccionCur', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('SeccionCur', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from SeccionCur where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from SeccionCur order by sCur_orden', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from SeccionCur where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->sCur_nombre = $res[0][1];
            $this->sCur_pla_id = $res[0][2];
            $this->sCur_orden = $res[0][3];
            $this->sCur_descripcion = $res[0][4];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'SeccionCur';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getSCur_nombre() {
        return $this->sCur_nombre;
    }

    public function setSCur_nombre($sCur_nombre) {
        $this->sCur_nombre = $sCur_nombre;
    }

    public function getSCur_pla_id() {
        return $this->sCur_pla_id;
    }

    public function setSCur_pla_id($sCur_pla_id) {
        $this->sCur_pla_id = $sCur_pla_id;
    }

    public function getSCur_orden() {
        return $this->sCur_orden;
    }

    public function setSCur_orden($sCur_orden) {
        $this->sCur_orden = $sCur_orden;
    }

    public function getSCur_descripcion() {
        return $this->sCur_descripcion;
    }

    public function setSCur_descripcion($sCur_descripcion) {
        $this->sCur_descripcion = $sCur_descripcion;
    }

}

?>
