
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>

        <link rel="stylesheet" media="all" type="text/css" href="../General/OrdenarGrid/blue/style.css" />
        <script type="text/javascript" src="../General/OrdenarGrid/jquery-1.7.1.min.js"></script> 
        <script type="text/javascript" src="../General/OrdenarGrid/jquery.tablesorter.min.js"></script> 

        {literal}
        <script type="text/javascript" language=javascript>
            $(document).ready(function() 
            { 
                $("#tListado_").tablesorter({
                    headers: {0: {sorter: false}, 1: {sorter: false} } 
                }); 
            } 
        )
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
                <div class="contenido">       
                    <div style="background-color:#FFF; width:auto; height:auto; padding:15px;">
                    <!--  <contenido_neto> -->
                        <div class="contenido-real">            
                            <div class="contenido-real-titulo">
                                Listado de materias
                            </div>
                            <div class="contenido-real-texto">
                                <!--START LISTADO-->
                                {if $p_nuevo}
                                <table>
                                    <tr>
                                        <td>
                                            <a href="Formulario.php"><image src="../imgs/add.png">Nuevo</a>
                                        </td>
                                    </tr>            
                                </table>
                                {/if}
                                <table id="tListado" name="tListado" style="width: 70%" class="tabla_listado" >
                                    <thead>
                                        <tr class="fila0">
                                            {if $p_modificar}
                                            <th style="width: 24px"></th>
                                            {/if}
                                            {if $p_bajaalta}
                                            <th style="width: 24px"></th>
                                            {/if}
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
                                    </thead>
                                    <tbody>
                                        {section name=i loop=$regs}                
                                        <tr {if $smarty.section.i.index mod 2 eq 0}class="fila1"{else}class="fila2"{/if}>
                                            {if $p_modificar}
                                            <td style="text-align: center">
                                                <a href="Formulario.php?id={$regs[i].id}">
                                                    <image title="Modificar" alt="upd" src="../imgs/upd.png" />
                                                </a>
                                            </td>
                                            {/if}
                                            {if $p_bajaalta}
                                            <td style="text-align: center">
                                                {if $regs[i].mat_estado}
                                                <a href="Procesar.php?id={$regs[i].id}&accion=DEL&tipo={$tipo}">
                                                    <image title="Habilitar/Deshabilitar" alt="del" src="../imgs/check.png" />
                                                </a>
                                                {else}
                                                <a href="Procesar.php?id={$regs[i].id}&accion=ACT&tipo={$tipo}">
                                                    <image title="Habilitar/Deshabilitar" alt="del" src="../imgs/minus.png" />
                                                </a>
                                                {/if}
                                            </td>
                                            {/if}
                                            <td style="text-align: center">
                                                {$regs[i].mat_sigla}
                                            </td>                    
                                            <td style="text-align: left">
                                                {$regs[i].mat_nombre}
                                            </td> 
                                            <td style="text-align: center">
                                                {$regs[i].mat_semestre}
                                            </td>
                                        </tr>
                                        {/section}  
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
