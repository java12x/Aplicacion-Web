<?php

include_once '../../datos/conexion/ConexionBD.php';

class Gestion {

    public $id;
    public $ges_anio;
    public $ges_semestre;
    public $ges_estado;

    public function __construct($id, $ges_anio, $ges_semestre, $ges_estado) {
        $this->id = $id;
        $this->ges_anio = $ges_anio;
        $this->ges_semestre = $ges_semestre;
        $this->ges_estado = $ges_estado;
    }

    private function getValoresObj() {
        $valores['ges_anio'] = $this->ges_anio;
        $valores['ges_semestre'] = $this->ges_semestre;
        $valores['ges_estado'] = $this->ges_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Gestion', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Gestion', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Gestion where id=?", array($id));
    }
    
    public function listar() {
        return ConexionBD::obtener('select * from Gestion order by ges_anio, ges_semestre', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Gestion where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->ges_anio = $res[0][1];
            $this->ges_semestre = $res[0][2];
            $this->ges_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function obtenerGestionActual() {
        $res = ConexionBD::obtener("select * from Gestion where ges_estado=1", array());
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->ges_anio = $res[0][1];
            $this->ges_semestre = $res[0][2];
            $this->ges_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function definirGestionActual($id){
        ConexionBD::ejecutar("update gestion set ges_estado=0 where ges_estado=1");
        ConexionBD::ejecutar("update gestion set ges_estado=1 where id=?", array($id));
    }
    
    public function getNombreTabla(){
        return 'Gestion';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getGes_anio() {
        return $this->ges_anio;
    }

    public function setGes_anio($ges_anio) {
        $this->ges_anio = $ges_anio;
    }

    public function getGes_semestre() {
        return $this->ges_semestre;
    }

    public function setGes_semestre($ges_semestre) {
        $this->ges_semestre = $ges_semestre;
    }

    public function getGes_estado() {
        return $this->ges_estado;
    }

    public function setGes_estado($ges_estado) {
        $this->ges_estado = $ges_estado;
    }

}

?>
