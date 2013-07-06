<?php

include '../../datos/objetos/Persona.php';

class GPersona {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $persona = new Persona($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6], $campos[7], $campos[8]);
        try {
            return $persona->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $persona->getNombreTabla());
        }
    }

    public function listar() {
        $persona = new Persona(null, null, null, null, null, null, null, null, null);
        try {
            return $persona->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $persona->getNombreTabla());
        }
    }

    public function obtener($id) {
        $persona = new Persona(null, null, null, null, null, null, null, null, null);
        try {
            return $persona->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $persona->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $persona = new Persona($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6], $campos[7], $campos[8]);
        try {
            $persona->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $persona->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $persona = new Persona(null, null, null, null, null, null, null, null, null);
        try {
            $persona->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $persona->getNombreTabla());
        }
    }

    public function listarAdmDoc() {
        $persona = new Persona(null, null, null, null, null, null, null, null, null);
        try {
            return $persona->listarAdmDoc();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $persona->getNombreTabla());
        }
    }

    public function obtenerPorCI($ci) {
        $persona = new Persona(null, null, null, null, null, null, null, null, null);
        try {
            return $persona->obtenerPorCI($ci);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $persona->getNombreTabla());
        }
    }

}

?>
