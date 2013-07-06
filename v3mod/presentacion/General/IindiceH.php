
<div id="menu_h">
    <ul>
        <li>
            <a href="../General/index.php">INICIO</a>              
        </li>
        <li>|</li>
        <li>INFORMATICA
            <ul>
                <li><a href="../DatosCarrera/Formulario.php?tipo=5&idC=1">Historia</a></li>
                <li><a href="../DatosCarrera/Formulario.php?tipo=1&idC=1">Mision</a></li>
                <li><a href="../DatosCarrera/Formulario.php?tipo=2&idC=1">Vision</a></li>
                <li><a href="../PlanEstudios/Listado.php?id=1">Malla Curricular</a></li>
            </ul> 
        </li>
        <li>|</li>
        <li>SISTEMAS
            <ul>
                <li><a href="../DatosCarrera/Formulario.php?tipo=5&idC=2">Historia</a></li>
                <li><a href="../DatosCarrera/Formulario.php?tipo=1&idC=2">Mision</a></li>
                <li><a href="../DatosCarrera/Formulario.php?tipo=2&idC=2">Vision</a></li>
                <li><a href="../PlanEstudios/Listado.php?id=2">Malla Curricular</a></li>
            </ul> 
        </li>
        <li>|</li>
        <li>REDES
            <ul>
                <li><a href="../DatosCarrera/Formulario.php?tipo=5&idC=3">Historia</a></li>
                <li><a href="../DatosCarrera/Formulario.php?tipo=1&idC=3">Mision</a></li>
                <li><a href="../DatosCarrera/Formulario.php?tipo=2&idC=3">Vision</a></li>
                <li><a href="../PlanEstudios/Listado.php?id=3">Malla Curricular</a></li>
            </ul> 
        </li>
        <li>|</li>
        <li>DOCENTES
            <ul>
                <li><a href="../PlanAvance/ListadoDoc.php">Planes de avance</a></li>		
                <li><a href="../Curriculo/Listado.php">Curriculum Docentes</a></li>
            </ul>
        </li>
        <li>|</li>
        <li>
            <a href="#">UAGRM</a>
        </li>
        <li>|</li>
        <li>
            <a href="../Noticia/Noticias.php">NOTICIAS</a>
        </li>
        <li>|</li>
        {if $nombre==''}
        <li>
            [Iniciar sesi&oacute;n]
            <ul style="width: 130px;">
                <li><a href="../Sesion/Formulario.php?t=a">Administrativo</a></li>		
                <li><a href="../Sesion/Formulario.php?t=d">Docente</a></li>
                <li><a href="../Sesion/Formulario.php?t=e">Estudiante</a></li>
            </ul>
        </li>
        {else}
        <li>
            [{$nombre}]
            <ul style="width: 90px;">
                <li><a href="../DatosPersonales/Formulario.php">&nbsp;&nbsp;Perfil&nbsp;&nbsp;</a></li>
                {if $tipo==1}
                <li><a href="../_Noticia/Listado.php?id={$idtipo}">&nbsp;&nbsp;Noticias&nbsp;&nbsp;</a></li>
                {elseif $tipo==2}
                <li><a href="../_Curriculo/ListadoSeccion.php?id={$idtipo}">&nbsp;&nbsp;Curriculum&nbsp;&nbsp;</a></li>
                {/if}
                <li><a href="../Sesion/Procesar.php?opc=1">&nbsp;&nbsp;Salir&nbsp;&nbsp;</a></li>
            </ul>
        </li>
        {/if}
    </ul>
</div>

