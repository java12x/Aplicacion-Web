<?php
include_once "smarty/libs/Smarty.class.php";
//instanciar la clase de smarty
$smarty = new Smarty;
//Configurar Smarty
$smarty->compile_dir = "../compilados_smarty";
$smarty->template_dir = "../../presentacion";
$smarty->compile_check = true;
$smarty->debugging = false;
?>
