<?php   
    require_once '../../libs.inc.php';
    require_once '../../negocio/gestores/GCategoriaForo.php';
    $gestor = new GCategoriaForo();
    $lista=$gestor->listar();
    $smarty->assign("regs",$lista);  
    $smarty->display('_CategoriaForo/IListado.php');
?>