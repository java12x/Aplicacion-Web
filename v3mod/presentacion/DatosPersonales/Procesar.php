<?php

include '../../negocio/gestores/GPersona.php';
include '../../negocio/gestores/GAdministrativo.php';
include '../../negocio/gestores/GDocente.php';
include '../../negocio/gestores/GEstudiante.php';
include '../../negocio/gestores/GUsuario.php';
include '../../negocio/gestores/GTema.php';
session_start();
if (!isset($_GET['tipo']) || !isset($_GET['accion'])) {
    header("Location: ../../");
    return;
}
if ($_GET['tipo'] == 'a' || $_GET['tipo'] == 'd' || $_GET['tipo'] == 'e') {

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
    $gestorP = new GPersona();
    $gestorU = new GUsuario();
    $gestorT = new GTema();

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
    $camposT = array('', '', $_POST['tema']);
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
            $idU = $gestorU->insertar($camposU);
            $camposT[1] = $idU;
            $gestorT->insertar($camposT);
        } else {
            $camposU[0] = $camposU_[0];
            if (trim($contraseniaU) == '')
                $camposU[4] = $camposU_[4];
            $gestorU->actualizar($camposU);
            $gestorT->ActualizarDeUsuario($camposU[0], $camposT[2]);
        }
        if ($camposT[2] == 1)
            $_SESSION['tema'] = 'style-fhk.css';
        if ($camposT[2] == 2)
            $_SESSION['tema'] = 'style-fhk-lila.css';
        if ($camposT[2] == 3)
            $_SESSION['tema'] = 'style-fhk-rojo.css';
        if ($camposT[2] == 4)
            $_SESSION['tema'] = 'style-fhk-negro.css';
    }
    header("Location: Formulario.php");
}
else
    header("Location: ../../");
?>