<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>

        <script type="text/javascript" src="../General/editor/ckeditor.js"></script>

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

                    <div align="justify" style=" background-color:#FFF; width:AUTO; height:auto; padding:15px;">
                        <!--  CONTENIDO NETO -->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">
                                Datos de la carrera {$valoresC.car_nombre}
                            </div>        
                            <div class="contenido-real-texto"> 
                                <form name="form1" action="Procesar.php?id={$id}&tipo={$valores.datc_tipo}" method="POST">           
                                    <table style="width: 80%" class="tabla_formulario">
                                        <tr class="fila0">
                                            <th style="text-align: left" colspan="2">
                                                {$valores.datc_titulo}
                                            </th>
                                        </tr>
                                        <tr class="fila1_f">
                                            <td colspan="2">
                                                <textarea name="texto" style="width: 100%">
                            {$valores.datc_texto}
                                                </textarea>
                                            </td>
                                        </tr>
                                        <tr class="fila0">
                                            <td style="text-align: center" colspan="2">
                                                <input type="hidden" name="postID" value="{$postId}"/>
                                                <input type="submit" class="boton_obscuro" value="Guardar"/>                     
                                                <input type="button" class="boton_obscuro" value="Cancelar" onClick="location='Listado.php?id={$id}'"/>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                                {literal}
                                <script type="text/javascript">
                                    CKEDITOR.replace('texto', {toolbar:'default'});
                                </script>
                                {/literal}
                            </div> <!-- contenido -neto-->
                        </div> <!-- contenido-real-->            
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
