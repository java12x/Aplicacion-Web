<?php /* Smarty version 2.6.14, created on 2013-07-05 11:42:42
         compiled from _MateriaCarrera/IFormulario.php */ ?>
<html>
    <head>
        <title>Uagrm - Ingenieria Informatica - Formulario</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/<?php echo $this->_tpl_vars['tema']; ?>
"/>

        <?php echo '
        <script type="text/javascript" language=javascript>
            $(function() {$("#fechanacP").datepicker(); });
        </script>
        '; ?>


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
                <div class="contenido" align="justify">
                    <div style="background-color:#FFF; width:AUTO; height:auto; padding:15px;">
                        <!--  contenido REAL -->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">
                                Materias de la carrera <?php echo $this->_tpl_vars['valoresC']['car_nombre']; ?>

                            </div>
                            <!-- contenido real texto-->
                            <div class="contenido-real-texto">      
                                <!-- start formulario-->


                                <br/>
                                <table style="width: 80%" class="tabla_listado">
                                    <tr class="fila0">
                                        <th style="text-align: left" colspan="4">
                                            Materia
                                        </th>
                                    </tr>
                                    <tr class="fila0">
                                        <td style="width: 24px"></td>
                                        <td style="width: 50px; text-align: center">
                                            Sigla
                                        </td>
                                        <td style="width: auto; text-align: left">
                                            Nombre
                                        </td>
                                        <td style="width: 50px; text-align: center">
                                            Semestre
                                        </td>
                                    </tr>
                                    <?php if ($this->_tpl_vars['id'] != ""): ?>
                                    <tr>
                                        <td style="text-align: center">                                
                                            <a href="Procesar.php?id=<?php echo $this->_tpl_vars['id']; ?>
&idCarrera=<?php echo $this->_tpl_vars['carrera']; ?>
&accion=DEL" onClick="return confirm('¿Eliminar el registro?')">
                                                <image alt="del" src="../imgs/del.png" />
                                            </a>                       
                                        </td> 
                                        <td>
                                            <?php echo $this->_tpl_vars['valores']['mat_sigla']; ?>

                                        </td>
                                        <td>
                                            <?php echo $this->_tpl_vars['valores']['mat_nombre']; ?>

                                        </td>
                                        <td>
                                            <?php echo $this->_tpl_vars['valores']['mat_semestre']; ?>

                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if ($this->_tpl_vars['id'] == ""): ?>
                                    <tr class="fila1_f">
                                        <td colspan="4" style="text-align: right">
                                            <form action="Procesar.php?idCarrera=<?php echo $this->_tpl_vars['carrera']; ?>
&accion=ADD" method="POST">
                                                <select name="idMateria">
                                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['materias']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                                    <option value="<?php echo $this->_tpl_vars['materias'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['materias'][$this->_sections['i']['index']]['mat_sigla']; ?>
 - <?php echo $this->_tpl_vars['materias'][$this->_sections['i']['index']]['mat_nombre']; ?>
</option>
                                                    <?php endfor; endif; ?>
                                                </select>
                                                <input type="hidden" name="postID" value="<?php echo $this->_tpl_vars['postId']; ?>
"/>
                                                <input type="submit" value="seleccionar" class="boton_obscuro"/>
                                            </form>    
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </table>
                                <br/>
                                <?php if ($this->_tpl_vars['id'] != ""): ?>
                                <table style="width: 80%" class="tabla_listado">          
                                    <tr style="text-align: left" class="fila0">
                                        <th colspan="4">
                                            Requisitos
                                        </th>
                                    </tr>
                                    <tr class="fila0">
                                        <td style="width: 24px"></td>
                                        <td style="width: 50px; text-align: center">
                                            Sigla
                                        </td>
                                        <td style="width: auto; text-align: left">
                                            Nombre
                                        </td>
                                        <td style="width: 50px; text-align: center">
                                            Semestre
                                        </td>
                                    </tr>
                                    <?php if ($this->_tpl_vars['id'] != ""): ?>
                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['requisitos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                    <tr <?php if ($this->_sections['i']['index'] % 2 == 0): ?>class="fila1"<?php else: ?>class="fila2"<?php endif; ?>>
                                        <td style="text-align: center">
                                            <a href="Procesar.php?id=<?php echo $this->_tpl_vars['id']; ?>
&idReq=<?php echo $this->_tpl_vars['requisitos'][$this->_sections['i']['index']]['id']; ?>
&idCarrera=<?php echo $this->_tpl_vars['carrera']; ?>
&accion=DELR" onClick="return confirm('¿Eliminar el registro?')">
                                                <image alt="del" src="../imgs/del.png" />
                                            </a>                       
                                        </td> 
                                        <td>
                                            <?php echo $this->_tpl_vars['requisitos'][$this->_sections['i']['index']]['mat_sigla']; ?>

                                        </td>
                                        <td>
                                            <?php echo $this->_tpl_vars['requisitos'][$this->_sections['i']['index']]['mat_nombre']; ?>

                                        </td>
                                        <td>
                                            <?php echo $this->_tpl_vars['requisitos'][$this->_sections['i']['index']]['mat_semestre']; ?>

                                        </td>
                                    </tr>
                                    <?php endfor; endif; ?>
                                    <?php endif; ?>
                                    <tr class="fila1_f">
                                        <td colspan="4" style="text-align: right">
                                            <form action="Procesar.php?id=<?php echo $this->_tpl_vars['id']; ?>
&idCarrera=<?php echo $this->_tpl_vars['carrera']; ?>
&accion=ADDR" method="POST">
                                                <select name="idMateria">
                                                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['materias']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
                                                    <option value="<?php echo $this->_tpl_vars['materias'][$this->_sections['i']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['materias'][$this->_sections['i']['index']]['mat_sigla']; ?>
 - <?php echo $this->_tpl_vars['materias'][$this->_sections['i']['index']]['mat_nombre']; ?>
</option>
                                                    <?php endfor; endif; ?>
                                                </select>
                                                <input type="hidden" name="postID" value="<?php echo $this->_tpl_vars['postId']; ?>
"/>
                                                <input type="submit" value="agregar" class="boton_obscuro"/>
                                            </form>    
                                        </td>
                                    </tr>
                                </table>
                                <?php endif; ?>
                                <table class="formulario" cellspacing="0" cellpadding="5" width="80%">
                                    <tr>
                                        <td style="text-align: center">                        
                                            <input type="button" value="Volver" onClick="location='Listado.php?id=<?php echo $this->_tpl_vars['carrera']; ?>
'" class="boton_obscuro"/>                    
                                        </td>
                                    </tr>
                                </table>    
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