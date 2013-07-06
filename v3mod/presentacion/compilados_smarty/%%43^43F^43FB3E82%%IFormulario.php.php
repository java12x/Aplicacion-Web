<?php /* Smarty version 2.6.14, created on 2013-07-05 11:43:26
         compiled from _Grupo/IFormulario.php */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_checkboxes', '_Grupo/IFormulario.php', 141, false),)), $this); ?>
<html>
    <head>
        <title>Uagrm - Ingenieria Informatica - Formulario</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/<?php echo $this->_tpl_vars['tema']; ?>
"/>

        <link rel="stylesheet" type="text/css" media="screen" href="../General/Validador/css/screen.css" />
        <script src="../General/Validador/jquery-1.6.1.min.js" type="text/javascript"></script>
        <script src="../General/Validador/jquery.validate.min.js" type="text/javascript"></script>
        <script src="validador.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="body2">    
            <div class="pagina0">
            </div>    
            <div class="pagina1">
                <!-- <encabezado> -->
                <div class="superior">
                </div>
                <!-- </encabezado> -->     
                <!-- <menuPublico> -->   

                <div id="column-1" class="container">      
                    <div class="overlay"></div>
					<?php require_once('../General/indiceH.php'); ?>

                    <div class="buscar">
                        <table style="border: 0px;">
                            <tr>
                                <td>
                                    <input type="text" name="tBuscar" id="tBuscar">
                                </td>
                                <td>
                                    <input type="submit" name="buscar" id="buscar" value="Buscar" onClick="location='../Busqueda/Formulario.php?texto=' + document.getElementById('tBuscar').value">
                                </td>    
                            </tr>
                        </table>
                    </div>
                </div>
                <!-- </menuPublico> -->

<!-- <indice> -->     
                <div class="indice">
                    <?php 
                    require_once('../General/indice.php');
                     ?>	         	
                </div>
                <!-- </indice> -->	
                <!-- <contenido> -->
                <div class="contenido">
                    <div style="background-color:#FFF; width:AUTO; height:auto; padding:15px;">
                        <!--  contenido REAL -->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">
                                Formulario Grupo
                            </div>
                            <!-- contenido real texto-->
                            <div class="contenido-real-texto">      
                                <!-- start formulario-->
                                <form id="form1" name="form1" action="Procesar.php?id=<?php echo $this->_tpl_vars['valores']['id']; ?>
&accion=<?php echo $this->_tpl_vars['accion']; ?>
" method="POST">           
                                    <table style="width: 70%" class="tabla_formulario">
                                        <tr class="fila0" style="text-align: left">
                                            <td colspan="2">
                                                Datos del grupo
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <td colspan="2">
                                                <span class="rSpan">Los campos marcados con (*), son requeridos.</span>
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Nombre<span class="rSpan">(*)</span>
                                            </th>
                                            <td style="text-align: left">
                                                <input type="text" name="nombre" value="<?php echo $this->_tpl_vars['valores']['gru_nombre']; ?>
" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Descripci&oacute;n
                                            </th>
                                            <td style="text-align: left">
                                                <input type="text" name="descripcion" value="<?php echo $this->_tpl_vars['valores']['gru_descripcion']; ?>
" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Tipo<span class="rSpan">(*)</span>
                                            </th>
                                            <td style="text-align: left">
                                                <?php if ($this->_tpl_vars['accion'] == 'UPD'): ?>
                                                <input type="hidden" name="tipo"value="<?php echo $this->_tpl_vars['valores']['gru_tipo']; ?>
"/>
                                                <label>
                                                    <?php if ($this->_tpl_vars['valores']['gru_tipo'] == 1): ?>
                                                    Administrativo
                                                    <?php elseif ($this->_tpl_vars['valores']['gru_tipo'] == 2): ?>
                                                    Docente
                                                    <?php elseif ($this->_tpl_vars['valores']['gru_tipo'] == 3): ?>
                                                    Estudiante
                                                    <?php endif; ?>
                                                </label>
                                                <?php else: ?>
                                                <select name="tipo">
                                                    <option value="1" <?php if ($this->_tpl_vars['valores']['gru_tipo'] == 1): ?>selected<?php endif; ?>>Administrativo</option>
                                                    <option value="2" <?php if ($this->_tpl_vars['valores']['gru_tipo'] == 2): ?>selected<?php endif; ?>>Docente</option>
                                                    <option value="3" <?php if ($this->_tpl_vars['valores']['gru_tipo'] == 3): ?>selected<?php endif; ?>>Estudiante</option>
                                                </select>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Estado
                                            </th>
                                            <td style="text-align: left">
                                                <label><input type="checkbox" name="estado" value="1" <?php if ($this->_tpl_vars['valores']['gru_estado'] == '1'): ?> checked <?php endif; ?> />Habilitado</label>
                                            </td>
                                        </tr>
                                        <tr class="fila0" style="text-align: left">
                                            <td colspan="2">
                                                Privilegios
                                            </td>
                                        </tr>

                                        <tr class="fila1_f">
                                            <th style="text-align: left" colspan="2">
                                                Administraci&oacute;n
                                            </th>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Administrativos
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o1','options' => $this->_tpl_vars['o1v'],'selected' => $this->_tpl_vars['o1s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Docentes
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o2','options' => $this->_tpl_vars['o2v'],'selected' => $this->_tpl_vars['o2s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Estudiantes
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o3','options' => $this->_tpl_vars['o3v'],'selected' => $this->_tpl_vars['o3s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th style="text-align: left" colspan="2">
                                                Publicaciones
                                            </th>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Gestiones
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o4','options' => $this->_tpl_vars['o4v'],'selected' => $this->_tpl_vars['o4s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Carreras
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o5','options' => $this->_tpl_vars['o5v'],'selected' => $this->_tpl_vars['o5s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Datos de carrera
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o6','options' => $this->_tpl_vars['o6v'],'selected' => $this->_tpl_vars['o6s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Materias
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o7','options' => $this->_tpl_vars['o7v'],'selected' => $this->_tpl_vars['o7s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Planes de estudio
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o8','options' => $this->_tpl_vars['o8v'],'selected' => $this->_tpl_vars['o8s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Asignar materias
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o9','options' => $this->_tpl_vars['o9v'],'selected' => $this->_tpl_vars['o9s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Planes de avance
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o10','options' => $this->_tpl_vars['o10v'],'selected' => $this->_tpl_vars['o10s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th style="text-align: left" colspan="2">
                                                Acad&eacute;mico
                                            </th>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Secci&oacute;n curriculum
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o11','options' => $this->_tpl_vars['o11v'],'selected' => $this->_tpl_vars['o11s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Curriculums
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o12','options' => $this->_tpl_vars['o12v'],'selected' => $this->_tpl_vars['o12s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Noticias
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o13','options' => $this->_tpl_vars['o13v'],'selected' => $this->_tpl_vars['o13s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Grupos
                                            </td>
                                            <td>
                                                <?php echo smarty_function_html_checkboxes(array('name' => 'o14','options' => $this->_tpl_vars['o14v'],'selected' => $this->_tpl_vars['o14s'],'separator' => "<br />"), $this);?>

                                            </td>
                                        </tr>
                                        <tr class="fila0">
                                            <td style="text-align: center" colspan="2">                        
                                                <input type="hidden" name="postID" value="<?php echo $this->_tpl_vars['postId']; ?>
"/>
                                                <input type="submit" class="boton_obscuro" value="Guardar"/>
                                                <input type="button" class="boton_obscuro"  value="Cancelar" onClick="location='Listado.php'"/>
                                            </td>
                                        </tr>
                                    </table>
                                </form>      



                                <!-- end formulario-->       	
                            </div> 
                            <!-- /contenido real texto-->
                        </div> 
                        <!-- /contenido REAL-->            
                    </div>  
                    <!-- </contenido> -->
                </div>
                <!-- <ancla> -->	
                <p><iframe class="ancla" src="n.JPG" marginwidth="0" marginheight="0"   width="100%" scrolling="no" frameborder="0" height="2"  style="visibility:hidden;"></iframe></p>
                <!-- </ancla> -->		
            </div><!-- /pagina1 -->           
            <!--Pie-->
            <div class="pagina2"  >
                <table style="width: 100%">
                    <tr>
                        <td style="width: 20%">&nbsp;
                        </td>
                        <td style="width: auto; text-align: center">
                            |<a href="sdf"> Grupo20 </a>|<a> Tecnologia-WEB </a>|<a href="http://www.uagrm.edu.bo"> UAGRM 2013 </a>|
                        </td>
                        <td style="width: 20%; text-align: right">
                            <table style="width: 100%; color: #fff">
                                <tr>
                                    <td style="text-align: right">
                                        Visitas:
                                    </td>
                                    <td>
                                        <?php echo $this->_tpl_vars['visitas']; ?>

                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- /pagina2-->
        </div> <!--/body2 -->
    </body>
</html>