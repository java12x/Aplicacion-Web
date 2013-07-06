<div id="menu_f">
    <ul class="nivel-1">
        {if $p1 || $p2 || $p3}
        <li class="paquete">ADMINISTRACI&Oacute;N</li>
    
        <li>&nbsp;&nbsp;&nbsp;Usuarios
            <ul class="nivel-2">
                {if $p1}<li><a href="../_AdmDocEst/Listado.php?t=a">Administrativo</a></li>{/if}
                {if $p2}<li><a href="../_AdmDocEst/Listado.php?t=d">Docente</a></li>{/if}
                {if $p3}<li><a href="../_AdmDocEst/Listado.php?t=e">Estudiante</a></li>{/if}
            </ul>    
        </li>
        {/if}
        {if $p4}<li><a href="../_Gestion/Listado.php">Gestiones</a></li>{/if}
        {if $p5}<li><a href="../_Carrera/Listado.php">Carreras</a></li>{/if}
        {if $p6}<li><a href="../_DatosCarrera/Listado.php?id=1">Inform&aacute;tica</a></li>{/if}
        {if $p6}<li><a href="../_DatosCarrera/Listado.php?id=2">Sistemas</a></li>{/if}
        {if $p6}<li><a href="../_DatosCarrera/Listado.php?id=3">Redes</a></li>{/if}
        {if $p7}<li><a href="../_Materia/Listado.php">Materias</a></li>{/if}

        {if $p8}
        <li>&nbsp;&nbsp;&nbsp;Planes de estudio
            <ul class="nivel-2">
                {if $p8}<li><a href="../_MateriaCarrera/Listado.php?id=1">Inform&aacute;tica</a></li>
                        <li><a href="../_MateriaCarrera/Listado.php?id=2">Sistemas</a></li>
                        <li><a href="../_MateriaCarrera/Listado.php?id=3">Redes</a></li>{/if}
            </ul>    
        </li>
        {/if}

        {if $p9}<li><a href="../_MateriaDocente/Listado.php">Asignar materias</a></li>{/if}
        {if $p10}<li><a href="../_PlanAvance/ListadoDoc.php">Planes de avance</a></li>{/if}
        {if $p11}<li><a href="../_SeccionCur/Listado.php">Secciones cur.</a></li>{/if}
        {if $p12}<li><a href="../_Curriculo/Listado.php">Curriculums</a></li>{/if}
        {if $p13}<li><a href="../_Noticia/ListadoAdm.php">Noticias</a></li>{/if}
        {if $p14}<li><a href="../_Grupo/Listado.php">Grupos</a></li>{/if}
        
    </ul>
</div>