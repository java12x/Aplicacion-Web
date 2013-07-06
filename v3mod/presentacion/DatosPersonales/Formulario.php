<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GAdministrativo.php';
include_once '../../negocio/gestores/GDocente.php';
include_once '../../negocio/gestores/GEstudiante.php';
require_once '../../negocio/gestores/GUsuario.php';
require_once '../../negocio/gestores/GGrupo.php';
require_once '../../negocio/gestores/GPersona.php';
require_once '../../negocio/gestores/GTema.php';

$regcod = "Código";
if ($_SESSION['tipo'] == 1){
    $gestor = new GAdministrativo();
    $tipo='a';
}
if ($_SESSION['tipo'] == 2){
    $gestor = new GDocente();
    $tipo='d';
}
if ($_SESSION['tipo'] == 3) {
    $gestor = new GEstudiante();
    $regcod = "Registro";
    $tipo='e';
}

$lista = $gestor->obtenerDePersona($_SESSION['idP']);
$gestorU = new GUsuario();
$listaU = $gestorU->obtenerDePersonaTipo($lista[1], $_SESSION['tipo']);
if(!is_null($listaU)){
    $gestorT= new GTema();
    $tema=$gestorT->obtenerDeUsuario($listaU[0]);
    $smarty->assign("temaU", $tema[2]);
}
$smarty->assign("id", $lista[0]);
$smarty->assign("registro", $lista[2]);
$smarty->assign("accion", "UPD");
$smarty->assign("valores", $lista);
$smarty->assign("valoresU", $listaU);
$smarty->assign("estado", $lista[3]);
$smarty->assign('sGenSel', $lista[7]);

$gestorG = new GGrupo();
$listaG = $gestorG->listarPorTipo($_SESSION['tipo']);

$smarty->assign('tipo', $tipo);
$smarty->assign('sGenVals', array('M', 'F'));
$smarty->assign('sGenNom', array('Masculino', 'Femenino'));
$smarty->assign('regcod', $regcod);
$smarty->assign('grupos', $listaG);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('DatosPersonales/IFormulario.php');
?>