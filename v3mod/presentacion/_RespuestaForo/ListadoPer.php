<?php
    require_once '../../libs.inc.php';
    require_once '../../negocio/gestores/GPersona.php';
    $gestor = new GPersona();
    $lista=$gestor->listar();
    $smarty->assign("regs",$lista);  
    $smarty->display('_TemaForo/IListadoPer.php');
?>