<?php

include_once '../../libs.inc.php';
require_once '../../negocio/gestores/GBusqueda.php';

require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(101));

$gestor = new GBusqueda();

if(!isset ($_GET['texto']))
    $texto='';
else
    $texto=$_GET['texto'];

if(trim($texto)!=''){
    $lista=$gestor->obtenerResultado($texto);
    $smarty->assign("regs", $lista);
    $smarty->assign("texto", $texto);    
}
session_start();
if(isset ($_SESSION['tema']))
    $tema=$_SESSION['tema'];
else
    $tema='style-fhk.css';

$smarty->assign("tema", $tema);
$smarty->display('Busqueda/IFormulario.php');
?>