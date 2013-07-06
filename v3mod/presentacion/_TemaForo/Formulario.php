<?php
    include_once '../../libs.inc.php';
    include_once '../../negocio/gestores/GPersona.php';
    include_once '../../negocio/gestores/GTemaForo.php';
    include_once '../../negocio/gestores/GCategoriaForo.php';
    $gestor=new GTemaForo();
    $gestorP=new GPersona();
    $gestorC=new GCategoriaForo();
    $listaP=$gestorP->obtener($_GET['idPer']);
    $listaC=$gestorC->listar();
    if (!(isset($_GET['id']))) {
            $smarty->assign("accion", "ADD");
            $cat=$gestorC->obtener(1);
            if(is_null($cat))
                $cat=0;
            else
                $cat=$cat[0];  
    } 
    else {
        $lista=$gestor->obtener($_GET['id']);  
        $smarty->assign("id",$_GET['id']); 
        $smarty->assign("valores",$lista);
        $smarty->assign("accion", "UPD");
        $cat=$lista[2];
    }   
    $smarty->assign("idPer",$_GET['idPer']);     
    $smarty->assign("valoresP",$listaP);     
    $smarty->assign("cat",$cat);     
    $smarty->assign("categorias",$listaC);     
    $smarty->display('_TemaForo/IFormulario.php');
?>