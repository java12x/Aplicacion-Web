<?php

include '../../datos/objetos/Docente.php';

class GDocente {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $docente = new Docente($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            return $docente->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $docente->getNombreTabla());
        }
    }

    public function listar() {
        $docente = new Docente(null, null, null, null);
        try {
            return $docente->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $docente->getNombreTabla());
        }
    }

    public function obtener($id) {
        $docente = new Docente(null, null, null, null);
        try {
            return $docente->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $docente->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $docente = new Docente($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            $docente->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $docente->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $docente = new Docente(null, null, null, null);
        try {
            $docente->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $docente->getNombreTabla());
        }
    }

    public function obtenerDePersona($per_id) {
        $docente = new Docente(null, null, null, null);
        try {
            return $docente->obtenerDePersona($per_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $docente->getNombreTabla());
        }
    }
    
    public function definirHabilitado($id, $habilitado){
        $docente = new Docente(null, null, null, null);
//        try {
            return $docente->definirHabilitado($id, $habilitado);
//        } catch (Exception $e) {
//            throw new Exception($e->getMessage() . ' -> ' . $docente->getNombreTabla());
//        }
    }

}

?>
