<?php

include_once '../../libs.inc.php';
require_once '../../negocio/gestores/GNoticia.php';

require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(104));

$gestorN = new GNoticia();

if (isset($_GET['id']))
    $listaN[0] = $gestorN->obtener($_GET['id']);
else
    $listaN=$gestorN->listar();

session_start();
if(isset ($_SESSION['tema']))
    $tema=$_SESSION['tema'];
else
    $tema='style-fhk.css';

$smarty->assign("regs", $listaN);
$smarty->assign("tema", $tema);
$smarty->display('Noticia/INoticias.php');
?>