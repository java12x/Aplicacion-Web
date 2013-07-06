<?php

include_once '../../datos/conexion/ConexionBD.php';

class CategoriaForo {

    public $id;
    public $catF_nombre;
    public $catF_descripcion;

    public function __construct($id, $catF_nombre, $catF_descripcion) {
        $this->id = $id;
        $this->catF_nombre = $catF_nombre;
        $this->catF_descripcion = $catF_descripcion;
    }

    private function getValoresObj() {
        $valores['catF_nombre'] = $this->catF_nombre;
        $valores['catF_descripcion'] = $this->catF_descripcion;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('CategoriaForo', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('CategoriaForo', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from CategoriaForo where id=" . $id);
    }

    public function listar() {
        return ConexionBD::obtener('select * from CategoriaForo order by catf_nombre');
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select * from CategoriaForo where id=" . $id);
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->catF_nombre = $res[0][1];
            $this->catF_descripcion = $res[0][2];
            return $res[0];
        }
        return null;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCatF_nombre() {
        return $this->catF_nombre;
    }

    public function setCatF_nombre($catF_nombre) {
        $this->catF_nombre = $catF_nombre;
    }

    public function getCatF_descripcion() {
        return $this->catF_descripcion;
    }

    public function setCatF_descripcion($catF_descripcion) {
        $this->catF_descripcion = $catF_descripcion;
    }

}

?>
