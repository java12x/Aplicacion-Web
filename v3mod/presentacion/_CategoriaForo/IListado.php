<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
		<title>Uagrm - Ingenieria Informatica</title>  
		<link rel="shortcut icon" href="../recursos/favicon.ico">
<link rel="stylesheet" media="all" type="text/css" href="../recursos/style-fhk-lila.css"/>
        
    </head>
    <body>
        <center>     
            <br><br>
            <table border="yes" cellspacing="0" cellpadding="5">
                <tr>
                    <td colspan="6">
                        <a href="Formulario.php"><image src="../imgs/add.png">Nuevo</a>
                    </td>
                </tr>                
                <tr>
                    <td style="width: 48px" colspan="2"></td>                
                    <td style="width: 100px; text-align: center">
                        Nombre
                    </td>
                    <td style="width: 250px; text-align: center">
                        Descripci&oacute;n
                    </td>
                </tr>  
                {section name=i loop=$regs}
                <tr>     
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
                    <td style="text-align: left">
                        {$regs[i].catf_nombre}
                    </td> 
                    <td style="text-align: left">
                        {$regs[i].catf_descripcion}
                    </td>
                </tr>
                {/section}              
            </table>
        </center>
    </body>
</html>