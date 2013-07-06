<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][6][0] == '0' && $_SESSION['pG'][6][1] == '0') {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GMateria.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(14));

if (!(isset($_GET['id']))) {
    $smarty->assign("accion", "ADD");
} else {
    $gestor = new GMateria();
    $lista = $gestor->obtener($_GET['id']);
    $smarty->assign("accion", "UPD");
    $smarty->assign("valores", $lista);
}
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Materia/IFormulario.php');
?>