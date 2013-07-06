<html>
    	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Uagrm - Ingenieria Informatica</title>  
		<link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/style-fhk-lila.css"/>   
    </head>
    <body>
    <center>
        <br /><br />
        <form name="form1" action="Procesar.php?id={$valores.id}&accion={$accion}" method="POST">           
            <table class="formulario" cellspacing="0" cellpadding="5" width="500px">  
                <col style="width:250px" />
                <tr>
                    <td colspan="2">
                        Datos de categor&iacute;a
                    </td>
                </tr>
                <tr>
                    <th>
                        Nombre
                    </th>
                    <td style="text-align: left">
                        <input type="text" name="nombre" value="{$valores.catf_nombre}" />
                    </td>
                </tr>
                <tr>
                    <th>
                        Descripci&oacute;n
                    </th>
                    <td style="text-align: left">
                        <input type="text" name="descripcion" value="{$valores.catf_descripcion}" />
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
        </form>
    </center>        
    </body>
</html>