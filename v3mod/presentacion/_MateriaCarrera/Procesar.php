<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][7][0] == '0' && $_SESSION['pG'][7][1] == '0' && $_SESSION['pG'][7][2] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['accion']) || !isset($_GET['idCarrera'])) {
    header("Location: ../../");
    return;
}

include '../../negocio/gestores/GMateriaCarrera.php';
include '../../negocio/gestores/GRequisito.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Formulario.php?id=" . $_GET['id'] . "&idCarrera=" . $_GET['idCarrera']);
    return;
}

$gestor = new GMateriaCarrera();
$gestorR = new GRequisito();
if ($_GET['accion'] == 'ADD') {
    $campos = array('', $_POST['idMateria'], $_GET['idCarrera']);
    $id = $gestor->insertar($campos);
    header("Location: Formulario.php?id=" . $id . "&idCarrera=" . $_GET['idCarrera']);
}
if ($_GET['accion'] == 'DEL') {
    $gestorR->eliminarDeMatC($_GET['id']);
    $gestor->eliminar($_GET['id']);
    header("Location: Listado.php?id=" . $_GET['idCarrera']);
}
if ($_GET['accion'] == 'ADDR') {
    $campos = array('', $_POST['idMateria'], $_GET['id']);
    $gestorR->insertar($campos);
    header("Location: Formulario.php?id=" . $_GET['id'] . "&idCarrera=" . $_GET['idCarrera']);
}
if ($_GET['accion'] == 'DELR') {
    $gestorR->eliminar($_GET['idReq']);
    header("Location: Formulario.php?id=" . $_GET['id'] . "&idCarrera=" . $_GET['idCarrera']);
}
?>