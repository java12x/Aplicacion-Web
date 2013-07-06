<html>
    <head>
        <title>Uagrm - Ingenieria Informatica - Formulario</title>        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>

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
                <div class="contenido" align="center">
                    <div style="background-color:#FFF; width:AUTO; height:auto; padding:15px;">
                        <!--  CONTENIDO NETO -->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">
                                Formulario de Curriculum
                            </div>

                            <div class="contenido-real-texto">      
                                <form name="form1" action="Procesar.php?idCur={$idCur}&idSec={$idSec}&idDoc={$idDoc}" method="POST">           
                                    <table style="width: 100%" class="tabla_formulario">
                                        <tr class="fila0">
                                            <th colspan="2" style="text-align: left">
                                                Datos de curr&iacute;culo
                                            </th>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                CI
                                            </th>
                                            <td style="text-align: left">
                                                {$valoresD.per_ci}
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Nombre
                                            </th>
                                            <td style="text-align: left">
                                                {$valoresD.per_apellidos} {$valoresD.per_nombres}                        
                                            </td>
                                        </tr>  
                                        <tr class="fila1_f">
                                            <td style="text-align: center" colspan="2">
                                                <br/><hr/><br/>
                                            {$texto}
                                            </td>
                                        </tr>
                                        <tr class="fila0">
                                            <td style="text-align: center" colspan="2">
                                                <input type="button" class="boton_obscuro" value="Volver" onClick="history.back()"/>
                                            </td>
                                        </tr>
                                    </table>
                                </form>        
                            </div> 
                            <!-- contenido -neto-->
                        </div> 
                        <!-- contenido-real-->            
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
                            |<a href="sdf"> </a>|<a> Tecnologia-WEB </a>|<a href="http://www.uagrm.edu.bo"> UAGRM </a>|
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
