<?php

include '../../datos/objetos/Busqueda.php';

class GBusqueda {
    
    public function __construct() {
        
    }

    public function obtenerResultado($texto) {
        $busqueda = new Busqueda();
        return $busqueda->obtenerResultado($texto);
    }

}

?>
