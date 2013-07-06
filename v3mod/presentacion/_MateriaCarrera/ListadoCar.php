<?php   
    require_once '../../libs.inc.php';
    require_once '../../negocio/gestores/GCarrera.php';
    $gestor = new GCarrera();
    $lista=$gestor->listar();
    $smarty->assign("regs",$lista);  
    $smarty->assign("tema", $_SESSION['tema']);
    $smarty->display('_MateriaCarrera/IListadoCar.php');
?>