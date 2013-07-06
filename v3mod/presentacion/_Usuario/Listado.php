<?php   
    require_once '../../libs.inc.php';
    require_once '../../negocio/gestores/GUsuario.php';
    $gestor = new GUsuario();
    $lista=$gestor->listar();
    $smarty->assign("regs",$lista);  
    $smarty->display('_Usuario/IListado.php');
?>