<?php

include '../../datos/objetos/Plantilla.php';

class GPlantilla {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $plantilla = new Plantilla($campos[0], $campos[1], $campos[2]);
        try {
            return $plantilla->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $plantilla->getNombreTabla());
        }
    }

    public function listar() {
        $plantilla = new Plantilla(null, null, null);
        try {
            return $plantilla->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $plantilla->getNombreTabla());
        }
    }

    public function obtener($id) {
        $plantilla = new Plantilla(null, null, null);
        try {
            return $plantilla->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $plantilla->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $plantilla = new Plantilla($campos[0], $campos[1], $campos[2]);
        try {
            $plantilla->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $plantilla->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $plantilla = new Plantilla(null, null, null);
        try {
            $plantilla->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $plantilla->getNombreTabla());
        }
    }

}

?>
