<?php

include_once '../../datos/conexion/ConexionBD.php';

class Noticia {

    public $id;
    public $not_adm_id;
    public $not_ges_id;
    public $not_titulo;
    public $not_descripcion;
    public $not_fecha;
    public $not_estado;
    public $not_texto_;

    public function __construct($id, $not_adm_id, $not_ges_id, $not_titulo, $not_descripcion, $not_fecha, $not_estado, $not_texto_) {
        $this->id = $id;
        $this->not_adm_id = $not_adm_id;
        $this->not_ges_id = $not_ges_id;
        $this->not_titulo = $not_titulo;
        $this->not_descripcion = $not_descripcion;
        $this->not_fecha = $not_fecha;
        $this->not_estado = $not_estado;
        $this->not_texto_ = $not_texto_;
    }

    private function getValoresObj() {
        $valores['not_adm_id'] = $this->not_adm_id;
        $valores['not_ges_id'] = $this->not_ges_id;
        $valores['not_titulo'] = $this->not_titulo;
        $valores['not_descripcion'] = $this->not_descripcion;
        $valores['not_fecha'] = $this->not_fecha;
        $valores['not_estado'] = $this->not_estado;
        $valores['not_texto_'] = $this->not_texto_;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Noticia', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Noticia', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Noticia where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from Noticia where not_estado=1', array());
    }

    public function listarNoticiasAdm($adm_id, $ges_id) {
        return ConexionBD::obtener("select n.* from noticia n where n.not_adm_id=? and n.not_ges_id=? order by n.id", array($adm_id, $ges_id));
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Noticia where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->not_adm_id = $res[0][1];
            $this->not_ges_id = $res[0][2];
            $this->not_titulo = $res[0][3];
            $this->not_descripcion = $res[0][4];
            $this->not_fecha = $res[0][5];
            $this->not_estado = $res[0][6];
            $this->not_texto_ = $res[0][7];
            return $res[0];
        }
        return null;
    }
    
    public function definirHabilitado($id, $habilitado){
        $this->obtener($id);
        $this->setNot_estado($habilitado);
        $this->actualizar();
    }
    
    public function getNombreTabla(){
        return 'Noticia';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNot_adm_id() {
        return $this->not_adm_id;
    }

    public function setNot_adm_id($not_adm_id) {
        $this->not_adm_id = $not_adm_id;
    }

    public function getNot_ges_id() {
        return $this->not_ges_id;
    }

    public function setNot_ges_id($not_ges_id) {
        $this->not_ges_id = $not_ges_id;
    }

    public function getNot_titulo() {
        return $this->not_titulo;
    }

    public function setNot_titulo($not_titulo) {
        $this->not_titulo = $not_titulo;
    }

    public function getNot_descripcion() {
        return $this->not_descripcion;
    }

    public function setNot_descripcion($not_descripcion) {
        $this->not_descripcion = $not_descripcion;
    }

    public function getNot_texto_() {
        return $this->not_texto_;
    }

    public function setNot_texto_($not_texto_) {
        $this->not_texto_ = $not_texto_;
    }

    public function getNot_fecha() {
        return $this->not_fecha;
    }

    public function setNot_fecha($not_fecha) {
        $this->not_fecha = $not_fecha;
    }

    public function getNot_estado() {
        return $this->not_estado;
    }

    public function setNot_estado($not_estado) {
        $this->not_estado = $not_estado;
    }

}

?>
