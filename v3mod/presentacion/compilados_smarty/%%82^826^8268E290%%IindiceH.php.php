<?php /* Smarty version 2.6.14, created on 2013-02-26 21:52:16
         compiled from General/IindiceH.php */ ?>

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
        <?php if ($this->_tpl_vars['nombre'] == ''): ?>
        <li>
            [Iniciar sesi&oacute;n]
            <ul style="width: 130px;">
                <li><a href="../Sesion/Formulario.php?t=a">Administrativo</a></li>		
                <li><a href="../Sesion/Formulario.php?t=d">Docente</a></li>
                <li><a href="../Sesion/Formulario.php?t=e">Estudiante</a></li>
            </ul>
        </li>
        <?php else: ?>
        <li>
            [<?php echo $this->_tpl_vars['nombre']; ?>
]
            <ul style="width: 90px;">
                <li><a href="../DatosPersonales/Formulario.php">&nbsp;&nbsp;Perfil&nbsp;&nbsp;</a></li>
                <?php if ($this->_tpl_vars['tipo'] == 1): ?>
                <li><a href="../_Noticia/Listado.php?id=<?php echo $this->_tpl_vars['idtipo']; ?>
">&nbsp;&nbsp;Noticias&nbsp;&nbsp;</a></li>
                <?php elseif ($this->_tpl_vars['tipo'] == 2): ?>
                <li><a href="../_Curriculo/ListadoSeccion.php?id=<?php echo $this->_tpl_vars['idtipo']; ?>
">&nbsp;&nbsp;Curriculum&nbsp;&nbsp;</a></li>
                <?php endif; ?>
                <li><a href="../Sesion/Procesar.php?opc=1">&nbsp;&nbsp;Salir&nbsp;&nbsp;</a></li>
            </ul>
        </li>
        <?php endif; ?>
    </ul>
</div>
