<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>

        <link type="text/css" rel="stylesheet" href="../General/DatePicker/css/jquery-ui-1.8.12.custom.css"/>
        <script type="text/javascript" src="../General/DatePicker/js/jquery-1.5.1.min.js"></script>
        <script type="text/javascript" src="../General/DatePicker/js/jquery-ui-1.8.12.custom.min.js"></script>

        <link rel="stylesheet" type="text/css" media="screen" href="../General/Validador/css/screen.css" />
<!--        <script src="../General/Validador/jquery-1.6.1.min.js" type="text/javascript"></script>-->
        <script src="../General/Validador/jquery.validate.min.js" type="text/javascript"></script>
        <script src="validador.js" type="text/javascript"></script></head>

    {literal}
    <script type="text/javascript" language=javascript>
        $(function() {$("#fechanacP").datepicker(); });
    </script>
    {/literal}

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
                <div class="contenido">
                    <div style="background-color:#FFF; width:AUTO; height:auto; padding:15px;">
                        <!--  CONTENIDO NETO -->
                        <div class="contenido-real">
                            <div class="contenido-real-titulo">
                                Formulario de Datos
                            </div>

                            <div class="contenido-real-texto">      
                                <form id="form1" name="form1" action="Procesar.php?id={$id}&accion={$accion}&tipo={$tipo}" method="POST">           
                                    <table style="width: 70%" class="tabla_formulario" >  
                                        <tr class="fila0">
                                            <th colspan="2" style="text-align: left">
                                                Datos personales
                                            </th>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <span class="rSpan">Los campos marcados con (*), son requeridos.</span>
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                CI<span class="rSpan">(*)</span>
                                            </th>
                                            <td>
                                                <input type="text" name="ci" value="{$valores.per_ci}" readonly/>
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                {$regcod}<span class="rSpan">(*)</span>
                                            </th>
                                            <td style="text-align: left">
                                                <input type="text" name="registro" value="{$registro}" readonly/>
                                            </td>
                                        </tr>      
                                        <tr class="fila1_f">
                                            <th>
                                                Nombres<span class="rSpan">(*)</span>
                                            </th>
                                            <td>
                                                <input type="text" name="nombres" value="{$valores.per_nombres}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Apellidos<span class="rSpan">(*)</span>
                                            </th>
                                            <td>
                                                <input type="text" name="apellidos" value="{$valores.per_apellidos}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                G&eacute;nero
                                            </th>
                                            <td style="text-align: left">
                                                {html_radios name='genero' values=$sGenVals output=$sGenNom
                                                selected=$sGenSel separator='<br />'}
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Fecha de nacimiento<span class="rSpan">(*)</span>
                                            </th>
                                            <td>
                                                <input type="text" id="fechanacP" name="fechanac" value="{$valores.per_fechanac}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Tel&eacute;fono
                                            </th>
                                            <td>
                                                <input type="text" name="telefono" value="{$valores.per_telefono}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Tel&eacute;fono m&oacute;vil
                                            </th>
                                            <td>
                                                <input type="text" name="telmovil" value="{$valores.per_telmovil}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Email
                                            </th>
                                            <td>
                                                <input type="text" name="email" value="{$valores.per_email}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Estado
                                            </th>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr class="fila0">
                                            <th colspan="2" style="text-align: left">
                                                Datos de usuario
                                            </th>
                                        </tr>
                                        {if $accion=='UPD'}
                                        <tr class="fila1_f">
                                            <td colspan="2">
                                                <span class="rSpan">Deje la contraseña en blanco para conservar la actual.</span>
                                            </td>
                                        </tr>
                                        {/if}
                                        <tr class="fila1_f">
                                            <th>
                                                Usuario<span class="rSpan">(*)</span>
                                            </th>
                                            <td>
                                                <input type="text" name="nombreU" value="{$valoresU.usu_nombre}" />
                                            </td>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Contraseña
                                            </th>
                                            <td style="text-align: left">
                                                <input id="contraseniaU" type="password" name="contraseniaU{if $accion=='UPD'}m{/if}" />
                                            </td>
                                        </tr>
                                        {if $accion!='UPD'}
                                        <tr class="fila1_f">
                                            <th>
                                                Confirmaci&oacute;n
                                            </th>
                                            <td style="text-align: left">
                                                <input type="password" name="contraseniaU_{if $accion=='UPD'}m{/if}" />
                                            </td>
                                        </tr>
                                        {/if}
                                        <tr class="fila1_f">
                                            <th>
                                                Grupo
                                            </th>
                                            <td>
                                                {section name=i loop=$grupos}
                                                {if $grupos[i].id==$valoresU.usu_gru_id}{$grupos[i].gru_nombre}{/if}
                                                {/section}
                                            </td>
                                        </tr>
                                        <tr class="fila0">
                                            <th colspan="2" style="text-align: left">
                                                Tema de la página
                                            </th>
                                        </tr>
                                        <tr class="fila1_f">
                                            <th>
                                                Tema
                                            </th>
                                            <td>
                                                <select name="tema">
                                                    <option value="1" {if $temaU==1}selected{/if}>Tema Azul</option>
                                                    <option value="2" {if $temaU==2}selected{/if}>Tema Lila</option>
                                                    <option value="3" {if $temaU==3}selected{/if}>Tema Rojo</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr class="fila0">
                                            <td style="text-align: center" colspan="2">
                                                <input type="hidden" name="estado" value="{$estado}"/>
                                                <input type="hidden" name="grupoU" value="{$valoresU.usu_gru_id}"/>
                                                <input type="submit" class="boton_obscuro" value="Guardar"/>&nbsp;
                                            </td>
                                        </tr>
                                    </table>
                                </form>       	
                            </div> <!-- contenido -neto-->
                        </div> <!-- contenido-real-->            
                    </div>  
                    <!-- </contenido> -->
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
