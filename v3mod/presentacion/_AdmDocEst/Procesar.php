<?php

include_once '../../negocio/gestores/GPersona.php';
include_once '../../negocio/gestores/GAdministrativo.php';
include_once '../../negocio/gestores/GDocente.php';
include_once '../../negocio/gestores/GEstudiante.php';
include_once '../../negocio/gestores/GUsuario.php';

session_start();
if (!isset($_GET['tipo']) || !isset($_GET['accion'])) {
    header("Location: ../../");
    return;
}
if ($_GET['tipo'] == 'a' || $_GET['tipo'] == 'd' || $_GET['tipo'] == 'e') {
    if ($_GET['tipo'] == 'a' && $_SESSION['pG'][0][0] == '0' && $_SESSION['pG'][0][1] == '0' && $_SESSION['pG'][0][2] == '0') {
        header("Location: ../../");
        return;
    }
    if ($_GET['tipo'] == 'd' && $_SESSION['pG'][1][0] == '0' && $_SESSION['pG'][1][1] == '0' && $_SESSION['pG'][1][2] == '0') {
        header("Location: ../../");
        return;
    }
    if ($_GET['tipo'] == 'e' && $_SESSION['pG'][2][0] == '0' && $_SESSION['pG'][2][1] == '0' && $_SESSION['pG'][2][2] == '0') {
        header("Location: ../../");
        return;
    }
    if (!isset($_GET['accion'])) {
        header("Location: ../../");
        return;
    }

    if ($_GET['tipo'] == 'a') {
        $gestor = new GAdministrativo();
        $tipo = 1;
    }
    if ($_GET['tipo'] == 'd') {
        $gestor = new GDocente();
        $tipo = 2;
    }
    if ($_GET['tipo'] == 'e') {
        $gestor = new GEstudiante();
        $tipo = 3;
    }
    
    include_once '../General/Post_Block.php';
    $pb=new Post_Block();
    if(!$pb->postBlock($_POST['postID'])){
        header("Location: Listado.php?t=" . $_GET['tipo']);
        return;
    }
    
    $gestorP = new GPersona();
    $gestorU = new GUsuario();
    
    if($_GET['accion']=='DEL' || $_GET['accion']=='ACT'){
        if($_GET['accion']=='DEL')
            $h=false;
        else
            $h=true;
        if(isset ($_GET['id'])){
            $gestor->definirHabilitado($_GET['id'], $h);
            header("Location: Listado.php?t=" . $_GET['tipo']);
        }
        else {
            header("Location: ../../");
            return;
        }
            
    }

    if ($_GET['accion'] == 'SRC') {
        if (isset($_GET['ci'])) {
            header("Location: Formulario.php?t=" . $_GET['tipo'] . '$ci=' . $_GET['ci']);
            return;
        } else {
            header("Location: ../../");
            return;
        }
    }

    if (!isset($_POST['estado']))
        $estado = 0;
    else
        $estado=1;
    
    if (!isset($_POST['contraseniaU']))
        $contraseniaU = $_POST['contraseniaUm'];
    else
        $contraseniaU = $_POST['contraseniaU'];
    
    $campos = array('', '', $_POST['registro'], $estado);
    $camposP = array('', $_POST['ci'], $_POST['nombres'],
        $_POST['apellidos'], $_POST['genero'], $_POST['fechanac'],
        $_POST['telefono'], $_POST['telmovil'], $_POST['email']);
    $camposU = array('', $_POST['grupoU'], '', $_POST['nombreU'],
        $contraseniaU, $estado);
    if ($_GET['accion'] == 'ADD') {
        if (is_null($gestorU->obtenerUsuarioTipo($_POST['nombreU'], $tipo))) {
            $rp = $gestorP->obtenerPorCI($_POST['ci']);
            if (is_null($rp)) {
                $rp = $gestorP->insertar($camposP);
                $campos[1] = $rp;
                $gestor->insertar($campos);
                $camposU[2] = $rp;
                $gestorU->insertar($camposU);
            } else {
                if (is_null($gestor->obtenerDePersona($rp[0]))) {
                    $campos[1] = $rp[0];
                    $camposU[2] = $rp[0];
                    $gestor->insertar($campos);
                    $gestorU->insertar($camposU);
                }
            }
        }
    }
    if ($_GET['accion'] == 'UPD') {
        $lista = $gestor->obtener($_GET['id']);
        $listaA = $gestorP->obtenerPorCI($_POST['ci']);
        $listaU = $gestorU->obtenerUsuarioTipo($_POST['nombreU'], $tipo);
        if (!is_null($listaA))
            if ($listaA[0] != $lista[1]) {
                header("Location: Listado.php?t=" . $_GET['tipo']);
                return;
            }
        if (!is_null($listaU))
            if ($listaU[2] != $lista[1]) {
                header("Location: Listado.php?t=" . $_GET['tipo']);
                return;
            }
        $campos[0] = $_GET['id'];
        $campos[1] = $lista[1];
        $camposP[0] = $lista[1];
        $gestorP->actualizar($camposP);
        $gestor->actualizar($campos);
        $camposU[2] = $lista[1];
        $camposU_ = $gestorU->obtenerDePersonaTipo($lista[1], $tipo);
        if (is_null($camposU_)) {
            $gestorU->insertar($camposU);
        } else {
            $camposU[0] = $camposU_[0];
            if (trim($contraseniaU) == '')
                $camposU[4] = $camposU_[4];
            $gestorU->actualizar($camposU);
        }
    }
    header("Location: Listado.php?t=" . $_GET['tipo']);
}
else
    header("Location: ../../");
?>