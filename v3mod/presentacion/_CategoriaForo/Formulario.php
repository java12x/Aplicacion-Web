<?php
    include_once '../../libs.inc.php';
    include_once '../../negocio/gestores/GCategoriaForo.php';
    if(!(isset($_GET['id']))){
        $smarty->assign("accion","ADD");  
    }
    else{
        $gestor=new GCategoriaForo();          
        $lista=$gestor->obtener($_GET['id']);  
        $smarty->assign("accion","UPD");
        $smarty->assign("valores",$lista);
    }  
    $smarty->display('_CategoriaForo/IFormulario.php');
?>