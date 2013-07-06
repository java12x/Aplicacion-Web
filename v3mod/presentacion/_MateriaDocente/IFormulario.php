<html>
    <head>
        <title>Uagrm - Ingenieria Informatica - Formulario</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>

        {literal}
        <script type="text/javascript" language=javascript>
            $(function() {$("#fechanacP").datepicker(); });
        </script>
        {/literal}

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
                <div class="contenido" align="justify">
                    <div style="background-color:#FFF; width:AUTO; height:auto; padding:15px;">
                        <!--  contenido REAL -->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">
                                Formulario de asignaci&oacute;n de materias
                            </div>
                            <!-- contenido real texto-->
                            <div class="contenido-real-texto">      
                                <!-- start formulario-->
                                <table style="width: 80%" class="tabla_formulario">      
                                    <tr class="fila0">
                                        <th style="text-align: left" colspan="2">
                                            Docente
                                        </th>
                                    </tr>
                                    <tr class="fila1_f">
                                        <th style="width: 20%">
                                            CI
                                        </th>
                                        <td style="text-align: left">
                                            {$valores.per_ci}
                                        </td>
                                    </tr>
                                    <tr class="fila1_f">
                                        <th style="width: 20%">
                                            Nombre
                                        </th>
                                        <td style="text-align: left">
                                            {$valores.per_apellidos} {$valores.per_nombres}                        
                                        </td>
                                    </tr>  
                                </table>
                                <table style="width: 80%" class="tabla_listado" >  
                                    <tr class="fila0">
                                        <th style="text-align: left" colspan="5">
                                            Materias
                                        </th>
                                    </tr>
                                    <tr class="fila1_f">
                                        <td colspan="4" style="text-align: left">
                                            Gesti&oacute;n
                                            <select id="idGestion" name="idGestion">
                                                {section name=i loop=$gestiones}
                                                <option value="{$gestiones[i].id}" {if $gestiones[i].id==$gestion}selected{/if}>{$gestiones[i].ges_semestre}-{$gestiones[i].ges_anio}</option>
                                                {/section}
                                            </select>
                                            <input type="button" value="ver" onClick="location='Formulario.php?id={$idDoc}&gestion=' + document.getElementById('idGestion').value" class="boton_obscuro"/>
                                        </td>
                                    </tr>
                                    <tr class="fila0">
                                        <td width="24" style="width: 24px"></td>                
                                        <td width="132" style="width: 50px; text-align: center">
                                            Sigla
                                        </td>
                                        <td width="178" style="width: auto; text-align: left">
                                            Nombre
                                        </td>
                                        <td width="173" style="width: 50px; text-align: center">
                                            Semestre
                                        </td>
                                    </tr>  
                                    {section name=i loop=$regsPA}
                                    <tr {if $smarty.section.i.index mod 2 eq 0}class="fila1"{else}class="fila2"{/if}>     
                                        <td style="text-align: center">
                                            <a href="Procesar.php?idDoc={$idDoc}&id={$regsPA[i].id}&gestion={$gestion}&accion=DEL" onClick="return confirm('¿Eliminar el registro?')">
                                                <image alt="del" src="../imgs/del.png" />
                                            </a>                       
                                        </td> 
                                        <td style="text-align: center">
                                            {$regsPA[i].mat_sigla}
                                        </td>                    
                                        <td style="text-align: left">
                                            {$regsPA[i].mat_nombre}
                                        </td> 
                                        <td style="text-align: center">
                                            {$regsPA[i].mat_semestre}
                                        </td>
                                    </tr>
                                    {/section} 
                                    <tr>            
                                        <td colspan="4" style="text-align: right">
                                            <form action="Procesar.php?idDoc={$idDoc}&gestion={$gestion}&accion=ADD" method="POST">
                                                <select name="idMateria">
                                                    {section name=i loop=$materias}
                                                    <option value="{$materias[i].id}">{$materias[i].mat_sigla} - {$materias[i].mat_nombre}</option>
                                                    {/section}
                                                </select>
                                                <input type="hidden" name="postID" value="{$postId}"/>
                                                <input type="submit" value="agregar" class="boton_obscuro"/>
                                            </form>                    
                                        </td>
                                    </tr>
                                    <tr class="fila0">
                                        <td style="text-align: center" colspan="4">                        				 <input type="button" value="volver" onClick="location='Listado.php'" class="boton_obscuro"/>                    
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
