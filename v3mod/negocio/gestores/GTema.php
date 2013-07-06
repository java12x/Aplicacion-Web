<?php

include '../../datos/objetos/Tema.php';

class GTema {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $tema = new Tema($campos[0], $campos[1], $campos[2]);
        try {
            return $tema->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $tema->getNombreTabla());
        }
    }

    public function listar() {
        $tema = new Tema(null, null, null);
        try {
            return $tema->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $tema->getNombreTabla());
        }
    }

    public function obtener($id) {
        $tema = new Tema(null, null, null);
        try {
            return $tema->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $tema->getNombreTabla());
        }
    }
    
    public function obtenerDeUsuario($usu_id) {
        $tema = new Tema(null, null, null);
        try {
            return $tema->obtenerDeUsuario($usu_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $tema->getNombreTabla());
        }
    }
    
    public function ActualizarDeUsuario($usu_id, $opc) {
        $tema = new Tema(null, null, null);
        try {
            return $tema->ActualizarDeUsuario($usu_id, $opc);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $tema->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $tema = new Tema($campos[0], $campos[1], $campos[2]);
        try {
            $tema->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $tema->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $tema = new Tema(null, null, null);
        try {
            $tema->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $tema->getNombreTabla());
        }
    }

}

?>
