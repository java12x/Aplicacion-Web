<?php /* Smarty version 2.6.14, created on 2013-02-26 22:58:19
         compiled from PlanEstudios/IListado.php */ ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/<?php echo $this->_tpl_vars['tema']; ?>
"/>

        <link rel="stylesheet" media="all" type="text/css" href="../General/OrdenarGrid/blue/style.css" />
        <script type="text/javascript" src="../General/OrdenarGrid/jquery-1.7.1.min.js"></script> 
        <script type="text/javascript" src="../General/OrdenarGrid/jquery.tablesorter.min.js"></script> 

        <?php echo '
        <script type="text/javascript" language=javascript>
            $(document).ready(function() 
            { 
                $("#tListado_").tablesorter({
                    headers: {0: {sorter: false}, 1: {sorter: false} } 
                }); 
            } 
        )
        </script>
        '; ?>
     
    </head>
    <body>
        <div class="body2">    
            <div class="pagina0">
            </div>    
            <div class="pagina1">
                <!-- <encabezado> -->
                <div class="superior"></div>
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
            <div style="background-color:#FFF; width:auto; height:auto; padding:15px;"><!--  <contenido_neto> -->
                        <div class="contenido-real">            
                            <div class="contenido-real-titulo">
                                Plan de estudio <?php echo $this->_tpl_vars['nombre']; ?>

                            </div>
                            <div class="contenido-real-texto"  style="font-size:small">
                                <!--START LISTADO-->
                                <table  style="width: 100%" class="tabla_listado" >  
                                    <thead>
                                        <tr class="fila0">
                                            <td style="width: 20px; text-align: center">
                                                Sigla
                                            </td>
                                            <td style="width: auto; text-align: left">
                                                Nombre
                                            </td>
                                            <td style="width: 20px; text-align: center">
                                                Se.
                                            </td>
                                            <td style="width: 20px; text-align: center">
                                                H.T.
                                            </td>
                                            <td style="width: 20px; text-align: center">
                                                H.P.
                                            </td>
                                            <td style="width: 20px; text-align: center">
                                                H.S.
                                            </td>
                                            <td style="width: 20px; text-align: center">
                                                Cr.
                                            </td>
                                            <td style="width: 60px; text-align: center">
                                                Requisitos
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['regs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                                <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['mat_sigla']; ?>

                                            </td>                    
                                            <td style="text-align: left">
                                                <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['mat_nombre']; ?>

                                            </td> 
                                            <td style="text-align: center">
                                                <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['mat_semestre']; ?>

                                            </td>
                                            <td style="text-align: center">
                                                <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['mat_hteoricas']; ?>

                                            </td>
                                            <td style="text-align: center">
                                                <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['mat_hpracticas']; ?>

                                            </td>
                                            <td style="text-align: center">
                                                <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['mat_hsemestre']; ?>

                                            </td>
                                            <td style="text-align: center">
                                                <?php echo $this->_tpl_vars['regs'][$this->_sections['i']['index']]['mat_creditos']; ?>

                                            </td>
                                            <td style="text-align: left">
                                                <?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['requisitos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
                                                <?php if ($this->_tpl_vars['requisitos'][$this->_sections['j']['index']]['req_matc_id'] == $this->_tpl_vars['regs'][$this->_sections['i']['index']]['id']): ?>
                                                <?php echo $this->_tpl_vars['requisitos'][$this->_sections['j']['index']]['mat_sigla']; ?>

                                                <?php endif; ?>
                                                <?php endfor; endif; ?>
                                            </td>
                                        </tr>
                                        <?php endfor; endif; ?>
                                    </tbody>
                                </table>      
                                <!--END LISTADO-->
                            </div>
                        </div>  
                        <!--  </contenido_neto> --> 
                    </div>         
                </div>
                <!-- </contenido> -->
                <!-- <ancla> -->	
                <p><iframe class="ancla" src="n.JPG" marginwidth="0" marginheight="0"   width="100%" scrolling="no" frameborder="0" height="2"  style="visibility:hidden;"></iframe></p>
                <!-- </ancla> -->		

            </div>
            <!-- </segunda_parte> -->	
           <!-- <tercera_parte> -->	
            <!--Pie-->
            <div class="pagina2"  >
                <!--
                require_once '../General/Pie.php';
                <?php 
                require_once('../General/Pie.php');
                 ?>
                -->               <table style="width: 100%">
                    <tr>
                        <td style="width: 20%">&nbsp;

                        </td>
                        <td style="width: auto; text-align: center">
                            |<a href="sdf"> </a>|<a> Tecnologia-WEB </a>|<a href="http://www.uagrm.edu.bo"> UAGRM </a>|
                        </td>
                        <td style="width: 20%; text-align: right; vertical-align: middle; color: #fff">
                            Visitas:&nbsp;&nbsp;<?php echo $this->_tpl_vars['visitas']; ?>

                        </td>
                    </tr>
                </table>
            </div><!-- /pagina2-->
        </div> <!--/body2 -->
    </body>
</html>