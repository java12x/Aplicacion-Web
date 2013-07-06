<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Uagrm - Ingenieria Informatica</title>
		<?php require_once('../General/ITema.php');?> 
         
        <script type="text/javascript" src="../General/editor/ckeditor.js"></script>
        <link type="text/css" rel="stylesheet" href="../General/DatePicker/css/jquery-ui-1.8.12.custom.css"/>
	<script type="text/javascript" src="../General/DatePicker/js/jquery-1.5.1.min.js"></script>
	<script type="text/javascript" src="../General/DatePicker/js/jquery-ui-1.8.12.custom.min.js"></script>
        {literal}
        <script type="text/javascript" language=javascript>
            $(function() {
                $("#fecha").datepicker();
            });
	</script>
        {/literal}
    </head>
    <body>
    <center>
        <br /><br />
        <form name="form1" action="Procesar.php?id={$id}&idPer={$idPer}&accion={$accion}" method="POST">           
            <table class="formulario" cellspacing="0" cellpadding="5" width="500px">  
                <col style="width:250px">                
                <tr>
                    <td colspan="2">
                        Datos del tema
                    </td>
                </tr>
                <tr>
                    <th>
                        CI
                    </th>
                    <td style="text-align: left">
                        {$valoresP.per_ci}
                    </td>
                </tr>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <td style="text-align: left">
                        {$valoresP.per_nombres} {$valoresP.per_apellidos}
                    </td>
                </tr>  
                <tr>
                    <th>
                        Fecha
                    </th>
                    <td style="text-align: left">
                        <input type="text" id="fecha" name="fecha" value="{$valores.temf_fecha}" />
                    </td>
                </tr>
                <tr>
                    <th>
                        Categor&iacute;a
                    </th>
                    <td>
                        <select id="categoria" name="categoria">
                        {section name=i loop=$categorias}
                            <option value="{$categorias[i].id}" {if $categorias[i].id==$cat}selected{/if}>{$categorias[i].catf_nombre}</option>
                        {/section}
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>
                        T&iacute;tulo
                    </th>
                    <td style="text-align: left">
                        <input type="text" name="titulo" value="{$valores.temf_titulo}" />
                    </td>
                </tr>
                <tr>
                    <th>
                        Estado
                    </th>
                    <td style="text-align: left">
                        <label><input type="checkbox" name="estado" value="1" {if $valores.temf_estado eq "1"} checked {/if} />Activo</label>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: left" colspan="2">
                        Tema
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea name="texto" style="width: 100%">
                            {$valores.temf_texto}
                        </textarea>
                    </td>
                </tr>
            </table>
            <br/>
            <table class="formulario" cellspacing="0" cellpadding="5" width="500px">
                <tr>
                    <td style="text-align: center">                        
                        <input type="submit" value="guardar"/>
                        <input type="button" value="cancelar" onClick="history.back()"/>
                    </td>
                </tr>
            </table>
            {literal}
            <script type="text/javascript">
		CKEDITOR.replace('texto', {toolbar: 'Foro'});
            </script>
            {/literal}
        </form>
    </center>        
    </body>
</html>