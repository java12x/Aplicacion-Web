<?php

include_once '../../datos/conexion/ConexionBD.php';

class Requisito {

    public $id;
    public $req_mat_id;
    public $req_matC_id;

    public function __construct($id, $req_mat_id, $req_matC_id) {
        $this->id = $id;
        $this->req_mat_id = $req_mat_id;
        $this->req_matC_id = $req_matC_id;
    }

    private function getValoresObj() {
        $valores['req_mat_id'] = $this->req_mat_id;
        $valores['req_matC_id'] = $this->req_matC_id;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Requisito', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Requisito', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Requisito where id=?", array($id));
    }

    public function eliminarDeMatC($matc_id) {
        ConexionBD::ejecutar("delete from Requisito where req_matC_id=?", array($matc_id));
    }

    public function listar() {
        return ConexionBD::obtener('select r.*, m.mat_sigla, m.mat_nombre, m.mat_semestre, m.mat_estado 
                                    from requisito r inner join materia m on r.req_mat_id=m.id', array());
    }

    public function listarReqMateriaC($matc_id) {
        return ConexionBD::obtener('select r.*, m.mat_sigla, m.mat_nombre, m.mat_semestre, m.mat_estado 
                                    from requisito r inner join materia m on r.req_mat_id=m.id where r.req_matc_id=?', array($matc_id));
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select r.*, m.mat_sigla, m.mat_nombre, m.mat_semestre, m.mat_estado 
                                    from requisito r inner join materia m on r.req_mat_id=m.id where r.id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->req_mat_id = $res[0][1];
            $this->req_matC_id = $res[0][2];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'Requisito';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getReq_mat_id() {
        return $this->req_mat_id;
    }

    public function setReq_mat_id($req_mat_id) {
        $this->req_mat_id = $req_mat_id;
    }

    public function getReq_matC_id() {
        return $this->req_matC_id;
    }

    public function setReq_matC_id($req_matC_id) {
        $this->req_matC_id = $req_matC_id;
    }

}

?>
