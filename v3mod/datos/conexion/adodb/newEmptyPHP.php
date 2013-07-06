<?php

include_once '../../datos/conexion/ConexionBD.php';

class Persona {

    public $id;
    public $per_ci;
    public $per_nombres;
    public $per_apellidos;
    public $per_genero;
    public $per_fechanac;
    public $per_telefono;
    public $per_telmovil;
    public $per_email;

    public function __construct($id, $per_ci, $per_nombres, $per_apellidos, $per_genero, $per_fechanac, $per_telefono, $per_telmovil, $per_email) {
        $this->id = $id;
        $this->per_ci = $per_ci;
        $this->per_nombres = $per_nombres;
        $this->per_apellidos = $per_apellidos;
        $this->per_genero = $per_genero;
        $this->per_fechanac = $per_fechanac;
        $this->per_telefono = $per_telefono;
        $this->per_telmovil = $per_telmovil;
        $this->per_email = $per_email;
    }

    private function getValoresObj() {
        $valores['per_ci'] = $this->per_ci;
        $valores['per_nombres'] = $this->per_nombres;
        $valores['per_apellidos'] = $this->per_apellidos;
        $valores['per_genero'] = $this->per_genero;
        $valores['per_fechanac'] = $this->per_fechanac;
        $valores['per_telefono'] = $this->per_telefono;
        $valores['per_telmovil'] = $this->per_telmovil;
        $valores['per_email'] = $this->per_email;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Persona', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Persona', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Persona where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from Persona', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Persona where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->per_ci = $res[0][1];
            $this->per_nombres = $res[0][2];
            $this->per_apellidos = $res[0][3];
            $this->per_genero = $res[0][4];
            $this->per_fechanac = $res[0][5];
            $this->per_telefono = $res[0][6];
            $this->per_telmovil = $res[0][7];
            $this->per_email = $res[0][8];
            return $res[0];
        }
        return null;
    }

}

?>
