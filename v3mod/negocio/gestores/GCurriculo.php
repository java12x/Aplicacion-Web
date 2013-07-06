<?php

include '../../datos/objetos/Curriculo.php';

class GCurriculo {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $curriculo = new Curriculo($campos[0], $campos[1]);
        try {
            return $curriculo->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculo->getNombreTabla());
        }
    }

    public function listar() {
        $curriculo = new Curriculo(null, null);
        try {
            return $curriculo->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculo->getNombreTabla());
        }
    }

    public function obtener($id) {
        $curriculo = new Curriculo(null, null);
        try {
            return $curriculo->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculo->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $curriculo = new Curriculo($campos[0], $campos[1]);
        try {
            $curriculo->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculo->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $curriculo = new Curriculo(null, null);
        try {
            $curriculo->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculo->getNombreTabla());
        }
    }

    public function obtenerPorCI($ci) {
        $curriculo = new Curriculo(null, null);
        try {
            return $curriculo->obtenerPorCI($ci);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculo->getNombreTabla());
        }
    }

}

?>
