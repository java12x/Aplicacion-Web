<?php

include '../../datos/objetos/DatosCarrera.php';

class GDatosCarrera {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $datoscarrera = new DatosCarrera($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5]);
        try {
            return $datoscarrera->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $datoscarrera->getNombreTabla());
        }
    }

    public function listar() {
        $datoscarrera = new DatosCarrera(null, null, null, null, null, null);
        try {
            return $datoscarrera->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $datoscarrera->getNombreTabla());
        }
    }

    public function obtener($id) {
        $datoscarrera = new DatosCarrera(null, null, null, null, null, null);
        try {
            return $datoscarrera->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $datoscarrera->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $datoscarrera = new DatosCarrera($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5]);
        try {
            $datoscarrera->actualizar();

        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $datoscarrera->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $datoscarrera = new DatosCarrera(null, null, null, null, null, null);
        try {
            $datoscarrera->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $datoscarrera->getNombreTabla());
        }
    }

    public function listarPorCarrera($car_id) {
        $datoscarrera = new DatosCarrera(null, null, null, null, null, null);
        try {
            return $datoscarrera->listarPorCarrera($car_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $datoscarrera->getNombreTabla());
        }
    }

    public function obtenerPorTipo($car_id, $tipo) {
        $datoscarrera = new DatosCarrera(null, null, null, null, null, null);
        try {
            return $datoscarrera->obtenerPorTipo($car_id, $tipo);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $datoscarrera->getNombreTabla());
        }
    }

}

?>
