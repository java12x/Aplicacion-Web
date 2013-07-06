<?php

include '../../datos/objetos/Usuario.php';

class GUsuario {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $usuario = new Usuario($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5]);
        try {
            return $usuario->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function listar() {
        $usuario = new Usuario(null, null, null, null, null, null);
        try {
            return $usuario->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function obtener($id) {
        $usuario = new Usuario(null, null, null, null, null, null);
        try {
            return $usuario->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $usuario = new Usuario($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5]);
        try {
            $usuario->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $usuario = new Usuario(null, null, null, null, null, null);
        try {
            $usuario->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function obtenerUsuario($usu_nombre, $usu_contrasenia) {
        $usuario = new Usuario(null, null, null, null, null, null);
        try {
            return $usuario->obtenerUsuario($usu_nombre, $usu_contrasenia);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function obtenerPorNombre($usu_nombre) {
        $usuario = new Usuario(null, null, null, null, null, null);
        try {
            return $usuario->obtenerPorNombre($usu_nombre);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function obtenerDePersonaTipo($per_id, $tipo) {
        $usuario = new Usuario(null, null, null, null, null, null);
        try {
            return $usuario->obtenerDePersonaTipo($per_id, $tipo);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

    public function obtenerUsuarioTipo($nombre, $tipo) {
        $usuario = new Usuario(null, null, null, null, null, null);
        try {
            return $usuario->obtenerUsuarioTipo($nombre, $tipo);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $usuario->getNombreTabla());
        }
    }

}

?>
