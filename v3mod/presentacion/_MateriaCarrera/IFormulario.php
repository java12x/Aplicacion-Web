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
                                Materias de la carrera {$valoresC.car_nombre}
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
                                    {if $id != ""}
                                    <tr>
                                        <td style="text-align: center">                                
                                            <a href="Procesar.php?id={$id}&idCarrera={$carrera}&accion=DEL" onClick="return confirm('¿Eliminar el registro?')">
                                                <image alt="del" src="../imgs/del.png" />
                                            </a>                       
                                        </td> 
                                        <td>
                                            {$valores.mat_sigla}
                                        </td>
                                        <td>
                                            {$valores.mat_nombre}
                                        </td>
                                        <td>
                                            {$valores.mat_semestre}
                                        </td>
                                    </tr>
                                    {/if}
                                    {if $id==""}
                                    <tr class="fila1_f">
                                        <td colspan="4" style="text-align: right">
                                            <form action="Procesar.php?idCarrera={$carrera}&accion=ADD" method="POST">
                                                <select name="idMateria">
                                                    {section name=i loop=$materias}
                                                    <option value="{$materias[i].id}">{$materias[i].mat_sigla} - {$materias[i].mat_nombre}</option>
                                                    {/section}
                                                </select>
                                                <input type="hidden" name="postID" value="{$postId}"/>
                                                <input type="submit" value="seleccionar" class="boton_obscuro"/>
                                            </form>    
                                        </td>
                                    </tr>
                                    {/if}
                                </table>
                                <br/>
                                {if $id!=""}
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
                                    {if $id != ""}
                                    {section name=i loop=$requisitos}
                                    <tr {if $smarty.section.i.index mod 2 eq 0}class="fila1"{else}class="fila2"{/if}>
                                        <td style="text-align: center">
                                            <a href="Procesar.php?id={$id}&idReq={$requisitos[i].id}&idCarrera={$carrera}&accion=DELR" onClick="return confirm('¿Eliminar el registro?')">
                                                <image alt="del" src="../imgs/del.png" />
                                            </a>                       
                                        </td> 
                                        <td>
                                            {$requisitos[i].mat_sigla}
                                        </td>
                                        <td>
                                            {$requisitos[i].mat_nombre}
                                        </td>
                                        <td>
                                            {$requisitos[i].mat_semestre}
                                        </td>
                                    </tr>
                                    {/section}
                                    {/if}
                                    <tr class="fila1_f">
                                        <td colspan="4" style="text-align: right">
                                            <form action="Procesar.php?id={$id}&idCarrera={$carrera}&accion=ADDR" method="POST">
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
                                </table>
                                {/if}
                                <table class="formulario" cellspacing="0" cellpadding="5" width="80%">
                                    <tr>
                                        <td style="text-align: center">                        
                                            <input type="button" value="Volver" onClick="location='Listado.php?id={$carrera}'" class="boton_obscuro"/>                    
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
