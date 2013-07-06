<?php

include '../../datos/objetos/Visitas.php';

class GVisitas {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $visitas = new Visitas($campos[0], $campos[1], $campos[2]);
        try {
            return $visitas->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $visitas->getNombreTabla());
        }
    }

    public function listar() {
        $visitas = new Visitas(null, null, null);
        try {
            return $visitas->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $visitas->getNombreTabla());
        }
    }

    public function obtener($id) {
        $visitas = new Visitas(null, null, null);
        try {
            return $visitas->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $visitas->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $visitas = new Visitas($campos[0], $campos[1], $campos[2]);
        try {
            $visitas->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $visitas->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $visitas = new Visitas(null, null, null);
        try {
            $visitas->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $visitas->getNombreTabla());
        }
    }

    public function valorDeCod($cod) {
        $visitas = new Visitas(null, null, null);
        try {
            return $visitas->valorDeCod($cod);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $visitas->getNombreTabla());
        }
    }

    public function incrementarDeCod($cod) {
        $visitas = new Visitas(null, null, null);
        try {
            return $visitas->incrementarDeCod($cod);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $visitas->getNombreTabla());
        }
    }

}

?>
