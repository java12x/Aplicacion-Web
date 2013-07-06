<?php

include_once '../../datos/conexion/ConexionBD.php';

class Materia {

    public $id;
    public $mat_sigla;
    public $mat_nombre;
    public $mat_semestre;
    public $mat_HTeoricas;
    public $mat_HPracticas;
    public $mat_HSemestre;
    public $mat_creditos;
    public $mat_estado;

    public function __construct($id, $mat_sigla, $mat_nombre, $mat_semestre, $mat_HTeoricas, $mat_HPracticas, $mat_HSemestre, $mat_creditos, $mat_estado) {
        $this->id = $id;
        $this->mat_sigla = $mat_sigla;
        $this->mat_nombre = $mat_nombre;
        $this->mat_semestre = $mat_semestre;
        $this->mat_HTeoricas = $mat_HTeoricas;
        $this->mat_HPracticas = $mat_HPracticas;
        $this->mat_HSemestre = $mat_HSemestre;
        $this->mat_creditos = $mat_creditos;
        $this->mat_estado = $mat_estado;
    }

    private function getValoresObj() {
        $valores['mat_sigla'] = $this->mat_sigla;
        $valores['mat_nombre'] = $this->mat_nombre;
        $valores['mat_semestre'] = $this->mat_semestre;
        $valores['mat_HTeoricas'] = $this->mat_HTeoricas;
        $valores['mat_HPracticas'] = $this->mat_HPracticas;
        $valores['mat_HSemestre'] = $this->mat_HSemestre;
        $valores['mat_creditos'] = $this->mat_creditos;
        $valores['mat_estado'] = $this->mat_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Materia', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Materia', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Materia where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from Materia order by mat_semestre, mat_nombre', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Materia where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->mat_sigla = $res[0][1];
            $this->mat_nombre = $res[0][2];
            $this->mat_semestre = $res[0][3];
            $this->mat_HTeoricas = $res[0][4];
            $this->mat_HPracticas = $res[0][5];
            $this->mat_HSemestre = $res[0][6];
            $this->mat_creditos = $res[0][7];
            $this->mat_estado = $res[0][8];
            return $res[0];
        }
        return null;
    }
    
    public function definirHabilitado($id, $habilitado){
        $this->obtener($id);
        $this->setMat_estado(!$this->getMat_estado());
        //$this->setMat_estado($habilitado);
        $this->actualizar();
    }
    
    public function getNombreTabla(){
        return 'Materia';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMat_sigla() {
        return $this->mat_sigla;
    }

    public function setMat_sigla($mat_sigla) {
        $this->mat_sigla = $mat_sigla;
    }

    public function getMat_nombre() {
        return $this->mat_nombre;
    }

    public function setMat_nombre($mat_nombre) {
        $this->mat_nombre = $mat_nombre;
    }

    public function getMat_semestre() {
        return $this->mat_semestre;
    }

    public function setMat_semestre($mat_semestre) {
        $this->mat_semestre = $mat_semestre;
    }

    public function getMat_HTeoricas() {
        return $this->mat_HTeoricas;
    }

    public function setMat_HTeoricas($mat_HTeoricas) {
        $this->mat_HTeoricas = $mat_HTeoricas;
    }

    public function getMat_HPracticas() {
        return $this->mat_HPracticas;
    }

    public function setMat_HPracticas($mat_HPracticas) {
        $this->mat_HPracticas = $mat_HPracticas;
    }

    public function getMat_HSemestre() {
        return $this->mat_HSemestre;
    }

    public function setMat_HSemestre($mat_HSemestre) {
        $this->mat_HSemestre = $mat_HSemestre;
    }

    public function getMat_creditos() {
        return $this->mat_creditos;
    }

    public function setMat_creditos($mat_creditos) {
        $this->mat_creditos = $mat_creditos;
    }

    public function getMat_estado() {
        return $this->mat_estado;
    }

    public function setMat_estado($mat_estado) {
        $this->mat_estado = $mat_estado;
    }

}

?>
