<?php

require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(109));

session_start();
if (isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if (!isset($_GET['t'])) {
    header("Location: ../../");
    return;
}
if ($_GET['t'] == 'a' || $_GET['t'] == 'd' || $_GET['t'] == 'e') {
    include_once '../../libs.inc.php';
    if (isset($_GET['errcod'])) {
        if ($_GET['errcod'] == 1)
            $smarty->assign('msgErr', 'Usuario no válido');
        if ($_GET['errcod'] == 2)
            $smarty->assign('msgErr', 'Contraseña incorrecta');
    }

    if (isset($_SESSION['tema']))
        $tema = $_SESSION['tema'];
    else
        $tema='style-fhk.css';

    if (isset($_GET['u']))
        $smarty->assign('u', $_GET['u']);
    $smarty->assign('tipo', $_GET['t']);
    $smarty->assign("tema", $tema);
    $smarty->display('Sesion/IFormulario.php');
}
?>