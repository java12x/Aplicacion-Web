<?php

include_once '../../datos/conexion/ConexionBD.php';

class PlanAvance {

    public $id;
    public $plaA_doc_id;
    public $plaA_mat_id;
    public $plaA_ges_id;
    public $plaA_pla_id;
    public $plaA_estado;
    public $plaA_texto_;

    public function __construct($id, $plaA_doc_id, $plaA_mat_id, $plaA_ges_id, $plaA_pla_id, $plaA_estado, $plaA_texto_) {
        $this->id = $id;
        $this->plaA_doc_id = $plaA_doc_id;
        $this->plaA_mat_id = $plaA_mat_id;
        $this->plaA_ges_id = $plaA_ges_id;
        $this->plaA_pla_id = $plaA_pla_id;
        $this->plaA_estado = $plaA_estado;
        $this->plaA_texto_ = $plaA_texto_;
    }

    private function getValoresObj() {
        $valores['plaA_doc_id'] = $this->plaA_doc_id;
        $valores['plaA_mat_id'] = $this->plaA_mat_id;
        $valores['plaA_ges_id'] = $this->plaA_ges_id;
        $valores['plaA_pla_id'] = $this->plaA_pla_id;
        $valores['plaA_estado'] = $this->plaA_estado;
        $valores['plaA_texto_'] = $this->plaA_texto_;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('PlanAvance', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('PlanAvance', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from PlanAvance where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from PlanAvance', array());
    }
    
    public function listarMateriasDoc($doc_id, $ges_id) {
        return ConexionBD::obtener("select p.*, m.mat_sigla, m.mat_nombre, m.mat_semestre from planavance p inner join
                                    materia m on p.plaA_mat_id=m.id where p.plaA_doc_id=? and p.plaa_ges_id=? order by m.mat_semestre", array($doc_id, $ges_id));
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select p.*, m.mat_sigla, m.mat_nombre, m.mat_semestre from planavance p inner join
                                    materia m on p.plaA_mat_id=m.id where p.id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->plaA_doc_id = $res[0][1];
            $this->plaA_mat_id = $res[0][2];
            $this->plaA_ges_id = $res[0][3];
            $this->plaA_pla_id = $res[0][4];
            $this->plaA_estado = $res[0][5];
            $this->plaA_texto_ = $res[0][6];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'PlanAvance';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPlaA_doc_id() {
        return $this->plaA_doc_id;
    }

    public function setPlaA_doc_id($plaA_doc_id) {
        $this->plaA_doc_id = $plaA_doc_id;
    }

    public function getPlaA_mat_id() {
        return $this->plaA_mat_id;
    }

    public function setPlaA_mat_id($plaA_mat_id) {
        $this->plaA_mat_id = $plaA_mat_id;
    }

    public function getPlaA_ges_id() {
        return $this->plaA_ges_id;
    }

    public function setPlaA_ges_id($plaA_ges_id) {
        $this->plaA_ges_id = $plaA_ges_id;
    }

    public function getPlaA_pla_id() {
        return $this->plaA_pla_id;
    }

    public function setPlaA_pla_id($plaA_pla_id) {
        $this->plaA_pla_id = $plaA_pla_id;
    }

    public function getPlaA_texto_() {
        return $this->plaA_texto_;
    }

    public function setPlaA_texto_($plaA_texto_) {
        $this->plaA_texto_ = $plaA_texto_;
    }

    public function getPlaA_estado() {
        return $this->plaA_estado;
    }

    public function setPlaA_estado($plaA_estado) {
        $this->plaA_estado = $plaA_estado;
    }

}

?>