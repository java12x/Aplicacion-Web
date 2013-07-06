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
        try {
            return ConexionBD::insertar('Persona', $this->getValoresObj());
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function actualizar() {
        try {
            ConexionBD::actualizar('Persona', 'id', $this->id, $this->getValoresObj());
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function eliminar($id) {
        try {
            ConexionBD::ejecutar("delete from Persona where id=?", array($id));
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function listar() {
        try {
            return ConexionBD::obtener('select * from Persona', array());
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function obtener($id) {
        try {
            $res = ConexionBD::obtener("select * from Persona where id=?", array($id));
        } catch (Exception $e) {
            throw $e;
        }
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

    public function obtenerPorCI($ci) {
        try {
            $res = ConexionBD::obtener("select * from Persona where per_ci=?", array($ci));
        } catch (Exception $e) {
            throw $e;
        }
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->ci = $res[0][1];
            $this->nombres = $res[0][2];
            $this->apellidos = $res[0][3];
            $this->genero = $res[0][4];
            $this->fechanac = $res[0][5];
            $this->telefono = $res[0][6];
            $this->telmovil = $res[0][7];
            $this->email = $res[0][8];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'Persona';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPer_ci() {
        return $this->per_ci;
    }

    public function setPer_ci($per_ci) {
        $this->per_ci = $per_ci;
    }

    public function getPer_nombres() {
        return $this->per_nombres;
    }

    public function setPer_nombres($per_nombres) {
        $this->per_nombres = $per_nombres;
    }

    public function getPer_apellidos() {
        return $this->per_apellidos;
    }

    public function setPer_apellidos($per_apellidos) {
        $this->per_apellidos = $per_apellidos;
    }

    public function getPer_genero() {
        return $this->per_genero;
    }

    public function setPer_genero($per_genero) {
        $this->per_genero = $per_genero;
    }

    public function getPer_fechanac() {
        return $this->per_fechanac;
    }

    public function setPer_fechanac($per_fechanac) {
        $this->per_fechanac = $per_fechanac;
    }

    public function getPer_telefono() {
        return $this->per_telefono;
    }

    public function setPer_telefono($per_telefono) {
        $this->per_telefono = $per_telefono;
    }

    public function getPer_telmovil() {
        return $this->per_telmovil;
    }

    public function setPer_telmovil($per_telmovil) {
        $this->per_telmovil = $per_telmovil;
    }

    public function getPer_email() {
        return $this->per_email;
    }

    public function setPer_email($per_email) {
        $this->per_email = $per_email;
    }

}

?>