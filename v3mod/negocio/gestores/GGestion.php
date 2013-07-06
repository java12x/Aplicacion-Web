<?php

include '../../datos/objetos/Gestion.php';

class GGestion {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $gestion = new Gestion($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            return $gestion->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $gestion->getNombreTabla());
        }
    }

    public function listar() {
        $gestion = new Gestion(null, null, null, null);
        try {
            return $gestion->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $gestion->getNombreTabla());
        }
    }

    public function obtener($id) {
        $gestion = new Gestion(null, null, null, null);
        try {
            return $gestion->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $gestion->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $gestion = new Gestion($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            $gestion->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $gestion->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $gestion = new Gestion(null, null, null, null);
        try {
            $gestion->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $gestion->getNombreTabla());
        }
    }

    public function obtenerGestionActual() {
        $gestion = new Gestion(null, null, null, null);
        try {
            return $gestion->obtenerGestionActual();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $gestion->getNombreTabla());
        }
    }

    public function definirGestionActual($id) {
        $gestion = new Gestion(null, null, null, null);
        try {
            $gestion->definirGestionActual($id);
        } catch (Exceptin $e) {
            throw new Exception($e->getMessage() . ' -> ' . $gestion->getNombreTabla());
        }
    }

}

?>
