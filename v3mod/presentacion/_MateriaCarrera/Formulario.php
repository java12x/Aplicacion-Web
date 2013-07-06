<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][7][0] == '0' && $_SESSION['pG'][7][1] == '0') {
    header("Location: ../../");
    return;
}
if (!isset($_GET['idCarrera'])) {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GMateriaCarrera.php';
include_once '../../negocio/gestores/GMateria.php';
include_once '../../negocio/gestores/GCarrera.php';
include_once '../../negocio/gestores/GRequisito.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(17));

$gestor = new GMateriaCarrera();
$gestorM = new GMateria();
$gestorR = new GRequisito();
$gestorC = new GCarrera();
$listaM = $gestorM->listar();
if (isset($_GET['id'])) {
    $lista = $gestor->obtener($_GET['id']);
    $listaM2 = $gestorM->obtener($lista[1]);
    $listaC = $gestorC->obtener($lista[2]);
    $listaR = $gestorR->listarReqMateriaC($_GET['id']);

    $smarty->assign("id", $_GET['id']);
    $smarty->assign("valores", $listaM2);
    $smarty->assign("valoresC", $listaC);
    $smarty->assign("requisitos", $listaR);
    $smarty->assign("accion", "UPD");
} else {
    $listaC = $gestorC->obtener($_GET['idCarrera']);
    $smarty->assign("accion", "ADD");
}
$smarty->assign("materias", $listaM);
$smarty->assign("valoresC", $listaC);
$smarty->assign("carrera", $_GET['idCarrera']);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_MateriaCarrera/IFormulario.php');
?>