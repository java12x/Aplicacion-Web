<?php

include_once '../../datos/conexion/ConexionBD.php';

class Busqueda {
    
    public function __construct() {
        
    }

    public function obtenerResultado($texto) {
        $texto= '%' . $texto . '%';
        return ConexionBD::obtener(
                "select dc.id, dc.datc_titulo || ' de la carrera ' || c.car_nombre 
                 as titulo, dc.datc_texto_ as texto,
                 '' as descripcion, 1 as tipo from datoscarrera dc
                 inner join carrera c on dc.datc_car_id=c.id
                 where dc.datc_titulo like ? or dc.datc_texto_ like ?
                 or c.car_nombre like ? 
                 union
                 select n.id, n.not_titulo as titulo, not_texto_ as texto, 
                 n.not_descripcion as descripcion, 2 as tipo  from noticia n
                 where n.not_titulo like ? or n.not_texto_ like ?", array($texto, $texto, $texto, $texto, $texto));
    }
    
    public function getNombreTabla(){
        return 'Busqueda';
    }

}

?>
