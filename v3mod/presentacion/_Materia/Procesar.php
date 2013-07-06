<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][6][0] == '0' && $_SESSION['pG'][6][1] == '0' && $_SESSION['pG'][6][2] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['accion']) || !isset($_GET['id'])) {
    header("Location: ../../");
    return;
}

include '../../negocio/gestores/GMateria.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Listado.php");
    return;
}

$gestor = new GMateria();

if ($_GET['accion'] == 'DEL' || $_GET['accion'] == 'ACT') {
    if ($_GET['accion'] == 'DEL')
        $h = false;
    else
        $h=true;
    if (isset($_GET['id'])) {
        $gestor->definirHabilitado($_GET['id'], $h);
        header("Location: Listado.php");
    } else {
        header("Location: ../../");
        return;
    }
}

if (!isset($_POST['estado']))
    $estado = 0;
else
    $estado=1;
$campos = array('', $_POST['sigla'], $_POST['nombre'],
    $_POST['semestre'], $_POST['hteoricas'], $_POST['hpracticas'],
    $_POST['hsemestre'], $_POST['creditos'], $estado);
if ($_GET['accion'] == 'ADD') {
    $gestor->insertar($campos);
    header("Location: Listado.php");
}
if ($_GET['accion'] == 'UPD') {
    $campos[0] = $_GET['id'];
    $gestor->actualizar($campos);
    header("Location: Listado.php");
}
?>