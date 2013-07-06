<?php /* Smarty version 2.6.14, created on 2013-02-26 23:14:36
         compiled from General/Iindice.php */ ?>
<div id="menu_f">
    <ul class="nivel-1">
        <?php if ($this->_tpl_vars['p1'] || $this->_tpl_vars['p2'] || $this->_tpl_vars['p3']): ?>
        <li class="paquete">ADMINISTRACI&Oacute;N</li>
    
        <li>&nbsp;&nbsp;&nbsp;Usuarios
            <ul class="nivel-2">
                <?php if ($this->_tpl_vars['p1']): ?><li><a href="../_AdmDocEst/Listado.php?t=a">Administrativo</a></li><?php endif; ?>
                <?php if ($this->_tpl_vars['p2']): ?><li><a href="../_AdmDocEst/Listado.php?t=d">Docente</a></li><?php endif; ?>
                <?php if ($this->_tpl_vars['p3']): ?><li><a href="../_AdmDocEst/Listado.php?t=e">Estudiante</a></li><?php endif; ?>
            </ul>    
        </li>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['p4']): ?><li><a href="../_Gestion/Listado.php">Gestiones</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p5']): ?><li><a href="../_Carrera/Listado.php">Carreras</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p6']): ?><li><a href="../_DatosCarrera/Listado.php?id=1">Inform&aacute;tica</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p6']): ?><li><a href="../_DatosCarrera/Listado.php?id=2">Sistemas</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p6']): ?><li><a href="../_DatosCarrera/Listado.php?id=3">Redes</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p7']): ?><li><a href="../_Materia/Listado.php">Materias</a></li><?php endif; ?>

        <?php if ($this->_tpl_vars['p8']): ?>
        <li>&nbsp;&nbsp;&nbsp;Planes de estudio
            <ul class="nivel-2">
                <?php if ($this->_tpl_vars['p8']): ?><li><a href="../_MateriaCarrera/Listado.php?id=1">Inform&aacute;tica</a></li>
                        <li><a href="../_MateriaCarrera/Listado.php?id=2">Sistemas</a></li>
                        <li><a href="../_MateriaCarrera/Listado.php?id=3">Redes</a></li><?php endif; ?>
            </ul>    
        </li>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['p9']): ?><li><a href="../_MateriaDocente/Listado.php">Asignar materias</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p10']): ?><li><a href="../_PlanAvance/ListadoDoc.php">Planes de avance</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p11']): ?><li><a href="../_SeccionCur/Listado.php">Secciones cur.</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p12']): ?><li><a href="../_Curriculo/Listado.php">Curriculums</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p13']): ?><li><a href="../_Noticia/ListadoAdm.php">Noticias</a></li><?php endif; ?>
        <?php if ($this->_tpl_vars['p14']): ?><li><a href="../_Grupo/Listado.php">Grupos</a></li><?php endif; ?>
        
    </ul>
</div>