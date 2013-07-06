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

    if ($_GET['t'] == 'a' && $_SESSION['pG'][0][0] == '0' && $_SESSION['pG'][0][1] == '0' && $_SESSION['pG'][0][2] == '0' && $_SESSION['pG'][0][3] == '0') {
        header("Location: ../../");
        return;
    }
    if ($_GET['t'] == 'd' && $_SESSION['pG'][1][0] == '0' && $_SESSION['pG'][1][1] == '0' && $_SESSION['pG'][1][2] == '0' && $_SESSION['pG'][1][3] == '0') {
        header("Location: ../../");
        return;
    }
    if ($_GET['t'] == 'e' && $_SESSION['pG'][2][0] == '0' && $_SESSION['pG'][2][1] == '0' && $_SESSION['pG'][2][2] == '0' && $_SESSION['pG'][2][3] == '0') {
        header("Location: ../../");
        return;
    }

    require_once '../../libs.inc.php';
    require_once '../../negocio/gestores/GAdministrativo.php';
    require_once '../../negocio/gestores/GDocente.php';
    require_once '../../negocio/gestores/GEstudiante.php';
    
    require_once '../General/Contador.php';

    if ($_GET['t'] == 'a') {
        $gestor = new GAdministrativo();
        $tipo = 1;
        $titulo='Administrativos';
    }
    if ($_GET['t'] == 'd') {
        $gestor = new GDocente();
        $tipo = 2;
        $titulo='Docentes';
    }
    if ($_GET['t'] == 'e') {
        $gestor = new GEstudiante();
        $tipo = 3;
        $titulo='Estudiantes';
    }

    if ($_SESSION['pG'][$tipo - 1][0] != '0')
        $smarty->assign("p_nuevo", true);
    if ($_SESSION['pG'][$tipo - 1][1] != '0')
        $smarty->assign("p_modificar", true);
    if ($_SESSION['pG'][$tipo - 1][2] != '0')
        $smarty->assign("p_bajaalta", true);

    $lista = $gestor->listar();
    $smarty->assign("visitas", Contador::obtValorImgDeCod($tipo));
    $smarty->assign("regs", $lista);
    $smarty->assign("tipo", $_GET['t']);
    $smarty->assign("titulo", $titulo);
    $smarty->assign("tema", $_SESSION['tema']);
    $smarty->display('_AdmDocEst/IListado.php');
}
else
    header("Location: ../../");
?>