<?php

include '../../datos/objetos/PlanAvance.php';

class GPlanAvance {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $planavance = new PlanAvance($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6]);
        try {
            return $planavance->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $planavance->getNombreTabla());
        }
    }

    public function listar() {
        $planavance = new PlanAvance(null, null, null, null, null, null, null);
        try {
            return $planavance->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $planavance->getNombreTabla());
        }
    }

    public function obtener($id) {
        $planavance = new PlanAvance(null, null, null, null, null, null, null);
        try {
            return $planavance->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $planavance->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $planavance = new PlanAvance($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6]);
        try {
            $planavance->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $planavance->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $planavance = new PlanAvance(null, null, null, null, null, null, null);
        try {
            $planavance->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $planavance->getNombreTabla());
        }
    }

    public function listarMateriasDoc($doc_id, $ges_id) {
        $planavance = new PlanAvance(null, null, null, null, null, null, null);
        try {
            return $planavance->listarMateriasDoc($doc_id, $ges_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $planavance->getNombreTabla());
        }
    }

}

?>