<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][3][0] == '0' && $_SESSION['pG'][3][1] == '0' && $_SESSION['pG'][3][2] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['accion']) || !isset($_GET['id'])) {
    header("Location: ../../");
    return;
}

include '../../negocio/gestores/GGestion.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Listado.php");
    return;
}

$gestor = new GGestion();

if ($_GET['accion'] == 'DEL') {
    try {
        $gestor->eliminar($_GET['id']);
    } catch (Exception $e) {
        
    }
    header("Location: Listado.php");
}

if (!isset($_POST['estado']))
    $estado = 0;
else
    $estado=1;
if ($_GET['accion'] == 'ADD') {
    $campos = array('', $_POST['anio'], $_POST['semestre'], 0);
    $id = $gestor->insertar($campos);
    if ($estado == 1)
        $gestor->definirGestionActual($id);
    header("Location: Listado.php");
}
if ($_GET['accion'] == 'UPD') {
    $campos = array($_GET['id'], $_POST['anio'], $_POST['semestre'], 0);
    $gestor->actualizar($campos);
    if ($estado == 1)
        $gestor->definirGestionActual($_GET['id']);
    header("Location: Listado.php");
}
?>