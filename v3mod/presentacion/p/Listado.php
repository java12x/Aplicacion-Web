<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][6][0] == '0' && $_SESSION['pG'][6][1] == '0' && $_SESSION['pG'][6][2] == '0' && $_SESSION['pG'][6][3] == '0') {
    header("Location: ../../");
    return;
}

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GMateria.php';
require_once '../General/Contador.php';

if ($_SESSION['pG'][6][0] != '0')
    $smarty->assign("p_nuevo", true);
if ($_SESSION['pG'][6][1] != '0')
    $smarty->assign("p_modificar", true);
if ($_SESSION['pG'][6][2] != '0')
    $smarty->assign("p_bajaalta", true);

$gestor = new GMateria();

if (isset($_POST['accion']))
    if ($_POST['accion'] == 'EST') {
        if (isset($_POST['id'])) {
            $gestor->definirHabilitado($_POST['id'], true);
        }
    }

$smarty->assign("visitas", Contador::obtValorImgDeCod(13));
$lista = $gestor->listar();

$smarty->assign("regs", $lista);
$smarty->assign("tema", $_SESSION['tema']);

$edit_mode = @($_REQUEST['edit_mode'] == "true");
$smarty->assign("edit_mode", !$edit_mode);

$ajax_request = @($_SERVER["HTTP_AJAX_REQUEST"] == "true");
if ($ajax_request)
    $smarty->display('p/IListado.php');
else {
    $smarty->assign("archivo", "p/IListado.php");
    $smarty->display('p/Master.php');
}
?>