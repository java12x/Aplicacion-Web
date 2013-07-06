<?php

session_start();
if (!isset($_SESSION['ini'])) {
    header("Location: ../../");
    return;
}

if (!isset($_GET['t'])) {
    header("Location: ../../");
    return;
}
if ($_GET['t'] == 'a' || $_GET['t'] == 'd' || $_GET['t'] == 'e') {

    if ($_GET['t'] == 'a' && $_SESSION['pG'][0][0] == '0' && $_SESSION['pG'][0][1] == '0') {
        header("Location: ../../");
        return;
    }
    if ($_GET['t'] == 'd' && $_SESSION['pG'][1][0] == '0' && $_SESSION['pG'][1][1] == '0') {
        header("Location: ../../");
        return;
    }
    if ($_GET['t'] == 'e' && $_SESSION['pG'][2][0] == '0' && $_SESSION['pG'][2][1] == '0') {
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

    $regcod = "Código";
    if ($_GET['t'] == 'a') {
        $gestor = new GAdministrativo();
        $tipo = 1;
    }
    if ($_GET['t'] == 'd') {
        $gestor = new GDocente();
        $tipo = 2;
    }
    if ($_GET['t'] == 'e') {
        $gestor = new GEstudiante();
        $regcod = "Registro";
        $tipo = 3;
    }
    if (!(isset($_GET['id']))) {
        if (isset($_GET['ci'])) {
            $gestorP = new GPersona();
            $listaP = $gestorP->obtenerPorCI($_GET['ci']);
            $smarty->assign("valores", $listaP);
        }
        $smarty->assign('sGenSel', 'M');
        $smarty->assign("accion", "ADD");
    } else {
        $lista = $gestor->obtener($_GET['id']);
        $gestorU = new GUsuario();
        $listaU = $gestorU->obtenerDePersonaTipo($lista[1], $tipo);
        $smarty->assign("id", $_GET['id']);
        $smarty->assign("registro", $lista[2]);
        $smarty->assign("accion", "UPD");
        $smarty->assign("valores", $lista);
        $smarty->assign("valoresU", $listaU);
        $smarty->assign("estado", $lista[3]);
        $smarty->assign('sGenSel', $lista[7]);
    }
    
    require_once '../General/Contador.php';
    require_once '../General/Post_Block.php';
    $pb = new Post_Block();
    $smarty->assign("postId", $pb->startPost());
    $smarty->assign("visitas", Contador::obtValorImgDeCod($tipo+3));

    $gestorG = new GGrupo();
    $listaG = $gestorG->listarPorTipo($tipo);

    $smarty->assign('tipo', $_GET['t']);
    $smarty->assign('sGenVals', array('M', 'F'));
    $smarty->assign('sGenNom', array('Masculino', 'Femenino'));
    $smarty->assign('regcod', $regcod);
    $smarty->assign('grupos', $listaG);
    $smarty->assign("tema", $_SESSION['tema']);
    $smarty->display('_AdmDocEst/IFormulario.php');
}
else
    header("Location: ../../");
?>