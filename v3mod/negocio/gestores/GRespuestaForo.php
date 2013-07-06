<?php

include '../../datos/objetos/RespuestaForo.php';

class GRespuestaForo {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $respuestaforo = new RespuestaForo($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5]);
        return $respuestaforo->insertar();
    }

    public function listar() {
        $respuestaforo = new RespuestaForo(null, null, null, null, null, null);
        return $respuestaforo->listar();
    }

    public function obtener($id) {
        $respuestaforo = new RespuestaForo(null, null, null, null, null, null);
        return $respuestaforo->obtener($id);
    }

    public function actualizar($campos) {
        $respuestaforo = new RespuestaForo($campos[0], $campos[1], $campos[2], $campos[3], $campos[4], $campos[5]);
        $respuestaforo->actualizar();
    }

    public function eliminar($id) {
        $respuestaforo = new RespuestaForo(null, null, null, null, null, null);
        $respuestaforo->eliminar($id);
    }

}

?>
