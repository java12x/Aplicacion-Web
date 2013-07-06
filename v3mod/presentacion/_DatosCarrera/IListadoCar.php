<html>
    <head>

        <title>Uagrm - Ingenieria Informatica</title>  
        <link rel="shortcut icon" href="../recursos/favicon.ico">
        <link rel="stylesheet" media="all" type="text/css" href="../recursos/{$tema}"/>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <title>
        </title>      
    </head>
    <body>
    <center>     
        <br><br>
        <table border="yes" cellspacing="0" cellpadding="5">             
            <tr>
                <td style="width: 24px"></td>                
                <td style="width: 300px; text-align: center">
                    Nombre
                </td>
                <td style="width: 100px; text-align: center">
                    Activo
                </td>
            </tr>  
            {section name=i loop=$regs}
            <tr>     
                <td style="text-align: center">
                    <a href="Listado.php?id={$regs[i].id}">
                        <image alt="upd" src="../imgs/upd.png" />
                    </a>
                </td>
                <td style="text-align: left">
                    {$regs[i].car_nombre}
                </td>                    
                <td style="text-align: left">
                    {if $regs[i].car_estado}
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