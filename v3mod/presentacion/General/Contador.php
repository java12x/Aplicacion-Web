<?php

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GVisitas.php';

class Contador {

    public static function obtValorDeCod($cod) {
        $gestorV = new GVisitas();
        $cuenta = $gestorV->incrementarDeCod($cod);
        return $cuenta;
    }

    public static function obtValorImgDeCod($cod) {
        $gestorV = new GVisitas();
        $cuenta = $gestorV->incrementarDeCod($cod);
        $contador = '';
        for ($i = 0; $i < strlen($cuenta); $i++) {
            $imagen = substr($cuenta, $i, 1);
            $contador .= "<img alt='$imagen' src='../imgs/$imagen.JPG'>";
        }
        return $contador;
    }

}

?>