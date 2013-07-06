<?php
    include '../../negocio/gestores/GTemaForo.php';
    $gestor = new GTemaForo();
    if(!isset ($_POST['estado']))
        $estado=0;
    else
        $estado=1;    
    if($_GET['accion']=='ADD'){
        $campos=array('', $_GET['idPer'], $_POST['categoria'], $_POST['titulo'],
                      $_POST['texto'], $_POST['fecha'], $estado);
        $gestor->insertar($campos);
        header("Location: Listado.php?id=" . $_GET['idPer'] . "&cat=" . $_POST['categoria']);
    }
    if($_GET['accion']=='UPD'){
        $campos=array($_GET['id'], $_GET['idPer'], $_POST['categoria'], $_POST['titulo'],
                      $_POST['texto'], $_POST['fecha'], $estado);
        $gestor->actualizar($campos);
        header("Location: Listado.php?id=" . $_GET['idPer'] . "&cat=" . $_POST['categoria']);
    }
?>