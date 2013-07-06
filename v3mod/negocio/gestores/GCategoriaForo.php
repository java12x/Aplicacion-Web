<?php

include '../../datos/objetos/CategoriaForo.php';

class GCategoriaForo {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $categoriaforo = new CategoriaForo($campos[0], $campos[1], $campos[2]);
        return $categoriaforo->insertar();
    }

    public function listar() {
        $categoriaforo = new CategoriaForo(null, null, null);
        return $categoriaforo->listar();
    }

    public function obtener($id) {
        $categoriaforo = new CategoriaForo(null, null, null);
        return $categoriaforo->obtener($id);
    }

    public function actualizar($campos) {
        $categoriaforo = new CategoriaForo($campos[0], $campos[1], $campos[2]);
        $categoriaforo->actualizar();
    }

    public function eliminar($id) {
        $categoriaforo = new CategoriaForo(null, null, null);
        $categoriaforo->eliminar($id);
    }

}

?>
