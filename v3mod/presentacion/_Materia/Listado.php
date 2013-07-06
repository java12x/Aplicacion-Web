<?php

session_start();
if (!isset($_SESSION['ini'])){
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][6][0] == '0' && $_SESSION['pG'][6][1] == '0' && $_SESSION['pG'][6][2] == '0' && $_SESSION['pG'][6][3] == '0'){
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GMateria.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(13));
$gestor = new GMateria();
$lista = $gestor->listar();

if ($_SESSION['pG'][6][0] != '0')
    $smarty->assign("p_nuevo", true);
if ($_SESSION['pG'][6][1] != '0')
    $smarty->assign("p_modificar", true);
if ($_SESSION['pG'][6][2] != '0')
    $smarty->assign("p_bajaalta", true);

$smarty->assign("regs", $lista);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Materia/IListado.php');
?>