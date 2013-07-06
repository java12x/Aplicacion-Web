<?php
    include '../../negocio/gestores/GGrupo.php';
    $gestor=new GGrupo();
    if(!isset ($_POST['estado']))
        $estado=0;
    else
        $estado=1;    
    if($_GET['accion']=='ADD'){      
        $campos= array('', $_POST['nombre'], $_POST['descripcion'], $_POST['tipo'], $estado);
        $gestor->insertar($campos);     
        header("Location: Listado.php");
    }
    if($_GET['accion']=='UPD'){
        $campos= array($_GET['id'], $_POST['nombre'], $_POST['descripcion'], $_POST['tipo'], $estado);
        $gestor->actualizar($campos);     
        header("Location: Listado.php");
    }
?>