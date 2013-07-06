<?php

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GDocente.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(104));
$gestor = new GDocente();
$lista = $gestor->listar();

session_start();
if(isset ($_SESSION['tema']))
    $tema=$_SESSION['tema'];
else
    $tema='style-fhk.css';

$smarty->assign("regs", $lista);
$smarty->assign("tema", $tema);
$smarty->display('PlanAvance/IListadoDoc.php');
?>