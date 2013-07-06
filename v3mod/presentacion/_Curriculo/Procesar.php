<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if (!isset($_GET['idDoc']) || !isset($_GET['idSec'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][11][0] == '0') {
    if ($_SESSION['tipo'] == 2) {
        if ($_SESSION['idTipo'] != $_GET['idDoc']) {
            header("Location: ../../");
            return;
        }
    } else {
        header("Location: ../../");
        return;
    }
}

include '../../negocio/gestores/GCurriculo.php';
include '../../negocio/gestores/GCurriculoSeccion.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: ListadoSeccion.php?id=" . $_GET['idDoc']);
    return;
}
$gestor = new GCurriculo();
$gestorCS = new GCurriculoSeccion();
if ($_GET['idCur'] != '') {

    $camposCS = $gestorCS->obtenerDeCurriculo($_GET['idCur'], $_GET['idSec']);
    if (is_null($camposCS)) {
        $camposCS = array('', $_GET['idCur'], $_GET['idSec'], $_POST['texto']);
        $gestorCS->insertar($camposCS);
    } else {
        $camposCS[3] = $_POST['texto'];
        $gestorCS->actualizar($camposCS);
    }
} else {
    $campos = array('', $_GET['idDoc']);
    $idC = $gestor->insertar($campos);
    $camposCS = array('', $idC, $_GET['idSec'], $_POST['texto']);
    $gestorCS->insertar($camposCS);
}
header("Location: ListadoSeccion.php?id=" . $_GET['idDoc']);
?>