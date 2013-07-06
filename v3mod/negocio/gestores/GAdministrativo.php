<?php

include '../../datos/objetos/Administrativo.php';

class GAdministrativo {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $administrativo = new Administrativo($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            return $administrativo->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $administrativo->getNombreTabla());
        }
    }

    public function listar() {
        $administrativo = new Administrativo(null, null, null, null);
        try {
            return $administrativo->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $administrativo->getNombreTabla());
        }
    }

    public function obtener($id) {
        $administrativo = new Administrativo(null, null, null, null);
        try {
            return $administrativo->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $administrativo->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $administrativo = new Administrativo($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            $administrativo->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $administrativo->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $administrativo = new Administrativo(null, null, null, null);
        try {
            $administrativo->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $administrativo->getNombreTabla());
        }
    }

    public function obtenerDePersona($per_id) {
        $administrativo = new Administrativo(null, null, null, null);
        try {
            return $administrativo->obtenerDePersona($per_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $administrativo->getNombreTabla());
        }
    }

    public function definirHabilitado($id, $habilitado) {
        $administrativo = new Administrativo(null, null, null, null);
        try {
            return $administrativo->definirHabilitado($id, $habilitado);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $administrativo->getNombreTabla());
        }
    }

}

?>
