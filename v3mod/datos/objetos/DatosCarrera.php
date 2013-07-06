<?php

include_once '../../datos/conexion/ConexionBD.php';

class DatosCarrera {

    public $id;
    public $datC_car_id;
    public $datC_tipo;
    public $datC_titulo;
    public $datC_estado;
    public $datC_texto;

    public function __construct($id, $datC_car_id, $datC_tipo, $datC_titulo, $datC_texto, $datC_estado) {
        $this->id = $id;
        $this->datC_car_id = $datC_car_id;
        $this->datC_tipo = $datC_tipo;
        $this->datC_titulo = $datC_titulo;
        $this->datC_estado = $datC_estado;
        $this->datC_texto = $datC_texto;
    }

    private function getValoresObj() {
        $valores['datc_car_id'] = $this->datC_car_id;
        $valores['datc_tipo'] = $this->datC_tipo;
        $valores['datc_titulo'] = $this->datC_titulo;
        $valores['datc_texto'] = $this->datC_texto;
        $valores['datc_estado'] = $this->datC_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('DatosCarrera', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('DatosCarrera', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from DatosCarrera where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from DatosCarrera', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from DatosCarrera where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->datC_car_id = $res[0][1];
            $this->datC_tipo = $res[0][2];
            $this->datC_titulo = $res[0][3];
            $this->datC_estado = $res[0][5];
            $this->datC_texto = $res[0][4];
            return $res[0];
        }
        return null;
    }

    public function listarPorCarrera($car_id) {
        return ConexionBD::obtener('select * from DatosCarrera where datC_car_id=? order by id', array($car_id));
    }

    public function obtenerPorTipo($car_id, $tipo) {
        $res = ConexionBD::obtener("select * from DatosCarrera where datC_car_id=? and datC_tipo=?", array($car_id, $tipo));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->datC_car_id = $res[0][1];
            $this->datC_tipo = $res[0][2];
            $this->datC_titulo = $res[0][3];
            $this->datC_estado = $res[0][5];
            $this->datC_texto = $res[0][4];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'DatosCarrera';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDatC_car_id() {
        return $this->datC_car_id;
    }

    public function setDatC_car_id($datC_car_id) {
        $this->datC_car_id = $datC_car_id;
    }

    public function getDatC_tipo() {
        return $this->datC_tipo;
    }

    public function setDatC_tipo($datC_tipo) {
        $this->datC_tipo = $datC_tipo;
    }

    public function getDatC_titulo() {
        return $this->datC_titulo;
    }

    public function setDatC_titulo($datC_titulo) {
        $this->datC_titulo = $datC_titulo;
    }

    public function getDatC_texto() {
        return $this->datC_texto;
    }

    public function setDatC_texto($datC_texto) {
        $this->datC_texto = $datC_texto;
    }

    public function getDatC_estado() {
        return $this->datC_estado;
    }

    public function setDatC_estado($datC_estado) {
        $this->datC_estado = $datC_estado;
    }

}

?>
