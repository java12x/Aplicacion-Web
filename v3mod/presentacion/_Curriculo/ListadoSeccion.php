<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if (!isset($_GET['id'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][11][0] == '0' && $_SESSION['pG'][11][1] == '0') {
    if ($_SESSION['tipo'] == 2) {
        if ($_SESSION['idTipo'] != $_GET['id']) {
            header("Location: ../../");
            return;
        }
    } else {
        header("Location: ../../");
        return;
    }
}


require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GSeccionCur.php';
require_once '../../negocio/gestores/GDocente.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(26));
$gestor = new GSeccionCur();
$lista = $gestor->listar();

$gestorD=new GDocente();
$listaD=$gestorD->obtener($_GET['id']);

if ($_SESSION['pG'][11][0] != '0')
    $smarty->assign("p_modificar", true);

$smarty->assign("regs", $lista);
$smarty->assign("id", $_GET['id']);
$smarty->assign("ci", $listaD[4]);
$smarty->assign("nombres", $listaD[5]);
$smarty->assign("apellidos", $listaD[6]);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Curriculo/IListadoSeccion.php');
?>