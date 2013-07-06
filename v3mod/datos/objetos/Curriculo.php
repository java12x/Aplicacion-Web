<?php

include_once '../../datos/conexion/ConexionBD.php';

class Curriculo {

    public $id;
    public $cur_doc_id;

    public function __construct($id, $cur_doc_id) {
        $this->id = $id;
        $this->cur_doc_id = $cur_doc_id;
    }

    private function getValoresObj() {
        $valores['cur_doc_id'] = $this->cur_doc_id;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Curriculo', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Curriculo', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Curriculo where id=" . $id);
    }

    public function listar() {
        return ConexionBD::obtener('select * from Curriculo');
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Curriculo where id=" . $id);
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->cur_doc_id = $res[0][1];
            return $res[0];
        }
        return null;
    }

    public function obtenerPorCI($ci) {
        $res = ConexionBD::obtener("select c.* from curriculo c inner join docente d on c.cur_doc_id=d.id
                                    inner join persona p on d.doc_per_id=p.id where p.per_ci='" . $ci . "' order by c.id", array());
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->idPersona = $res[0][1];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'Curriculo';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCur_doc_id() {
        return $this->cur_doc_id;
    }

    public function setCur_doc_id($cur_doc_id) {
        $this->cur_doc_id = $cur_doc_id;
    }

}
?>