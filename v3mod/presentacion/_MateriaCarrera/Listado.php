<?php

session_start();
if (!isset($_SESSION['ini'])){
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][7][0] == '0' && $_SESSION['pG'][7][1] == '0' && $_SESSION['pG'][7][2] == '0' && $_SESSION['pG'][7][3] == '0'){
    header("Location: ../../");
    return;
}
if (!isset($_GET['id'])){
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GMateriaCarrera.php';
require_once '../../negocio/gestores/GRequisito.php';
require_once '../../negocio/gestores/GCarrera.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(18));
$gestor = new GMateriaCarrera();
$gestorR = new GRequisito();
$gestorC=new GCarrera();
$lista = $gestor->listarDeCarrera($_GET['id']);
$listaR = $gestorR->listar();
$valoresC=$gestorC->obtener($_GET['id']);

if ($_SESSION['pG'][7][0] != '0')
    $smarty->assign("p_nuevo", true);
if ($_SESSION['pG'][7][1] != '0')
    $smarty->assign("p_modificar", true);
if ($_SESSION['pG'][7][2] != '0')
    $smarty->assign("p_eliminar", true);

$smarty->assign("regs", $lista);
$smarty->assign("requisitos", $listaR);
$smarty->assign("carrera", $_GET['id']);
$smarty->assign("nombre", $valoresC[1]);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_MateriaCarrera/IListado.php');
?>