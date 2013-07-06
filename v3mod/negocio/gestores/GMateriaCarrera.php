<?php

include '../../datos/objetos/MateriaCarrera.php';

class GMateriaCarrera {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $materiacarrera = new MateriaCarrera($campos[0], $campos[1], $campos[2]);
        try {
            return $materiacarrera->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materiacarrera->getNombreTabla());
        }
    }

    public function listar() {
        $materiacarrera = new MateriaCarrera(null, null, null);
        try {
            return $materiacarrera->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materiacarrera->getNombreTabla());
        }
    }

    public function obtener($id) {
        $materiacarrera = new MateriaCarrera(null, null, null);
        try {
            return $materiacarrera->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materiacarrera->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $materiacarrera = new MateriaCarrera($campos[0], $campos[1], $campos[2]);
        try {
            $materiacarrera->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materiacarrera->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $materiacarrera = new MateriaCarrera(null, null, null);
        try {
            $materiacarrera->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materiacarrera->getNombreTabla());
        }
    }

    public function listarDeCarrera($car_id) {
        $materiacarrera = new MateriaCarrera(null, null, null);
        try {
            return $materiacarrera->listarDeCarrera($car_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $materiacarrera->getNombreTabla());
        }
    }

}

?>
