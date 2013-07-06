<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" type="text/css" href="../General/estilo1.css" />
        <title></title>      
    </head>
    <body>
        <center>     
            <br /><br />
            <table class="reference" border="yes" cellspacing="0" cellpadding="5">
                <tr>
                    <td colspan="5">
                        <a href="Formulario.php?idPer={$idPer}"><image src="../imgs/add.png">Nuevo</a>
                    </td>
                </tr> 
                <tr>
                    <td colspan="5" style="width: 100px; text-align: left">
                        <select id="idCat" name="idCat">
                        {section name=i loop=$categorias}
                            <option value="{$categorias[i].id}" {if $categorias[i].id==$cat}selected{/if}>{$categorias[i].catf_nombre}</option>
                        {/section}
                        </select>
                        <input type="button" value="ver" onclick="location='Listado.php?id={$idPer}&cat=' + document.getElementById('idCat').value"/>
                    </td>
                </tr>                  
                <tr>
                    <th colspan="2" style="width: 48px"></th>                                    
                    <th style="width: 150px; text-align: center">
                        Fecha
                    </th>
                    <th style="width: 350px; text-align: center">
                        T&iacute;tulo
                    </th>
                    <th style="width: 100px; text-align: center">
                        Activo
                    </th>
                </tr>  
                {section name=i loop=$regs}
                <tr>                        
                    <td style="text-align: center">
                        <a href="Formulario.php?id={$regs[i].id}&idPer={$idPer}">
                            <image alt="upd" src="../imgs/upd.png" />
                        </a>
                    </td>
                    <td style="text-align: center">
                        <a href="Procesar.php?id={$regs[i].id}&accion=DEL" onclick="return confirm('¿Eliminar el registro?')">
                            <image alt="del" src="../imgs/del.png" />
                        </a>                      
                    </td>
                    <td style="text-align: left">
                        {$regs[i].temf_fecha}
                    </td>
                    <td style="text-align: left">
                        {$regs[i].temf_titulo}
                    </td>                                        
                    <td style="text-align: left">
                        {if $regs[i].temf_estado}
                            Si
                        {else}
                            No
                        {/if}
                    </td>
                </tr>
                {/section} 
            </table>            
        </center>
    </body>
</html>