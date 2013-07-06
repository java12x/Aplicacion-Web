<?php

include '../../datos/objetos/Grupo.php';
include '../../datos/objetos/GrupoPrivilegio.php';

class GGrupo {

    public function __construct() {
        
    }

    public function insertar($campos) {
        $grupo = new Grupo($campos[0], $campos[1], $campos[2], $campos[3], $campos[4]);
        try {
            return $grupo->insertar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

    public function listar() {
        $grupo = new Grupo(null, null, null, null, null);
        try {
            return $grupo->listar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

    public function obtener($id) {
        $grupo = new Grupo(null, null, null, null, null);
        try {
            return $grupo->obtener($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

    public function actualizar($campos) {
        $grupo = new Grupo($campos[0], $campos[1], $campos[2], $campos[3], $campos[4]);
        try {
            $grupo->actualizar();
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

    public function eliminar($id) {
        $grupo = new Grupo(null, null, null, null, null);
        try {
            $grupo->eliminar($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

    public function listarPorTipo($tipo) {
        $grupo = new Grupo(null, null, null, null, null);
        try {
            return $grupo->listarPorTipo($tipo);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

    public function listarPrivilegios($id) {
        $grupoPriv = new GrupoPrivilegio(null, null, null, null);
        try {
            return $grupoPriv->listarDeGrupo($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

    public function listarPrivilegiosCod($id) {
        try {
            $lista = $this->listarPrivilegios($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
        for ($i = 0; $i < 14; $i++)
            $cods[$i] = array('0', '0', '0', '0', '0');
        $ic1 = 0;
        foreach ($lista as $r) {
            $ic2 = 0;
            $cod = array('0', '0', '0', '0', '0');
            for ($i = 0; $i < strlen($r[3]); $i++) {
                if ($r[3][$i] == '1')
                    $cod[$ic2] = $ic2 + 1;
                $ic2+=1;
            }
            $cods[$ic1] = $cod;
            $ic1+=1;
        }
        if (isset($cods))
            return $cods;
        return null;
    }

    public function listarPrivilegiosCodC($id) {
        try {
            $lista = $this->listarPrivilegios($id);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
        for ($i = 0; $i < 14; $i++)
            $cods[$i] = $lista[$i][3];
        return $cods;
    }

    public function guardarPrivilegio($id, $cod_priv, $priv) {
        $grupoPriv = new GrupoPrivilegio('', $id, $cod_priv, $priv);
        return $grupoPriv->insertar();
    }

    public function actualizarPrivilegio($id, $cod_priv, $priv) {
        $grupoPriv = new GrupoPrivilegio(null, null, null, null);
        if (is_null($grupoPriv->obtenerPorCod($id, $cod_priv)))
            $this->guardarPrivilegio($id, $cod_priv, $priv);
        else {
            $grupoPriv->setGruP_privilegio($priv);
            $grupoPriv->actualizar();
        }
    }
    
    public function definirHabilitado($id, $habilitado) {
        $grupo = new Grupo(null, null, null, null, null);
        try {
            return $grupo->definirHabilitado($id, $habilitado);
        } catch (Exception $e) {
            throw new Exception($e->getMessage() . ' -> ' . $grupo->getNombreTabla());
        }
    }

}

?>
