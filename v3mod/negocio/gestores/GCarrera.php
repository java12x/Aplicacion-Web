<?php

include '../../datos/objetos/Carrera.php';

class GCarrera {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $carrera = new Carrera($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            return $carrera->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $carrera->getNombreTabla());
        }
    }

    public function listar() {
        $carrera = new Carrera(null, null, null, null);
        try {
            return $carrera->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $carrera->getNombreTabla());
        }
    }

    public function obtener($id) {
        $carrera = new Carrera(null, null, null, null);
        try {
            return $carrera->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $carrera->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $carrera = new Carrera($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            $carrera->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $carrera->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $carrera = new Carrera(null, null, null, null);
        try {
            $carrera->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $carrera->getNombreTabla());
        }
    }

}

?>
