<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][9][0] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['id']) || !isset($_GET['gestion'])) {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GPlanAvance.php';
include_once '../../negocio/gestores/GPlantilla.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(23));

$gestor = new GPlanAvance();
$gestorP = new GPlantilla();

$lista = $gestor->obtener($_GET['id']);
$listaP = $gestorP->obtener($lista[4]);
if ($lista[5] == '')
    $texto = $listaP[2];
else
    $texto=$lista[6];
$smarty->assign("id", $_GET['id']);
$smarty->assign("idDoc", $lista[1]);
$smarty->assign("idMateria", $lista[2]);
$smarty->assign("gestion", $_GET['gestion']);
$smarty->assign("estado", $_GET['id']);
$smarty->assign("valores", $lista);
$smarty->assign("texto", $texto);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_PlanAvance/IFormulario.php');
?>