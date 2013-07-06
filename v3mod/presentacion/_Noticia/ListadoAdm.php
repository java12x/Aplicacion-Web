<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][12][0] == '0' && $_SESSION['pG'][12][1] == '0' && $_SESSION['pG'][12][2] == '0' && $_SESSION['pG'][12][3] == '0') {
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GAdministrativo.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(29));
$gestor = new GAdministrativo();
$lista = $gestor->listar();

$smarty->assign("regs", $lista);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Noticia/IListadoAdm.php');
?>