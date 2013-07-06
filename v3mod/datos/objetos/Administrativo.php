<?php

include_once '../../datos/conexion/ConexionBD.php';

class Administrativo {

    public $id;
    public $adm_per_id;
    public $adm_registro;
    public $adm_estado;

    public function __construct($id, $adm_per_id, $adm_registro, $adm_estado) {
        $this->id = $id;
        $this->adm_per_id = $adm_per_id;
        $this->adm_registro = $adm_registro;
        $this->adm_estado = $adm_estado;
    }

    private function getValoresObj() {
        $valores['adm_per_id'] = $this->adm_per_id;
        $valores['adm_registro'] = $this->adm_registro;
        $valores['adm_estado'] = $this->adm_estado;
        return $valores;
    }

    public function insertar() {
        return ConexionBD::insertar('Administrativo', $this->getValoresObj());
    }

    public function actualizar() {
        ConexionBD::actualizar('Administrativo', 'id', $this->id, $this->getValoresObj());
    }

    public function eliminar($id) {
        ConexionBD::ejecutar("delete from Administrativo where id=?", array($id));
    }

    public function listar() {
        return ConexionBD::obtener('select a.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id, a.adm_estado as estado, ug.usu_nombre from Administrativo a 
                                    inner join Persona p on a.adm_per_id=p.id left join 
                                    (select u.* from Usuario u inner join Grupo g on u.usu_gru_id=g.id
                                    where g.gru_tipo=1)ug on ug.usu_per_id=p.id order by p.per_apellidos, p.per_ci', array());
    }

    public function obtener($id) {
        $res = ConexionBD::obtener("select a.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id from Administrativo a 
                                    inner join Persona p on a.adm_per_id=p.id where a.id=?", array($id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->adm_per_id = $res[0][1];
            $this->adm_registro = $res[0][2];
            $this->adm_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function obtenerDePersona($per_id) {
        $res = ConexionBD::obtener("select a.*, p.per_ci, p.per_nombres, p.per_apellidos,
                                    p.per_genero, p.per_fechanac, p.per_telefono, p.per_telmovil,
                                    p.per_email, p.id as per_id from Administrativo a 
                                    inner join Persona p on a.adm_per_id=p.id where p.id=?", array($per_id));
        if (count($res) > 0) {
            $this->id = $res[0][0];
            $this->adm_per_id = $res[0][1];
            $this->adm_registro = $res[0][2];
            $this->adm_estado = $res[0][3];
            return $res[0];
        }
        return null;
    }
    
    public function definirHabilitado($id, $habilitado){
        $this->obtener($id);
        $this->setAdm_estado($habilitado);
        $this->actualizar();
    }
    
    public function getNombreTabla(){
        return 'Administrativo';
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getAdm_per_id() {
        return $this->adm_per_id;
    }

    public function setAdm_per_id($adm_per_id) {
        $this->adm_per_id = $adm_per_id;
    }

    public function getAdm_registro() {
        return $this->adm_registro;
    }

    public function setAdm_registro($adm_registro) {
        $this->adm_registro = $adm_registro;
    }

    public function getAdm_estado() {
        return $this->adm_estado;
    }

    public function setAdm_estado($adm_estado) {
        $this->adm_estado = $adm_estado;
    }

}

?>