<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Uagrm - Ingenieria Informatica</title> 
		<link rel="shortcut icon" href="../recursos/favicon.ico">
<link rel="stylesheet" media="all" type="text/css" href="../recursos/style-fhk-lila.css"/>  
   
    </head>
    <body>
	<div class="body2">
	<div class="pagina0"></div>
	<div class="pagina1">
		<div class="superior" >
        </div>		
		  
        {php}
            require_once('../General/indice.php');
        {/php}
	  
	  <div class="contenido" align="center">
            <table style="width: 500px" class="tabla_listado" cellspacing="0" cellpadding="0">
                <tr>
                    <td colspan="6">
                        <a href="Formulario.php"><image src="../imgs/add.png">Nuevo</a>
                    </td>
                </tr>                
                <tr class="fila0">
                    <td style="width: 48px" colspan="2"></td>                
                    <td style="width: 200px; text-align: center">
                        Usuario
                    </td>
                    <td style="width: 150px; text-align: left">
                        Tipo
                    </td>
                    <td style="width: 150px; text-align: center">
                        Activo
                    </td>
                </tr>  
                {section name=i loop=$regs}
                <tr {if $smarty.section.i.index mod 2 eq 0}class="fila1"{else}class="fila2"{/if}>
                    <td style="text-align: center">
                        <a href="Formulario.php?id={$regs[i].id}">
                            <image alt="upd" src="../imgs/upd.png" />
                        </a>
                    </td>
                    <td style="text-align: center">
                        <a href="Procesar.php?id={$regs[i].id}&accion=DEL" onClick="return confirm('¿Eliminar el registro?')">
                            <image alt="del" src="../imgs/del.png" />
                        </a>                      
                    </td> 
                    <td style="text-align: center">
                        {$regs[i].gru_nombre}
                    </td>                    
                    <td style="text-align: left">
                        {if $regs[i].gru_tipo==1}
                            Administrativo
                        {elseif $regs[i].gru_tipo==2}
                            Docente
                        {else}
                            Estudiante
                        {/if}
                    </td> 
                    <td style="text-align: center">
                        {if $regs[i].gru_estado}
                            Si
                        {else}
                            No
                        {/if}
                    </td>
                </tr>
                {/section}              
            </table>
        </center>
        </div>
        </div></div>
    </body>
</html>