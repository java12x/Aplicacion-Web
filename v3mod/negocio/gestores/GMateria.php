<?php

include '../../datos/objetos/Materia.php';

class GMateria {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $materia = new Materia($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6], $campos[7], $campos[8]);
        try {
            return $materia->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materia->getNombreTabla());
        }
    }

    public function listar() {
        $materia = new Materia(null, null, null, null, null, null, null, null, null);
        try {
            return $materia->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materia->getNombreTabla());
        }
    }

    public function obtener($id) {
        $materia = new Materia(null, null, null, null, null, null, null, null, null);
        try {
            return $materia->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materia->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $materia = new Materia($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6], $campos[7], $campos[8]);
        try {
            $materia->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materia->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $materia = new Materia(null, null, null, null, null, null, null, null, null);
        try {
            $materia->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materia->getNombreTabla());
        }
    }
    
    public function definirHabilitado($id, $habilitado) {
        $materia = new Materia(null, null, null, null, null, null, null, null, null);
        try {
            return $materia->definirHabilitado($id, $habilitado);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materia->getNombreTabla());
        }
    }

}

?>
