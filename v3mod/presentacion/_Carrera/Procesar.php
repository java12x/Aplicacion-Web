<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][4][0] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['accion']) || !isset($_GET['id'])) {
    header("Location: ../../");
    return;
}

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Listado.php");
    return;
}

include '../../negocio/gestores/GCarrera.php';
$gestor = new GCarrera();
if (!isset($_POST['estado']))
    $estado = 0;
else
    $estado=1;
//if ($_GET['accion'] == 'ADD') {
//    $campos = array('', $_POST['nombre'], $_POST['descripcion'], $estado);
//    $gestor->insertar($campos);
//    header("Location: Listado.php");
//}
if ($_GET['accion'] == 'UPD') {
    $campos = array($_GET['id'], $_POST['nombre'], $_POST['descripcion'], $estado);
    $gestor->actualizar($campos);
    header("Location: Listado.php");
}
?>