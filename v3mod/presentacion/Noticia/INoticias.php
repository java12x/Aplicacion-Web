<html>
    <head>    
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
                    {php}require_once('../General/indice.php');{/php}
                </div>
                <!-- </indice> -->	

     <!-- <contenido> -->
                <div class="contenido">
                    <!-- Columna 1 -->      
                    <div class="columna-1">
                        <!-- 1 CONTENIDO NETO-->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">NOTICIAS</div>
                            {section name=i loop=$regs}
                            <a name="n{$regs[i].id}"></a>
                            <hr/>
                            <br/>
                            <div class="contenido-real-titulo">{$regs[i].not_titulo}</div>
                            <div class="contenido-real-texto">
                                <span class="rSpan">{$regs[i].not_fecha}</span>
                                {$regs[i].not_texto_}
                            </div>
                            {/section}
                            <hr/>
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


                <p>
                    <iframe  src="n.JPG" marginwidth="0" marginheight="0"   width="90%" scrolling="no" frameborder="0" height="3px"  style="visibility:hidden;"></iframe>
                </p>
            </div>
            <!--Pie-->
            <div class="pagina2"  >
                <table style="width: 100%">
                    <tr>
                        <td style="width: 20%">&nbsp;
                        </td>
                        <td style="width: auto; text-align: center">
                            |<a href="sdf">  </a>|<a> Tecnologia-WEB </a>|<a href="http://www.uagrm.edu.bo"> UAGRM </a>|
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
        </div>
    </div>
</body>
</html>
