<?php 
include_once '../../libs.inc.php';

$smartyT->compile_dir = "../compilados_smarty";
$smartyT->template_dir = "../../presentacion";

$col="azul";
$smartyT->assign('color', $col);
$smartyT->display('General/ITema.php');
?>