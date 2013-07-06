<?php

session_start();
if (!isset($_SESSION['ini']))
    header("Location: ../../");
if ($_SESSION['pG'][8][0] == '0')
    header("Location: ../../");
if (!isset($_GET['accion']) || !isset($_GET['idDoc']) || !isset($_GET['gestion']))
    header("Location: ../../");

include '../../negocio/gestores/GPlanAvance.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Formulario.php?id=" . $_GET['idDoc'] . "&gestion=" . $_GET['gestion']);
    return;
}

$gestor = new GPlanAvance();
if ($_GET['accion'] == 'ADD') {
    $campos = array('', $_GET['idDoc'], $_POST['idMateria'], $_GET['gestion'], 1, '', 1);
    $gestor->insertar($campos);
}
if ($_GET['accion'] == 'DEL') {
    if(!isset($_GET['id']))
        header("Location: ../../");
    $gestor->eliminar($_GET['id']);
}
header("Location: Formulario.php?id=" . $_GET['idDoc'] . "&gestion=" . $_GET['gestion']);
?>