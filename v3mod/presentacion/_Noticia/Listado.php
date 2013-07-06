<?php

require_once '../../libs.inc.php';
require_once '../../negocio/gestores/GNoticia.php';
include_once '../../negocio/gestores/GGestion.php';
include_once '../../negocio/gestores/GAdministrativo.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(30));
session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}

if (!isset($_GET['id'])) {
    header("Location: ../../");
    return;
}

if ($_SESSION['pG'][12][0] == '0' && $_SESSION['pG'][12][1] == '0' && $_SESSION['pG'][12][2] == '0' && $_SESSION['pG'][12][3] == '0') {
    if ($_SESSION['tipo'] == 1) {
        if ($_SESSION['idTipo'] != $_GET['id']) {
            header("Location: ../../");
            return;
        }
    } else {
        header("Location: ../../");
        return;
    }
}

$gestorG = new GGestion();
$listaG = $gestorG->listar();
if (isset($_GET['gestion']))
    $gesAct = $_GET['gestion'];
else {
    $gesAct = $gestorG->obtenerGestionActual();
    $gesAct = $gesAct[0];
}

$gestor = new GNoticia();
$lista = $gestor->listarNoticiasAdm($_GET['id'], $gesAct);

if ($_SESSION['pG'][12][0] != '0')
    $smarty->assign("p_nuevo", true);
if ($_SESSION['pG'][12][1] != '0')
    $smarty->assign("p_modificar", true);
if ($_SESSION['pG'][12][2] != '0')
    $smarty->assign("p_bajaalta", true);

$smarty->assign("regs", $lista);
$smarty->assign("idAdm", $_GET['id']);
$smarty->assign("gestion", $gesAct);
$smarty->assign("gestiones", $listaG);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Noticia/IListado.php');
?>