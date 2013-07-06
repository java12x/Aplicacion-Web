<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if (!isset($_GET['idAdm'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][12][0] == '0' && $_SESSION['pG'][12][1] == '0' && $_SESSION['pG'][12][2] == '0') {
    if ($_SESSION['tipo'] == 1) {
        if ($_SESSION['idTipo'] != $_GET['idAdm']) {
            header("Location: ../../");
            return;
        }
    } else {
        header("Location: ../../");
        return;
    }
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GAdministrativo.php';
include_once '../../negocio/gestores/GNoticia.php';
include_once '../../negocio/gestores/GGestion.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(31));

$gestor = new GNoticia();
$gestorA = new GAdministrativo();
$gestorG = new GGestion();
$listaA = $gestorA->obtener($_GET['idAdm']);
$listaG = $gestorG->listar();
if (!(isset($_GET['id']))) {
    $smarty->assign("accion", "ADD");
    $gesAct = $gestorG->obtenerGestionActual();
    $gesAct = $gesAct[0];
} else {
    $lista = $gestor->obtener($_GET['id']);
    $smarty->assign("id", $_GET['id']);
    $smarty->assign("valores", $lista);
    $smarty->assign("accion", "UPD");
    $gesAct = $lista[2];
}
$smarty->assign("idAdm", $_GET['idAdm']);
$smarty->assign("valoresA", $listaA);
$smarty->assign("gestion", $gesAct);
$smarty->assign("gestiones", $listaG);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Noticia/IFormulario.php');
?>