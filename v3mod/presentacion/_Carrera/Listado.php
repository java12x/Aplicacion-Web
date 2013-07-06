<?php

session_start();
if (!isset($_SESSION['ini'])){
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][4][0] == '0' && $_SESSION['pG'][4][1] == '0'){
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GCarrera.php';
require_once '../General/Contador.php';
$gestor = new GCarrera();
$lista = $gestor->listar();

if ($_SESSION['pG'][4][0] != '0')
    $smarty->assign("p_modificar", true);

$smarty->assign("regs", $lista);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->assign("visitas", Contador::obtValorImgDeCod(9));
$smarty->display('_Carrera/IListado.php');
?>