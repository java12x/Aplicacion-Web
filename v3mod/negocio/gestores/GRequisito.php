<?php

include '../../datos/objetos/Requisito.php';

class GRequisito {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $requisito = new Requisito($campos[0], $campos[1], $campos[2]);
        try {
            return $requisito->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $requisito->getNombreTabla());
        }
    }

    public function listar() {
        $requisito = new Requisito(null, null, null);
        try {
            return $requisito->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $requisito->getNombreTabla());
        }
    }

    public function obtener($id) {
        $requisito = new Requisito(null, null, null);
        try {
            return $requisito->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $requisito->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $requisito = new Requisito($campos[0], $campos[1], $campos[2]);
        try {
            $requisito->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $requisito->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $requisito = new Requisito(null, null, null);
        try {
            $requisito->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $requisito->getNombreTabla());
        }
    }

    public function listarReqMateriaC($matc_id) {
        $requisito = new Requisito(null, null, null);
        try {
            return $requisito->listarReqMateriaC($matc_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $requisito->getNombreTabla());
        }
    }

    public function eliminarDeMatC($matc_id) {
        $requisito = new Requisito(null, null, null);
        try {
            $requisito->eliminarDeMatC($matc_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $requisito->getNombreTabla());
        }
    }

}

?>
