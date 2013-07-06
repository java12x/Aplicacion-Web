<?php
    include '../../negocio/gestores/GCategoriaForo.php';
    $gestor=new GCategoriaForo();
    if(!isset ($_POST['estado']))
        $estado=0;
    else
        $estado=1;    
    if($_GET['accion']=='ADD'){      
        $campos= array('', $_POST['nombre'], $_POST['descripcion']);
        $gestor->insertar($campos);     
        header("Location: Listado.php");
    }
    if($_GET['accion']=='UPD'){
        $campos= array($_GET['id'], $_POST['nombre'], $_POST['descripcion']);
        $gestor->actualizar($campos);     
        header("Location: Listado.php");
    }
?>