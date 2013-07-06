<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][4][0] == '0') {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GCarrera.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(10));

if (!(isset($_GET['id']))) {
    $smarty->assign("accion", "ADD");
} else {
    $gestor = new GCarrera();
    $lista = $gestor->obtener($_GET['id']);
//establece variables para la plantilla
    $smarty->assign("accion", "UPD");
    $smarty->assign("valores", $lista);
}
$smarty->assign("tema", $_SESSION['tema']);
//mostrar la plantilla
$smarty->display('_Carrera/IFormulario.php');
?>
