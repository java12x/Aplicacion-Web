<?php   
    if(isset ($_GET['id'])){
        require_once '../../libs.inc.php';
        require_once '../../negocio/gestores/GTemaForo.php';
        include_once '../../negocio/gestores/GCategoriaForo.php';        
        $gestorC=new GCategoriaForo();
        $listaC=$gestorC->listar();
        if(isset ($_GET['cat']))
            $cat=$_GET['cat'];
        else{
            $cat=$gestorC->obtener(1);
            if(is_null($cat))
                $cat=0;
            else
                $cat=$cat[0];        
        }
        $gestor = new GTemaForo();
        $lista=$gestor->listarTemasPersona($_GET['id'], $cat);
        $smarty->assign("regs",$lista);  
        $smarty->assign("idPer",$_GET['id']);  
        $smarty->assign("cat",$cat);  
        $smarty->assign("categorias",$listaC);  
        $smarty->display('_TemaForo/IListado.php');    
    }    
?>