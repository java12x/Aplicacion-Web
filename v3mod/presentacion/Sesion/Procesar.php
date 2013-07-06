<?php

include '../../negocio/gestores/GPersona.php';
include '../../negocio/gestores/GUsuario.php';
include '../../negocio/gestores/GGrupo.php';
include '../../negocio/gestores/GAdministrativo.php';
include '../../negocio/gestores/GEstudiante.php';
include '../../negocio/gestores/GDocente.php';
include '../../negocio/gestores/GTema.php';

if (isset($_GET['opc'])) {
    session_start();
    session_destroy();
    header("Location: ../../");
    return;
}

if (!isset($_GET['tipo'])) {
    header("Location: ../../");
    return;
}

if ($_GET['tipo'] == 'a') {
    $tipo = 1;
    $gestor = new GAdministrativo();
}
if ($_GET['tipo'] == 'd') {
    $gestor = new GDocente();
    $tipo = 2;
}
if ($_GET['tipo'] == 'e') {
    $gestor = new GEstudiante();
    $tipo = 3;
}
$gestorP = new GPersona();
$gestorU = new GUsuario();
$gestorG = new GGrupo();
$gestorT = new GTema();
$valoresU = $gestorU->obtenerPorNombre($_POST['snombre']);

if (is_null($valoresU)) {
    header("Location: Formulario.php?t=" . $_GET['tipo'] . "&errcod=1&u=" . $_POST['snombre']);
    return;
}
$valoresG = $gestorG->obtener($valoresU[1]);
if ($valoresG[3] != $tipo) {
    header("Location: Formulario.php?t=" . $_GET['tipo'] . "&errcod=1&u=" . $_POST['snombre']);
    return;
}
if ($valoresU[4] != $_POST['scontrasenia']) {
    header("Location: Formulario.php?t=" . $_GET['tipo'] . "&errcod=2&u=" . $_POST['snombre']);
    return;
}
$valoresP = $gestorP->obtener($valoresU[2]);
$listaP = $gestorG->listarPrivilegiosCodC($valoresG[0]);
$t=$gestor->obtenerDePersona($valoresP[0]);
$valoresT = $gestorT->obtenerDeUsuario($valoresU[0]);
$temaU='style-fhk.css';
if(!is_null($valoresT)){
    if($valoresT[2]==2)
        $temaU='style-fhk-lila.css';
    if($valoresT[2]==3)
        $temaU='style-fhk-rojo.css';
    if($valoresT[2]==4)
        $temaU='style-fhk-negro.css';
}
session_start();
$_SESSION['ini'] = true;
$_SESSION['idP'] = $valoresP[0];
$_SESSION['nP'] = $valoresP[3] . ' ' . $valoresP[2];
$_SESSION['idG'] = $valoresG[0];
$_SESSION['nG'] = $valoresG[1];
$_SESSION['pG'] = $listaP;
$_SESSION['idU'] = $valoresU[0];
$_SESSION['nU'] = $valoresU[3];
$_SESSION['tipo'] = $tipo;
$_SESSION['idTipo'] = $t[0];
$_SESSION['tema'] = $temaU;
header("Location: ../../");
?>