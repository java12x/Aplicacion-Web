<?php

include_once '../../datos/conexion/ConexionBD.php';

class Estudiante {

    public $id;
    public $est_per_id;
    public $est_registro;
    public $est_estado;

    public function __construct($id, $est_per_id, $est_registro, $est_estado) {
        $this->id = $id;
        $this->est_per_id = $est_per_id;
        $this->est_registro = $est_registro;
        $this->est_estado = $est_estado;
    }

    private function getValoresObj() {
        $valores['est_per_id'] = $this->est_per_id;
        $valores['est_registro'] = $this->est_registro;
        $valores['est_estado'] = $this->est_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Estudiante', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Estudiante', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Estudiante where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select e.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id, e.est_estado as estado, ug.usu_nombre from Estudiante e 
                                    inner join Persona p on e.est_per_id=p.id left join 
                                    (select u.* from Usuario u inner join Grupo g on u.usu_gru_id=g.id
                                    where g.gru_tipo=3)ug on ug.usu_per_id=p.id order by p.per_apellidos, p.per_ci', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select e.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id from Estudiante e 
                                    inner join Persona p on e.est_per_id=p.id where e.id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->est_per_id = $res[0][1];
            $this->est_registro = $res[0][2];
            $this->est_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }

    public function obtenerDePersona($per_id) {
        $res = ConexionBD::obtener("select e.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id from Estudiante e 
                                    inner join Persona p on e.est_per_id=p.id where p.id=?", array($per_id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->est_per_id = $res[0][1];
            $this->est_registro = $res[0][2];
            $this->est_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function definirHabilitado($id, $habilitado){
        $this->obtener($id);
        $this->setEst_estado($habilitado);
        $this->actualizar();
    }
    
    public function getNombreTabla(){
        return 'Estudiante';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getEst_per_id() {
        return $this->est_per_id;
    }

    public function setEst_per_id($est_per_id) {
        $this->est_per_id = $est_per_id;
    }

    public function getEst_registro() {
        return $this->est_registro;
    }

    public function setEst_registro($est_registro) {
        $this->est_registro = $est_registro;
    }

    public function getEst_estado() {
        return $this->est_estado;
    }

    public function setEst_estado($est_estado) {
        $this->est_estado = $est_estado;
    }

}

?>
