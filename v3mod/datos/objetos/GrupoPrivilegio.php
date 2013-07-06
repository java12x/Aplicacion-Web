<?php

include_once '../../datos/conexion/ConexionBD.php';

class GrupoPrivilegio {

    public $id;
    public $gruP_gru_id;
    public $gruP_codPriv;
    public $gruP_privilegio;

    public function __construct($id, $gruP_gru_id, $gruP_codPriv, $gruP_privilegio) {
        $this->id = $id;
        $this->gruP_gru_id = $gruP_gru_id;
        $this->gruP_codPriv = $gruP_codPriv;
        $this->gruP_privilegio = $gruP_privilegio;
    }

    private function getValoresObj() {
        $valores['gruP_gru_id'] = $this->gruP_gru_id;
        $valores['gruP_codPriv'] = $this->gruP_codPriv;
        $valores['gruP_privilegio'] = $this->gruP_privilegio;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('GrupoPrivilegio', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('GrupoPrivilegio', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from GrupoPrivilegio where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from GrupoPrivilegio', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from GrupoPrivilegio where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->gruP_gru_id = $res[0][1];
            $this->gruP_codPriv = $res[0][2];
            $this->gruP_privilegio = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function listarDeGrupo($gru_id) {
        return ConexionBD::obtener('select * from GrupoPrivilegio where gruP_gru_id=?', array($gru_id));
    }
    
    public function obtenerPorCod($gru_id,$cod) {
        $res = ConexionBD::obtener("select * from GrupoPrivilegio where gruP_gru_id=? and gruP_codPriv=?", array($gru_id, $cod));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->gruP_gru_id = $res[0][1];
            $this->gruP_codPriv = $res[0][2];
            $this->gruP_privilegio = $res[0][3];
            return $res[0];
        }
        return null;
    }

    public function getNombreTabla() {
        return 'GrupoPrivilegio';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getGruP_gru_id() {
        return $this->gruP_gru_id;
    }

    public function setGruP_gru_id($gruP_gru_id) {
        $this->gruP_gru_id = $gruP_gru_id;
    }

    public function getGruP_codPriv() {
        return $this->gruP_codPriv;
    }

    public function setGruP_codPriv($gruP_codPriv) {
        $this->gruP_codPriv = $gruP_codPriv;
    }

    public function getGruP_privilegio() {
        return $this->gruP_privilegio;
    }

    public function setGruP_privilegio($gruP_privilegio) {
        $this->gruP_privilegio = $gruP_privilegio;
    }

}

?>
