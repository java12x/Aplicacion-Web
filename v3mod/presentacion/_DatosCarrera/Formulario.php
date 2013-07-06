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
if (!isset($_GET['id']) || !isset($_GET['tipo'])) {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GDatosCarrera.php';
include_once '../../negocio/gestores/GCarrera.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(12));

$gestor = new GDatosCarrera();
$gestorC = new GCarrera();
$lista = $gestor->obtenerPorTipo($_GET['id'], $_GET['tipo']);
$listaC = $gestorC->obtener($_GET['id']);
$smarty->assign("valores", $lista);
$smarty->assign("valoresC", $listaC);
$smarty->assign("id", $_GET['id']);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_DatosCarrera/IFormulario.php');
?>