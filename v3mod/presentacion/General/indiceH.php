<?php

//session_start();
include_once '../../libs.inc.php';
$smartyIH = new Smarty;
$smartyIH->compile_dir = "../compilados_smarty";
$smartyIH->template_dir = "../../presentacion";
if (isset($_SESSION['ini']))
    for ($i = 0; $i < 14; $i++)
        $smartyIH->assign('p' . ($i + 1), $_SESSION['pG'][$i] != '00000');
if (isset($_SESSION['nP']))
    $np = $_SESSION['nP'];
else
    $np='';
$smartyIH->assign('nombre', $np);
if (isset($_SESSION['tipo']))
    $smartyIH->assign('tipo', $_SESSION['tipo']);
if (isset($_SESSION['idTipo']))
    $smartyIH->assign('idtipo', $_SESSION['idTipo']);
$smartyIH->display('General/IindiceH.php');
?>