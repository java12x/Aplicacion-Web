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
            <div style="background-color:#FFF; width:auto; height:auto; padding:15px;"><!--  <contenido_neto> -->
                        <div class="contenido-real">            
                            <div class="contenido-real-titulo">
                                Listado de materias
                            </div>
                            <div class="contenido-real-texto">
                                <!--START LISTADO-->
                                <table style="width: 80%" class="tabla_listado" >
                                    <tr>
                                        <td style="width: 100px; text-align: left">
                                            Gestion 
                                            <select id="idMateria" name="idMateria">
                                                {section name=i loop=$gestiones}
                                                <option value="{$gestiones[i].id}" {if $gestiones[i].id==$gestion}selected{/if}>{$gestiones[i].ges_semestre}-{$gestiones[i].ges_anio}</option>
                                                {/section}
                                            </select>
                                            <input type="button" value="ver" onClick="location='Listado.php?id={$idDoc}&gestion=' + document.getElementById('idMateria').value"/>
                                        </td>
                                    </tr> 
                                </table>
                                <table id="tListado" style="width: 80%" class="tabla_listado" >   
                                    <thead>
                                        <tr class="fila0">
                                            <th style="width: 24px"></th>                
                                            <th style="width: 50px; text-align: center">
                                                Sigla
                                            </th>
                                            <th style="width: auto; text-align: left">
                                                Nombre
                                            </th>
                                            <th style="width: 50px; text-align: center">
                                                Semestre
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {section name=i loop=$regs}
                                        <tr {if $smarty.section.i.index mod 2 eq 0}class="fila1"{else}class="fila2"{/if}>                        
                                            <td style="text-align: center">
                                                <a href="Formulario.php?id={$regs[i].id}&gestion={$gestion}">
                                                    <image title="Ver" alt="upd" src="../imgs/table.png" />
                                                </a>
                                            </td>
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
