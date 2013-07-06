<?php

session_start();
if (!isset($_SESSION['ini']))
    header("Location: ../../");
if ($_SESSION['pG'][8][0] == '0')
    header("Location: ../../");
if (!isset($_GET['id']))
    header("Location: ../../");

include_once '../../libs.inc.php';
include_once '../../negocio/gestores/GDocente.php';
include_once '../../negocio/gestores/GPlanAvance.php';
include_once '../../negocio/gestores/GMateria.php';
include_once '../../negocio/gestores/GGestion.php';

require_once '../General/Contador.php';
require_once '../General/Post_Block.php';
$pb = new Post_Block();
$smarty->assign("postId", $pb->startPost());
$smarty->assign("visitas", Contador::obtValorImgDeCod(20));

$gestor = new GDocente();
$gestorPA = new GPlanAvance();
$gestorM = new GMateria();
$gestorG = new GGestion();

if (isset($_GET['gestion']))
    $gesAct = $_GET['gestion'];
else {
    $gesAct = $gestorG->obtenerGestionActual();
    $gesAct = $gesAct[0];
}
$lista = $gestor->obtener($_GET['id']);
$listaPA = $gestorPA->listarMateriasDoc($_GET['id'], $gesAct);
$listaM = $gestorM->listar();
$listaG = $gestorG->listar();

$smarty->assign("idDoc", $_GET['id']);
$smarty->assign("gestion", $gesAct);
$smarty->assign("valores", $lista);
$smarty->assign("regsPA", $listaPA);
$smarty->assign("materias", $listaM);
$smarty->assign("gestiones", $listaG);
$smarty->assign("tema", $_SESSION['tema']);
$smarty->display('_MateriaDocente/IFormulario.php');
?>