<?php

include_once '../../datos/conexion/ConexionBD.php';

class Docente {

    public $id;
    public $doc_per_id;
    public $doc_registro;
    public $doc_estado;

    public function __construct($id, $doc_per_id, $doc_registro, $doc_estado) {
        $this->id = $id;
        $this->doc_per_id = $doc_per_id;
        $this->doc_registro = $doc_registro;
        $this->doc_estado = $doc_estado;
    }

    private function getValoresObj() {
        $valores['doc_per_id'] = $this->doc_per_id;
        $valores['doc_registro'] = $this->doc_registro;
        $valores['doc_estado'] = $this->doc_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Docente', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Docente', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Docente where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select d.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id, d.doc_estado as estado, ug.usu_nombre from Docente d
                                    inner join Persona p on d.doc_per_id=p.id left join
                                    (select u.* from Usuario u inner join Grupo g on u.usu_gru_id=g.id
                                    where g.gru_tipo=2)ug on ug.usu_per_id=p.id order by p.per_apellidos, p.per_ci', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select d.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id from Docente d 
                                    inner join Persona p on d.doc_per_id=p.id where d.id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->doc_per_id = $res[0][1];
            $this->doc_registro = $res[0][2];
            $this->doc_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }

    public function obtenerDePersona($per_id) {
        $res = ConexionBD::obtener("select d.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id from Docente d 
                                    inner join Persona p on d.doc_per_id=p.id where p.id=?", array($per_id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->doc_per_id = $res[0][1];
            $this->doc_registro = $res[0][2];
            $this->doc_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function definirHabilitado($id, $habilitado){
        $this->obtener($id);
        $this->setDoc_estado($habilitado);
        $this->actualizar();
    }
    
    public function getNombreTabla(){
        return 'Docente';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getDoc_per_id() {
        return $this->doc_per_id;
    }

    public function setDoc_per_id($doc_per_id) {
        $this->doc_per_id = $doc_per_id;
    }

    public function getDoc_registro() {
        return $this->doc_registro;
    }

    public function setDoc_registro($doc_registro) {
        $this->doc_registro = $doc_registro;
    }

    public function getDoc_estado() {
        return $this->doc_estado;
    }

    public function setDoc_estado($doc_estado) {
        $this->doc_estado = $doc_estado;
    }

}

?>
