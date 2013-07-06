<?php

include '../../datos/objetos/CurriculoSeccion.php';

class GCurriculoSeccion {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $curriculoseccion = new CurriculoSeccion($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            return $curriculoseccion->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculoseccion->getNombreTabla());
        }
    }

    public function listar() {
        $curriculoseccion = new CurriculoSeccion(null, null, null, null);
        try {
            return $curriculoseccion->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculoseccion->getNombreTabla());
        }
    }

    public function obtener($id) {
        $curriculoseccion = new CurriculoSeccion(null, null, null, null);
        try {
            return $curriculoseccion->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculoseccion->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $curriculoseccion = new CurriculoSeccion($campos[0], $campos[1], $campos[2], $campos[3]);
        try {
            $curriculoseccion->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculoseccion->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $curriculoseccion = new CurriculoSeccion(null, null, null, null);
        try {
            $curriculoseccion->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculoseccion->getNombreTabla());
        }
    }

    public function obtenerDeCurriculo($cur_id, $id_sec) {
        $curriculoseccion = new CurriculoSeccion(null, null, null, null);
        try {
            return $curriculoseccion->obtenerDeCurriculo($cur_id, $id_sec);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $curriculoseccion->getNombreTabla());
        }
    }

}

?>
