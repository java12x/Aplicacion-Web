<?php

if (!isset($_GET['id'])) {
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GSeccionCur.php';
require_once '../../negocio/gestores/GDocente.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(108));
$gestor = new GSeccionCur();
$lista = $gestor->listar();

$gestorD=new GDocente();
$listaD=$gestorD->obtener($_GET['id']);

session_start();
if(isset ($_SESSION['tema']))
    $tema=$_SESSION['tema'];
else
    $tema='style-fhk.css';

$smarty->assign("p_modificar", true);

$smarty->assign("regs", $lista);
$smarty->assign("id", $_GET['id']);
$smarty->assign("ci", $listaD[4]);
$smarty->assign("nombres", $listaD[5]);
$smarty->assign("apellidos", $listaD[6]);
$smarty->assign("tema", $tema);
$smarty->display('Curriculo/IListadoSeccion.php');
?>