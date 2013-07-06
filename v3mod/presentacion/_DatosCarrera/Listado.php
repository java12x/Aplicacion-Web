<?php

session_start();
if (!isset($_SESSION['ini'])){
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][5][0] == '0' && $_SESSION['pG'][5][1] == '0'){
    header("Location: ../../");
    return;
}
if (!isset($_GET['id'])){
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GDatosCarrera.php';
require_once '../../negocio/gestores/GCarrera.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(11));
$gestor = new GDatosCarrera();
$gestorC=new GCarrera();
$valores=$gestorC->obtener($_GET['id']);
$lista = $gestor->listarPorCarrera($_GET['id']);

if ($_SESSION['pG'][5][0] != '0')
    $smarty->assign("p_modificar", true);

$smarty->assign("regs", $lista);
$smarty->assign("id", $_GET['id']);
$smarty->assign("nombre", $valores[1]);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_DatosCarrera/IListado.php');
?>