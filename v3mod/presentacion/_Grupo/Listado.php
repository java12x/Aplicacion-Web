<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][13][0] == '0' && $_SESSION['pG'][13][1] == '0' && $_SESSION['pG'][13][2] == '0' && $_SESSION['pG'][13][3] == '0') {
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GGrupo.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(32));
$gestor = new GGrupo();
$lista = $gestor->listar();

if ($_SESSION['pG'][13][0] != '0')
    $smarty->assign("p_nuevo", true);
if ($_SESSION['pG'][13][1] != '0')
    $smarty->assign("p_modificar", true);
if ($_SESSION['pG'][13][2] != '0')
    $smarty->assign("p_bajaalta", true);

$smarty->assign("regs", $lista);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Grupo/IListado.php');
?>