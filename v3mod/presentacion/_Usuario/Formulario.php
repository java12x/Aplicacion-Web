<?php
    include_once '../../libs.inc.php';
    include_once '../../negocio/gestores/GGrupo.php';
    if(!(isset($_GET['id']))){
        $smarty->assign("accion","ADD");  
    }
    else{
        $gestor=new GGrupo();          
        $lista=$gestor->obtener($_GET['id']);  
        $smarty->assign("accion","UPD");
        $smarty->assign("valores",$lista);
    }  
    $smarty->display('_Grupo/IFormulario.php');
?>