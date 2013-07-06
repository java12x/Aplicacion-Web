<?php

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GNoticia.php';

$smartyLN = new Smarty;
$smartyLN->compile_dir = "../compilados_smarty";
$smartyLN->template_dir = "../../presentacion";

$gestorN = new GNoticia();
$listaN = $gestorN->listar();

$smartyLN->assign("regs", $listaN);
$smartyLN->display('Noticia/ILNoticia.php');
?>
