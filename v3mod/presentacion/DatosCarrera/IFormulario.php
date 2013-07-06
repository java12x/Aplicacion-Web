<html>
    <head>    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>
        <title>Uagrm - Ingenieria Informatica</title> 

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
                    {php}require_once('../General/indice.php');{/php}
                </div>
                <!-- </indice> -->	

                <!-- <contenido> -->
                <div class="contenido">
                    <!-- Columna 1 -->      
                    <div class="columna-1">
                        <!-- 1 CONTENIDO NETO-->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">
                                {$valores[3]} de la carrera {$carrera}</div>
                            <hr/>
                            <div class="contenido-real-texto">
                                {$valores[4]}
                            </div>
                        </div>
                        <!-- /1 CONTENIDO NETO-->     
                    </div>
                    <!-- /Columna 1 -->      
                    <!-- Columna 2 -->  
                    <div class="columna-2">
                        {php}require_once('../Noticia/LNoticia.php');{/php}
                    <!-- /Columna 2 -->  
                    </div>
                </div>


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
{php}
require_once('../General/Pie.php');
{/php}
-->
                <table style="width: 100%">
                    <tr>
                        <td style="width: 20%">&nbsp;
                            
                        </td>
                        <td style="width: auto; text-align: center">
                            |<a href="sdf"> </a>|<a> Tecnologia-WEB </a>|<a href="http://www.uagrm.edu.bo"> UAGRM </a>|
                        </td>
                        <td style="width: 20%; text-align: right; vertical-align: middle; color: #fff">
                            Visitas:&nbsp;&nbsp;{$visitas}
                        </td>
                    </tr>
                </table>
            </div><!-- /pagina2-->
        </div> <!--/body2 -->
</body>
</html>
