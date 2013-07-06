<?php

session_start();
if (!isset($_SESSION['ini'])){
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][10][0] == '0' && $_SESSION['pG'][10][1] == '0' && $_SESSION['pG'][10][2] == '0' && $_SESSION['pG'][10][3] == '0'){
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GSeccionCur.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(24));
$gestor = new GSeccionCur();
$lista = $gestor->listar();

if ($_SESSION['pG'][10][0] != '0')
    $smarty->assign("p_nuevo", true);
if ($_SESSION['pG'][10][1] != '0')
    $smarty->assign("p_modificar", true);
if ($_SESSION['pG'][10][2] != '0')
    $smarty->assign("p_eliminar", true);

$smarty->assign("tema", $_SESSION['tema']);
$smarty->assign("regs", $lista);
$smarty->display('_SeccionCur/IListado.php');
?>