<?php

session_start();
if (!isset($_SESSION['ini']))
    header("Location: ../../");
if ($_SESSION['pG'][8][0] == '0' && $_SESSION['pG'][8][1] == '0')
    header("Location: ../../");

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GDocente.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(19));
$gestor = new GDocente();
$lista = $gestor->listar();

if ($_SESSION['pG'][8][0] != '0')
    $smarty->assign("p_modificar", true);
    
$smarty->assign("regs", $lista);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_MateriaDocente/IListado.php');
?>