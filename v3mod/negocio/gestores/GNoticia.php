<?php

include '../../datos/objetos/Noticia.php';

class GNoticia {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $noticia = new Noticia($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6], $campos[7]);
        try {
            return $noticia->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $noticia->getNombreTabla());
        }
    }

    public function listar() {
        $noticia = new Noticia(null, null, null, null, null, null, null, null);
        try {
            return $noticia->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $noticia->getNombreTabla());
        }
    }

    public function obtener($id) {
        $noticia = new Noticia(null, null, null, null, null, null, null, null);
        try {
            return $noticia->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $noticia->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $noticia = new Noticia($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6], $campos[7]);
        try {
            $noticia->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $noticia->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $noticia = new Noticia(null, null, null, null, null, null, null, null);
        try {
            $noticia->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $noticia->getNombreTabla());
        }
    }

    public function listarNoticiasAdm($adm_id, $ges_id) {
        $noticia = new Noticia(null, null, null, null, null, null, null, null);
        try {
            return $noticia->listarNoticiasAdm($adm_id, $ges_id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $noticia->getNombreTabla());
        }
    }
    
    public function definirHabilitado($id, $habilitado) {
        $noticia = new Noticia(null, null, null, null, null, null, null, null);
        try {
            return $noticia->definirHabilitado($id, $habilitado);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $noticia->getNombreTabla());
        }
    }

}

?>
