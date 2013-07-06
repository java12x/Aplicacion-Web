<?php

include_once '../../datos/conexion/ConexionBD.php';

class MateriaCarrera {

    public $id;
    public $matC_mat_id;
    public $matC_car_id;

    public function __construct($id, $matC_mat_id, $matC_car_id) {
        $this->id = $id;
        $this->matC_mat_id = $matC_mat_id;
        $this->matC_car_id = $matC_car_id;
    }

    private function getValoresObj() {
        $valores['matC_mat_id'] = $this->matC_mat_id;
        $valores['matC_car_id'] = $this->matC_car_id;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('MateriaCarrera', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('MateriaCarrera', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from MateriaCarrera where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from MateriaCarrera', array());
    }
    
    public function listarDeCarrera($car_id){
        return ConexionBD::obtener('select mc.*, m.mat_sigla, m.mat_nombre, m.mat_semestre, 
                                    m.mat_HTeoricas, m.mat_HPracticas, m.mat_HSemestre, m.mat_creditos
                                    from materiacarrera mc inner join materia m on mc.matc_mat_id=m.id where mc.matc_car_id=? order by m.mat_semestre', array($car_id));
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from MateriaCarrera where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->matC_mat_id = $res[0][1];
            $this->matC_car_id = $res[0][2];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'MateriaCarrera';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getMatC_mat_id() {
        return $this->matC_mat_id;
    }

    public function setMatC_mat_id($matC_mat_id) {
        $this->matC_mat_id = $matC_mat_id;
    }

    public function getMatC_car_id() {
        return $this->matC_car_id;
    }

    public function setMatC_car_id($matC_car_id) {
        $this->matC_car_id = $matC_car_id;
    }

}

?>
