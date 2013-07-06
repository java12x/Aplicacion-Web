<?php

if (isset($_GET['id'])) {
    require_once '../../libs.inc.php';
    require_once '../../negocio/gestores/GMateriaCarrera.php';
    require_once '../../negocio/gestores/GRequisito.php';

    require_once '../General/Contador.php';
    $smarty->assign("visitas", Contador::obtValorImgDeCod(108));

    session_start();
    if (isset($_SESSION['tema']))
        $tema = $_SESSION['tema'];
    else
        $tema='style-fhk.css';


    $gestor = new GMateriaCarrera();
    $gestorR = new GRequisito();
    $lista = $gestor->listarDeCarrera($_GET['id']);
    $listaR = $gestorR->listar();
    $smarty->assign("regs", $lista);
    $smarty->assign("requisitos", $listaR);
    $smarty->assign("carrera", $_GET['id']);
    $smarty->assign("tema", $tema);
    $smarty->display('PlanEstudios/IListado.php');
}
?>