<?php

include_once '../../datos/conexion/ConexionBD.php';

class CurriculoSeccion {

    public $id;
    public $curS_cur_id;
    public $curS_scur_id;
    public $curS_texto_;

    public function __construct($id, $curS_cur_id, $curS_scur_id, $curS_texto_) {
        $this->id = $id;
        $this->curS_cur_id = $curS_cur_id;
        $this->curS_scur_id = $curS_scur_id;
        $this->curS_texto_ = $curS_texto_;
    }

    private function getValoresObj() {
        $valores['curS_cur_id'] = $this->curS_cur_id;
        $valores['curS_scur_id'] = $this->curS_scur_id;
        $valores['curS_texto_'] = $this->curS_texto_;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('CurriculoSeccion', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('CurriculoSeccion', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from CurriculoSeccion where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from CurriculoSeccion', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from CurriculoSeccion where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->curS_cur_id = $res[0][1];
            $this->curS_scur_id = $res[0][2];
            $this->curS_texto_ = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function listarDeCurriculo($cur_id) {
        return ConexionBD::obtener('select cs.* from CurriculoSeccion cs inner join seccioncur sc
                                    on cs.curS_scur_id=sc.id where cs.curS_scur_id=? order by sc.scur_orden', array($cur_id));
    }
    
    public function obtenerDeCurriculo($cur_id, $id_sec) {
        $res = ConexionBD::obtener("select * from CurriculoSeccion where curS_cur_id=? and curS_scur_id=?", array($cur_id, $id_sec));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->curS_cur_id = $res[0][1];
            $this->curS_scur_id = $res[0][2];
            $this->curS_texto_ = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'CurriculoSeccion';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCurS_cur_id() {
        return $this->curS_cur_id;
    }

    public function setCurS_cur_id($curS_cur_id) {
        $this->curS_cur_id = $curS_cur_id;
    }

    public function getCurS_scur_id() {
        return $this->curS_scur_id;
    }

    public function setCurS_scur_id($curS_scur_id) {
        $this->curS_scur_id = $curS_scur_id;
    }

    public function getCurS_texto_() {
        return $this->curS_texto_;
    }

    public function setCurS_texto_($curS_texto_) {
        $this->curS_texto_ = $curS_texto_;
    }

}

?>
