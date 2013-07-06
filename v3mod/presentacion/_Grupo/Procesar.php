<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][13][0] == '0' && $_SESSION['pG'][13][1] == '0' && $_SESSION['pG'][13][2] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['accion']) || !isset($_GET['id'])) {
    header("Location: ../../");
    return;
}

include '../../negocio/gestores/GGrupo.php';

include_once '../General/Post_Block.php';
$pb = new Post_Block();
if (!$pb->postBlock($_POST['postID'])) {
    header("Location: Listado.php");
    return;
}

$gestor = new GGrupo();

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

for ($i = 1; $i <= 14; $i++) {
    $cod = '00000';
    for ($j = 0; $j < 4; $j++)
        if (isset($_POST['o' . $i][$j]))
            $cod[$_POST['o' . $i][$j] - 1] = '1';
    $cods[$i - 1] = $cod;
}

if ($_GET['accion'] == 'ADD') {
    $campos = array('', $_POST['nombre'], $_POST['descripcion'], $_POST['tipo'], $estado);
    $idG = $gestor->insertar($campos);
    for ($i = 0; $i < 14; $i++)
        $gestor->guardarPrivilegio($idG, $i + 1, $cods[$i]);
    header("Location: Listado.php");
}
if ($_GET['accion'] == 'UPD') {
    $campos = array($_GET['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['tipo'], $estado);
    $gestor->actualizar($campos);
    for ($i = 0; $i < 14; $i++)
        $gestor->actualizarPrivilegio($_GET['id'], $i + 1, $cods[$i]);
    header("Location: Listado.php");
}
?>