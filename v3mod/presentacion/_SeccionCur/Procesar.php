<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][10][0] == '0' && $_SESSION['pG'][10][1] == '0' && $_SESSION['pG'][10][2] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['accion']) || !isset($_GET['id'])) {
    header("Location: ../../");
    return;
}

include '../../negocio/gestores/GSeccionCur.php';
include '../../negocio/gestores/GPlantilla.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Listado.php");
    return;
}

$gestor = new GSeccionCur();
$gestorP = new GPlantilla();

if ($_GET['accion'] == 'DEL') {
    try {
        $campos = $gestor->obtener($_GET['id']);
        $gestor->eliminar($_GET['id']);
        $gestorP->eliminar($campos[2]);
    } catch (Exception $e) {
        
    }
    header("Location: Listado.php");
}

if ($_GET['accion'] == 'ADD') {
    $camposP = array('', $_POST['descripcion'], $_POST['texto']);
    $idP = $gestorP->insertar($camposP);
    $campos = array('', $_POST['nombre'], $idP, $_POST['orden'], $_POST['descripcion']);
    $gestor->insertar($campos);
    header("Location: Listado.php");
}
if ($_GET['accion'] == 'UPD') {
    $campos = $gestor->obtener($_GET['id']);
    $camposP = $gestorP->obtener($campos[2]);

    $campos[1] = $_POST['nombre'];
    $campos[3] = $_POST['orden'];
    $campos[4] = $_POST['descripcion'];
    $camposP[2] = $_POST['texto'];

    $gestor->actualizar($campos);
    $gestorP->actualizar($camposP);
    header("Location: Listado.php");
}
?>