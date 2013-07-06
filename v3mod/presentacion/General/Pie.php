<?php 
include_once '../../libs.inc.php';

$smartyP->compile_dir = "../compilados_smarty";
$smartyP->template_dir = "../../presentacion";


$smartyP->display('General/IPie.php');
?>