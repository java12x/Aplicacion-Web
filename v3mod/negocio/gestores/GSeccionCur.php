<?php

include '../../datos/objetos/SeccionCur.php';

class GSeccionCur {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $seccioncur = new SeccionCur($campos[0], $campos[1], $campos[2], $campos[3], $campos[4]);
        try {
            return $seccioncur->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $seccioncur->getNombreTabla());
        }
    }

    public function listar() {
        $seccioncur = new SeccionCur(null, null, null, null, null);
        try {
            return $seccioncur->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $seccioncur->getNombreTabla());
        }
    }

    public function obtener($id) {
        $seccioncur = new SeccionCur(null, null, null, null, null);
        try {
            return $seccioncur->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $seccioncur->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $seccioncur = new SeccionCur($campos[0], $campos[1], $campos[2], $campos[3], $campos[4]);
        try {
            $seccioncur->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $seccioncur->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $seccioncur = new SeccionCur(null, null, null, null, null);
        try {
            $seccioncur->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $seccioncur->getNombreTabla());
        }
    }

}

?>
