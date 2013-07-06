<html>
    <head>
        <title>Uagrm - Ingenieria Informatica - Formulario</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>

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
					{php}require_once('../General/indiceH.php');{/php}

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
                    {php}
                    require_once('../General/indice.php');
                    {/php}	         	
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
                                <form id="form1" name="form1" action="Procesar.php?id={$valores.id}&accion={$accion}" method="POST">           
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
                                                <input type="text" name="nombre" value="{$valores.gru_nombre}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Descripci&oacute;n
                                            </th>
                                            <td style="text-align: left">
                                                <input type="text" name="descripcion" value="{$valores.gru_descripcion}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Tipo<span class="rSpan">(*)</span>
                                            </th>
                                            <td style="text-align: left">
                                                {if $accion=='UPD'}
                                                <input type="hidden" name="tipo"value="{$valores.gru_tipo}"/>
                                                <label>
                                                    {if $valores.gru_tipo==1}
                                                    Administrativo
                                                    {elseif $valores.gru_tipo==2}
                                                    Docente
                                                    {elseif $valores.gru_tipo==3}
                                                    Estudiante
                                                    {/if}
                                                </label>
                                                {else}
                                                <select name="tipo">
                                                    <option value="1" {if $valores.gru_tipo==1}selected{/if}>Administrativo</option>
                                                    <option value="2" {if $valores.gru_tipo==2}selected{/if}>Docente</option>
                                                    <option value="3" {if $valores.gru_tipo==3}selected{/if}>Estudiante</option>
                                                </select>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Estado
                                            </th>
                                            <td style="text-align: left">
                                                <label><input type="checkbox" name="estado" value="1" {if $valores.gru_estado eq "1"} checked {/if} />Habilitado</label>
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
                                                {html_checkboxes name="o1" options=$o1v selected=$o1s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Docentes
                                            </td>
                                            <td>
                                                {html_checkboxes name="o2" options=$o2v selected=$o2s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Estudiantes
                                            </td>
                                            <td>
                                                {html_checkboxes name="o3" options=$o3v selected=$o3s separator="<br />"}
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
                                                {html_checkboxes name="o4" options=$o4v selected=$o4s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Carreras
                                            </td>
                                            <td>
                                                {html_checkboxes name="o5" options=$o5v selected=$o5s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Datos de carrera
                                            </td>
                                            <td>
                                                {html_checkboxes name="o6" options=$o6v selected=$o6s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Materias
                                            </td>
                                            <td>
                                                {html_checkboxes name="o7" options=$o7v selected=$o7s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Planes de estudio
                                            </td>
                                            <td>
                                                {html_checkboxes name="o8" options=$o8v selected=$o8s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Asignar materias
                                            </td>
                                            <td>
                                                {html_checkboxes name="o9" options=$o9v selected=$o9s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Planes de avance
                                            </td>
                                            <td>
                                                {html_checkboxes name="o10" options=$o10v selected=$o10s separator="<br />"}
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
                                                {html_checkboxes name="o11" options=$o11v selected=$o11s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Curriculums
                                            </td>
                                            <td>
                                                {html_checkboxes name="o12" options=$o12v selected=$o12s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila1">
                                            <td style="text-align: right">
                                                Noticias
                                            </td>
                                            <td>
                                                {html_checkboxes name="o13" options=$o13v selected=$o13s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila2">
                                            <td style="text-align: right">
                                                Grupos
                                            </td>
                                            <td>
                                                {html_checkboxes name="o14" options=$o14v selected=$o14s separator="<br />"}
                                            </td>
                                        </tr>
                                        <tr class="fila0">
                                            <td style="text-align: center" colspan="2">                        
                                                <input type="hidden" name="postID" value="{$postId}"/>
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
                                        {$visitas}
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
