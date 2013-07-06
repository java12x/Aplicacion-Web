<?php

if (!isset($_GET['id']) || !isset($_GET['idSec'])) {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GDocente.php';
include_once '../../negocio/gestores/GCurriculo.php';
include_once '../../negocio/gestores/GCurriculoSeccion.php';
include_once '../../negocio/gestores/GSeccionCur.php';
include_once '../../negocio/gestores/GPlantilla.php';
require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(106));
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

session_start();
if(isset ($_SESSION['tema']))
    $tema=$_SESSION['tema'];
else
    $tema='style-fhk.css';

$smarty->assign("idCur", $lista[0]);
$smarty->assign("idDoc", $_GET['id']);
$smarty->assign("valores", $lista);
$smarty->assign("valoresD", $listaD);
$smarty->assign("idSec", $_GET['idSec']);
$smarty->assign("texto", $texto);
$smarty->assign("tema", $tema);
$smarty->display('Curriculo/IFormulario.php');
?>