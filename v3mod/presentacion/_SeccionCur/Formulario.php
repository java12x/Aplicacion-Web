<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][10][0] == '0' && $_SESSION['pG'][10][1] == '0') {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GSeccionCur.php';
include_once '../../negocio/gestores/GPlantilla.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(25));

if (!(isset($_GET['id']))) {
    $smarty->assign("accion", "ADD");
} else {
    $gestor = new GSeccionCur();
    $gestorP = new GPlantilla();
    $lista = $gestor->obtener($_GET['id']);
    $listaP = $gestorP->obtener($lista[2]);
    $smarty->assign("accion", "UPD");
    $smarty->assign("valores", $lista);
    $smarty->assign("texto", $listaP[2]);
}
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_SeccionCur/IFormulario.php');
?>