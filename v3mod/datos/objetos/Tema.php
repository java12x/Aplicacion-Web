<?php

include_once '../../datos/conexion/ConexionBD.php';

class Tema {

    public $id;
    public $tem_usu_id;
    public $tem_opcion;

    public function __construct($id, $tem_usu_id, $tem_opcion) {
        $this->id = $id;
        $this->tem_usu_id = $tem_usu_id;
        $this->tem_opcion = $tem_opcion;
    }

    private function getValoresObj() {
        $valores['tem_usu_id'] = $this->tem_usu_id;
        $valores['tem_opcion'] = $this->tem_opcion;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Tema', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Tema', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Tema where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select * from Tema', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from Tema where id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->tem_usu_id = $res[0][1];
            $this->tem_opcion = $res[0][2];
            return $res[0];
        }
        return null;
    }

    public function obtenerDeUsuario($usu_id) {
        $res = ConexionBD::obtener("select * from Tema where tem_usu_id=?", array($usu_id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->tem_usu_id = $res[0][1];
            $this->tem_opcion = $res[0][2];
            return $res[0];
        }
        return null;
    }

    public function ActualizarDeUsuario($usu_id, $opc) {
        $res = $this->obtenerDeUsuario($usu_id);
        $this->setTem_usu_id($usu_id);
        $this->setTem_opcion($opc);
        if (is_null($res)) {
            $this->insertar();
        } else {
            $this->actualizar();
        }
    }

    public function getNombreTabla() {
        return 'Tema';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTem_usu_id() {
        return $this->tem_usu_id;
    }

    public function setTem_usu_id($tem_usu_id) {
        $this->tem_usu_id = $tem_usu_id;
    }

    public function getTem_opcion() {
        return $this->tem_opcion;
    }

    public function setTem_opcion($tem_opcion) {
        $this->tem_opcion = $tem_opcion;
    }

}

?>
