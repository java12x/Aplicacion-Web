<?php

include_once '../../libs.inc.php';
$smartyI = new Smarty;
$smartyI->compile_dir = "../compilados_smarty";
$smartyI->template_dir = "../../presentacion";
if (isset($_SESSION['ini']))
    for ($i = 0; $i < 14; $i++)
        $smartyI->assign('p' . ($i + 1), $_SESSION['pG'][$i] != '00000');
else
    return;
$smartyI->assign('usuario', $_SESSION['nU']);
$smartyI->display('General/Iindice.php');
?>