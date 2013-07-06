<html>
    <head>    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>Uagrm - Ingenieria Informatica</title> 
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <?php
        session_start();
        if (isset($_SESSION['tema']))
            echo '<link rel="stylesheet" media="all" type="text/css" href="../recursos/' . $_SESSION['tema'] . '"/>';
        else
            echo '<link rel="stylesheet" media="all" type="text/css" href="../recursos/style-fhk.css"/>';
        ?>
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

                    <div class="overlay">
                    </div>
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
                    <?php require_once('../General/indice.php'); ?>
                </div>
                <!-- </indice> -->	

                        <!-- <contenido> -->
                <div class="contenido">
                    <!-- Columna 1 -->      
                    <div class="columna-1">
                        <!-- 1 CONTENIDO NETO-->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo"></div>
                            <div class="contenido-real-texto" style="text-align:center;">
                                <img src="../recursos/modulos.jpg" width="200" height="130"alt="escudo"/>
                                <p style=" font-size:11px;font-weight: bold; color:#004080;">Direcc&oacute;n: M&oacute;dulos. Av. Bush entre 2do y tercer anillo.<br>
                                    Edif. Facultad de Tecnolog&iacute;a, 2do piso.<br>
                                    Telefax: 3555668<br>
                                    e-mail: informatica.scz.uagrm@gmail.com<br>
                                    Santa Cruz de la Sierra, Bolivia.<br>
                                </p>
                            </div>
                        </div>
                        <!-- /1 CONTENIDO NETO-->     
                    </div>
                    <!-- /Columna 1 -->      
                    <!-- Columna 2 -->  
                    <div class="columna-2">
                        <?php require_once('../Noticia/LNoticia.php'); ?>
                        <!-- /Columna 2 -->  
                    </div>
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
                            |<a href="sdf"></a>|<a> Tecnologia-WEB </a>|<a href="http://www.uagrm.edu.bo"> UAGRM </a>|
                        </td>
                        <td style="width: 20%; text-align: right">
                            <table style="width: 100%; color: #fff">
                                <tr>
                                    <td style="text-align: right">
                                        Visitas:
                                    </td>
                                    <td>
                                        <?php
                                        require_once '../General/Contador.php';
                                        echo Contador::obtValorImgDeCod(101);
                                        ?>
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
