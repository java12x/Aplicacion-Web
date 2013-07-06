<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}
if (!isset($_GET['id']) || !isset($_GET['idSec'])) {
    header("Location: ../../");
    return;
}
if ($_SESSION['pG'][11][0] == '0') {
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

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GDocente.php';
include_once '../../negocio/gestores/GCurriculo.php';
include_once '../../negocio/gestores/GCurriculoSeccion.php';
include_once '../../negocio/gestores/GSeccionCur.php';
include_once '../../negocio/gestores/GPlantilla.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(28));

$gestor = new GCurriculo();
$gestorCS = new GCurriculoSeccion();
$gestorSC = new GSeccionCur();
$gestorD = new GDocente();

$listaD = $gestorD->obtener($_GET['id']);
$lista = $gestor->obtenerPorCI($listaD[4]);

$gestorP = new GPlantilla();
$listaSC = $gestorSC->obtener($_GET['idSec']);
$listaP = $gestorP->obtener($listaSC[2]);

if (is_null($lista)) {
    $texto = $listaP[2];
} else {
    $listaCS = $gestorCS->obtenerDeCurriculo($lista[0], $_GET['idSec']);
    if (is_null($listaCS))
        $texto = $listaP[2];
    else{
        if(trim ($listaCS[3])=='')
            $texto = $listaP[2];
        else
            $texto=$listaCS[3];
    }
}

$smarty->assign("idCur", $lista[0]);
$smarty->assign("idDoc", $_GET['id']);
$smarty->assign("seccion", $listaSC[1]);
$smarty->assign("valores", $lista);
$smarty->assign("valoresD", $listaD);
$smarty->assign("idSec", $_GET['idSec']);
$smarty->assign("texto", $texto);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_Curriculo/IFormulario.php');
?>