<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][12][0] == '0' && $_SESSION['pG'][12][1] == '0' && $_SESSION['pG'][12][2] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['accion']) || !isset($_GET['idAdm'])) {
    header("Location: ../../");
    return;
}

include '../../negocio/gestores/GNoticia.php';
$gestor = new GNoticia();

if ($_GET['accion'] == 'DEL' || $_GET['accion'] == 'ACT') {
    if ($_GET['accion'] == 'DEL')
        $h = false;
    else
        $h=true;
    if (isset($_GET['id'])) {
        $gestor->definirHabilitado($_GET['id'], $h);
        header("Location: Listado.php?id=" . $_GET['idAdm']);
    } 
    else {
        header("Location: ../../");
        return;
    }
}

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Listado.php?id=" . $_GET['idAdm'] . "&gestion=" . $_POST['gestion']);
    return;
}

if (!isset($_POST['estado']))
    $estado = 0;
else
    $estado=1;
$campos = array('', $_GET['idAdm'], $_POST['gestion'], $_POST['titulo'],
    trim($_POST['descripcion']), $_POST['fecha'], $estado, $_POST['texto']);
if ($_GET['accion'] == 'ADD') {
    $gestor->insertar($campos);
    header("Location: Listado.php?id=" . $_GET['idAdm'] . "&gestion=" . $_POST['gestion']);
}
if ($_GET['accion'] == 'UPD') {
    $campos[0] = $_GET['id'];
    $gestor->actualizar($campos);
    header("Location: Listado.php?id=" . $_GET['idAdm'] . "&gestion=" . $_POST['gestion']);
}
?>