<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][9][0] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['id']) || !isset($_GET['gestion'])) {
    header("Location: ../../");
    return;
}

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Listado.php?id=" . $campos[1] . "&gestion=" . $_GET['gestion']);
    return;
}

include '../../negocio/gestores/GPlanAvance.php';
$gestor = new GPlanAvance();
$campos = $gestor->obtener($_GET['id']);

$campos[6] = $_POST['texto'];
$gestor->actualizar($campos);

header("Location: Listado.php?id=" . $campos[1] . "&gestion=" . $_GET['gestion']);
?>