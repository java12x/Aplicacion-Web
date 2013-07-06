<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][3][0] == '0' && $_SESSION['pG'][3][1] == '0' && $_SESSION['pG'][3][2] == '0' && $_SESSION['pG'][3][3] == '0') {
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GGestion.php';
require_once '../General/Contador.php';
$gestor = new GGestion();
$lista = $gestor->listar();

if ($_SESSION['pG'][3][0] != '0')
    $smarty->assign("p_nuevo", true);
if ($_SESSION['pG'][3][1] != '0')
    $smarty->assign("p_modificar", true);
if ($_SESSION['pG'][3][2] != '0')
    $smarty->assign("p_eliminar", true);

$smarty->assign("regs", $lista);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->assign("visitas", Contador::obtValorImgDeCod(7));
$smarty->display('_Gestion/IListado.php');
?>