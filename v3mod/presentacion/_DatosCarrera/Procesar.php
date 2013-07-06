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
if (!isset($_GET['id']) || !isset($_GET['tipo'])) {
    header("Location: ../../");
    return;
}

include '../../negocio/gestores/GDatosCarrera.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Formulario.php?id=" . $_GET['id'] . "&tipo=" . $_GET['tipo']);
    return;
}

$gestor = new GDatosCarrera();
$campos = $gestor->obtenerPorTipo($_GET['id'], $_GET['tipo']);
$campos[4] = $_POST['texto'];
$gestor->actualizar($campos);
header("Location: Formulario.php?id=" . $_GET['id'] . "&tipo=" . $_GET['tipo']);
?>