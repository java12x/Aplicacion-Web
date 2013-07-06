<?php

include_once '../../datos/conexion/ConexionBD.php';

class Visitas {

    public $id;
    public $vis_codpag;
    public $vis_cont;

    public function __construct($id, $vis_codpag, $vis_cont) {
        $this->id = $id;
        $this->vis_codpag = $vis_codpag;
        $this->vis_cont = $vis_cont;
    }

    private function getValoresObj() {
        $valores['vis_codpag'] = $this->vis_codpag;
        $valores['vis_cont'] = $this->vis_cont;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Visitas', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Visitas', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Visitas where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from Visitas', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Visitas where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->vis_codpag = $res[0][1];
            $this->vis_cont = $res[0][2];
            return $res[0];
        }
        return null;
    }

    public function obtenerDeCod($cod) {
        $res = ConexionBD::obtener("select * from visitas where vis_codpag=?", array($cod));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->vis_codpag = $res[0][1];
            $this->vis_cont = $res[0][2];
            return $res[0];
        }
        return null;
    }

    public function valorDeCod($cod) {
        $res = $this->obtenerDeCod($cod);
        if (is_null($res))
            return 0;
        return $res[2];
    }

    public function incrementarDeCod($cod) {
        $res = $this->obtenerDeCod($cod);
        $this->setVis_codpag($cod);
        if (is_null($res)) {
            $this->setVis_cont(1);
            $this->insertar();
        } else {
            $this->setId($res[0]);
            $this->setVis_cont($this->getVis_cont() + 1);
            $this->actualizar();
        }
        return $this->getVis_cont();
    }
    
    public function getNombreTabla(){
        return 'Visitas';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getVis_codpag() {
        return $this->vis_codpag;
    }

    public function setVis_codpag($vis_codpag) {
        $this->vis_codpag = $vis_codpag;
    }

    public function getVis_cont() {
        return $this->vis_cont;
    }

    public function setVis_cont($vis_cont) {
        $this->vis_cont = $vis_cont;
    }

}

?>
