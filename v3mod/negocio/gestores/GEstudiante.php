<?php

include '../../datos/objetos/Estudiante.php';

class GEstudiante {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $estudiante = new Estudiante($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            return $estudiante->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $estudiante->getNombreTabla());
        }
    }

    public function listar() {
        $estudiante = new Estudiante(null, null, null, null);
        try {
            return $estudiante->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $estudiante->getNombreTabla());
        }
    }

    public function obtener($id) {
        $estudiante = new Estudiante(null, null, null, null);
        try {
            return $estudiante->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $estudiante->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $estudiante = new Estudiante($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            $estudiante->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $estudiante->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $estudiante = new Estudiante(null, null, null, null);
        try {
            $estudiante->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $estudiante->getNombreTabla());
        }
    }

    public function obtenerDePersona($per_id) {
        $estudiante = new Estudiante(null, null, null, null);
        try {
            return $estudiante->obtenerDePersona($per_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $estudiante->getNombreTabla());
        }
    }
    
    public function definirHabilitado($id, $habilitado){
        $estudiante = new Estudiante(null, null, null, null);
        try {
            return $estudiante->definirHabilitado($id, $habilitado);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $estudiante->getNombreTabla());
        }
    }

}

?>
