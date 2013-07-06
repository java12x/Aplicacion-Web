<?php

include_once '../../datos/conexion/ConexionBD.php';

class Carrera {

    public $id;
    public $car_nombre;
    public $car_descripcion;
    public $car_estado;

    public function __construct($id, $car_nombre, $car_descripcion, $car_estado) {
        $this->id = $id;
        $this->car_nombre = $car_nombre;
        $this->car_descripcion = $car_descripcion;
        $this->car_estado = $car_estado;
    }

    private function getValoresObj() {
        $valores['car_nombre'] = $this->car_nombre;
        $valores['car_descripcion'] = $this->car_descripcion;
        $valores['car_estado'] = $this->car_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Carrera', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Carrera', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Carrera where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from Carrera order by car_nombre', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Carrera where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->car_nombre = $res[0][1];
            $this->car_descripcion = $res[0][2];
            $this->car_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'Carrera';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCar_nombre() {
        return $this->car_nombre;
    }

    public function setCar_nombre($car_nombre) {
        $this->car_nombre = $car_nombre;
    }

    public function getCar_descripcion() {
        return $this->car_descripcion;
    }

    public function setCar_descripcion($car_descripcion) {
        $this->car_descripcion = $car_descripcion;
    }

    public function getCar_estado() {
        return $this->car_estado;
    }

    public function setCar_estado($car_estado) {
        $this->car_estado = $car_estado;
    }

}

?>
