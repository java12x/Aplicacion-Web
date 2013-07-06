<?php

session_start();
if (!isset($_SESSION['ini'])){
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][9][0] == '0' && $_SESSION['pG'][9][1] == '0'){
    header("Location: ../../");
    return;
}
if (!isset($_GET['id'])){
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GPlanAvance.php';
include_once '../../negocio/gestores/GGestion.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(22));
$gestorG = new GGestion();
$listaG = $gestorG->listar();
if (isset($_GET['gestion']))
    $gesAct = $_GET['gestion'];
else {
    $gesAct = $gestorG->obtenerGestionActual();
    $gesAct = $gesAct[0];
}

$gestor = new GPlanAvance();
$lista = $gestor->listarMateriasDoc($_GET['id'], $gesAct);

if ($_SESSION['pG'][9][0] != '0')
    $smarty->assign("p_modificar", true);

$smarty->assign("regs", $lista);
$smarty->assign("idDoc", $_GET['id']);
$smarty->assign("gestion", $gesAct);
$smarty->assign("gestiones", $listaG);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_PlanAvance/IListado.php');
?>