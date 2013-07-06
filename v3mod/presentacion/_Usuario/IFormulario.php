<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Uagrm - Ingenieria Informatica</title> 
		<?php require_once('../General/ITema.php');?>        
    </head>
    <body>
	<div class="body2">    
	<div class="pagina0">
                 </div>
	<div class="pagina0">
    <a>|iniciar sesion|</a>
	</div>
	<div class="pagina1">
		<div class="superior" >
        </div>		
                    
        {php}
            require_once('../General/indice.php');
        {/php}	
	<div class="contenido" align="center">
        <form name="form1" action="Procesar.php?id={$valores.id}&accion={$accion}" method="POST">           
            <table class="tabla_formulario" cellspacing="0" cellpadding="0">               
                <tr class="fila0">
                    <td colspan="2">
                        Datos del grupo
                    </td>
                </tr>
                <tr class="fila1">
                    <th>
                        Nombre
                    </th>
                    <td style="text-align: left">
                        <input type="text" name="nombre" value="{$valores.gru_nombre}" />
                    </td>
                </tr>
                <tr class="fila1">
                    <th>
                        Descripci&oacute;n
                    </th>
                    <td style="text-align: left">
                        <input type="text" name="descripcion" value="{$valores.gru_descripcion}" />
                    </td>
                </tr>
                <tr class="fila1">
                    <th>
                        Tipo
                    </th>
                    <td style="text-align: left">
                        <select name="tipo">
                            <option value="1" {if $valores.gru_tipo==1}selected{/if}>Administrativo</option>
                            <option value="2" {if $valores.gru_tipo==2}selected{/if}>Docente</option>
                            <option value="3" {if $valores.gru_tipo==3}selected{/if}>Estudiante</option>
                        </select>
                    </td>
                </tr>
                <tr class="fila1">
                    <th>
                        Estado
                    </th>
                    <td style="text-align: left">
                        <label><input type="checkbox" name="estado" value="1" {if $valores.gru_estado eq "1"} checked {/if} />Activo</label>
                    </td>
                </tr>
                <tr class="fila0">
                    <td style="text-align: center">                        
                        <input type="submit" style="color:#FFFFFF; background-color:#2D5B8A; border-bottom-style:none;" value="Guardar"/>
                    </td>
                    <td style="text-align: center">                        
                        <input type="button" style="color:#FFFFFF; background-color:#2D5B8A; border-bottom-style:none;"  value="Cancelar" onClick="history.back()"/>
                    </td>
                </tr>
            </table>
        </form>
	  </div>
	
<!-- <ancla> -->	
<p><iframe class="ancla" src="n.JPG" marginwidth="0" marginheight="0"   width="100%" scrolling="no" frameborder="0" height="2"  style="visibility:hidden;"></iframe></p>
<!-- </ancla> -->		
</div><!-- /pagina1 -->           
<!--Pie-->
<div class="pagina2"  >
<!--
require_once '../General/Pie.php';
{php}
require_once('../General/Pie.php');
{/php}
-->
    
	   |<a href="sdf"> Grupo20 </a>|<a> Tecnologia-WEB </a>|<a href="http://www.uagrm.edu.bo"> UAGRM 2013 </a>|
       
	</div>
</div>

    </body>
</html>
