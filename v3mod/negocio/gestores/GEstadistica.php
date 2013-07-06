<?php

require_once '../../datos/conexion/ConexionBD.php';

class GEstadistica {

    public function __construct() {
        
    }
    
    public function getCantGenero(){
        return ConexionBD::obtener("select count(p.*), case p.per_genero when 'F' then 'Femenino'
                                    when 'M' then 'Masculino' end as genero from persona p inner join estudiante e 
                                    on p.id=e.est_per_id group by p.per_genero");
    }

}

?>