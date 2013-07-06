<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][13][0] == '0' && $_SESSION['pG'][13][1] == '0') {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GGrupo.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(33));

$gestor = new GGrupo();
if (!(isset($_GET['id']))) {
    $smarty->assign("accion", "ADD");
    $idG = 0;
} else {
    $lista = $gestor->obtener($_GET['id']);
    $smarty->assign("accion", "UPD");
    $smarty->assign("valores", $lista);
    $idG = $_GET['id'];
}

$listaP = $gestor->listarPrivilegiosCod($idG);
//administrativo
$smarty->assign('o1v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o1s', $listaP[0]);
//docente
$smarty->assign('o2v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o2s', $listaP[1]);
//estudiante
$smarty->assign('o3v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o3s', $listaP[2]);
//gestiones
$smarty->assign('o4v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o4s', $listaP[3]);
//carreras
$smarty->assign('o5v', array(1 => 'Modificar', 2 => 'Listar'));
$smarty->assign('o5s', $listaP[4]);
//datos carrera
$smarty->assign('o6v', array(1 => 'Modificar', 2 => 'Listar'));
$smarty->assign('o6s', $listaP[5]);
//materias
$smarty->assign('o7v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o7s', $listaP[6]);
//planes de estudio
$smarty->assign('o8v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o8s', $listaP[7]);
//asignar materias
$smarty->assign('o9v', array(1 => 'Modificar', 2 => 'Listar'));
$smarty->assign('o9s', $listaP[8]);
//planes de avance
$smarty->assign('o10v', array(1 => 'Modificar', 2 => 'Listar'));
$smarty->assign('o10s', $listaP[9]);
//seccion curriculums
$smarty->assign('o11v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o11s', $listaP[10]);
//curriculums
$smarty->assign('o12v', array(1 => 'Modificar', 2 => 'Listar'));
$smarty->assign('o12s', $listaP[11]);
//noticias
$smarty->assign('o13v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o13s', $listaP[12]);
//grupos
$smarty->assign('o14v', array(1 => 'Crear', 2 => 'Modificar', 3 => 'Eliminar', 4 => 'Listar'));
$smarty->assign('o14s', $listaP[13]);

$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Grupo/IFormulario.php');
?>