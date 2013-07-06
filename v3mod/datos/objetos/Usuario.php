<?php

include_once '../../datos/conexion/ConexionBD.php';

class Usuario {

    public $id;
    public $usu_gru_id;
    public $usu_per_id;
    public $usu_nombre;
    public $usu_contra;
    public $usu_estado;

    public function __construct($id, $usu_gru_id, $usu_per_id, $usu_nombre, $usu_contra, $usu_estado) {
        $this->id = $id;
        $this->usu_gru_id = $usu_gru_id;
        $this->usu_per_id = $usu_per_id;
        $this->usu_nombre = $usu_nombre;
        $this->usu_contra = $usu_contra;
        $this->usu_estado = $usu_estado;
    }

    private function getValoresObj() {
        $valores['usu_gru_id'] = $this->usu_gru_id;
        $valores['usu_per_id'] = $this->usu_per_id;
        $valores['usu_nombre'] = $this->usu_nombre;
        $valores['usu_contra'] = $this->usu_contra;
        $valores['usu_estado'] = $this->usu_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Usuario', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Usuario', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Usuario where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select u.*, g.gru_nombre from usuario u inner join grupo g
                                    on u.usu_gru_id = g.id');
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Usuario where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->usu_gru_id = $res[0][1];
            $this->usu_per_id = $res[0][2];
            $this->usu_nombre = $res[0][3];
            $this->usu_contra = $res[0][4];
            $this->usu_estado = $res[0][5];
            return $res[0];
        }
        return null;
    }

    public function obtenerUsuario($usu_nombre, $usu_contrasenia) {
        $res = ConexionBD::obtener("select * from Usuario where usu_nombre=? and usu_contra=?", array($usu_nombre, $usu_contrasenia));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->usu_gru_id = $res[0][1];
            $this->usu_per_id = $res[0][2];
            $this->usu_nombre = $res[0][3];
            $this->usu_contra = $res[0][4];
            $this->usu_estado = $res[0][5];
            return $res[0];
        }
        return null;
    }

    public function obtenerPorNombre($usu_nombre) {
        $res = ConexionBD::obtener("select * from Usuario where usu_nombre=?", array($usu_nombre));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->usu_gru_id = $res[0][1];
            $this->usu_per_id = $res[0][2];
            $this->usu_nombre = $res[0][3];
            $this->usu_contra = $res[0][4];
            $this->usu_estado = $res[0][5];
            return $res[0];
        }
        return null;
    }

    public function obtenerDePersonaTipo($per_id, $tipo) {
        $res = ConexionBD::obtener("select u.* from Usuario u inner join grupo g
                                    on u.usu_gru_id=g.id where usu_per_id=?
                                    and g.gru_tipo=?", array($per_id, $tipo));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->usu_gru_id = $res[0][1];
            $this->usu_per_id = $res[0][2];
            $this->usu_nombre = $res[0][3];
            $this->usu_contra = $res[0][4];
            $this->usu_estado = $res[0][5];
            return $res[0];
        }
        return null;
    }

    public function obtenerUsuarioTipo($nombre, $tipo) {
        $res = ConexionBD::obtener("select u.* from Usuario u inner join grupo g
                                    on u.usu_gru_id=g.id where usu_nombre=?
                                    and g.gru_tipo=?", array($nombre, $tipo));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->usu_gru_id = $res[0][1];
            $this->usu_per_id = $res[0][2];
            $this->usu_nombre = $res[0][3];
            $this->usu_contra = $res[0][4];
            $this->usu_estado = $res[0][5];
            return $res[0];
        }
        return null;
    }
    
    public function getNombreTabla(){
        return 'Usuario';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUsu_gru_id() {
        return $this->usu_gru_id;
    }

    public function setUsu_gru_id($usu_gru_id) {
        $this->usu_gru_id = $usu_gru_id;
    }

    public function getUsu_per_id() {
        return $this->usu_per_id;
    }

    public function setUsu_per_id($usu_per_id) {
        $this->usu_per_id = $usu_per_id;
    }

    public function getUsu_nombre() {
        return $this->usu_nombre;
    }

    public function setUsu_nombre($usu_nombre) {
        $this->usu_nombre = $usu_nombre;
    }

    public function getUsu_contra() {
        return $this->usu_contra;
    }

    public function setUsu_contra($usu_contra) {
        $this->usu_contra = $usu_contra;
    }

    public function getUsu_estado() {
        return $this->usu_estado;
    }

    public function setUsu_estado($usu_estado) {
        $this->usu_estado = $usu_estado;
    }

}

?>
