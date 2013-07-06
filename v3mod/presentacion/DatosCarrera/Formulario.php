<?php

if (!isset($_GET['id']))
    if (!isset($_GET['tipo']) || !isset($_GET['idC'])) {
        header("Location: ../../");
        return;
    }

include_once '../../libs.inc.php';
require_once '../../negocio/gestores/GDatosCarrera.php';
require_once '../../negocio/gestores/GCarrera.php';

require_once '../General/Contador.php';
$smarty->assign("visitas", Contador::obtValorImgDeCod(103));

$gestorDC = new GDatosCarrera();
$gestorC = new GCarrera();

if (isset($_GET['id']))
    $valoresDC = $gestorDC->obtener($_GET['id']);
else
    $valoresDC = $gestorDC->obtenerPorTipo($_GET['idC'], $_GET['tipo']);
$valoresC = $gestorC->obtener($valoresDC[1]);

session_start();
if(isset ($_SESSION['tema']))
    $tema=$_SESSION['tema'];
else
    $tema='style-fhk.css';

$smarty->assign("valores", $valoresDC);
$smarty->assign("carrera", $valoresC[1]);
$smarty->assign("tema", $tema);
$smarty->display('DatosCarrera/IFormulario.php');
?>