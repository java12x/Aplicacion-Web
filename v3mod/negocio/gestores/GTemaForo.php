<?php

include '../../datos/objetos/TemaForo.php';

class GTemaForo {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $temaforo = new TemaForo($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6]);
        return $temaforo->insertar();
    }

    public function listar() {
        $temaforo = new TemaForo(null, null, null, null, null, null, null);
        return $temaforo->listar();
    }
    
    public function listarTemasPersona($per_id, $cat_id) {
        $temaforo = new TemaForo(null, null, null, null, null, null, null);
        return $temaforo->listarTemasPersona($per_id, $cat_id);
    }

    public function obtener($id) {
        $temaforo = new TemaForo(null, null, null, null, null, null, null);
        return $temaforo->obtener($id);
    }

    public function actualizar($campos) {
        $temaforo = new TemaForo($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5], $campos[6]);
        $temaforo->actualizar();
    }

    public function eliminar($id) {
        $temaforo = new TemaForo(null, null, null, null, null, null, null);
        $temaforo->eliminar($id);
    }

}

?>
