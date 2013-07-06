<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        <title>Uagrm - Ingenieria Informatica</title>
		<link rel="shortcut icon" href="../recursos/favicon.ico">
<link rel="stylesheet" media="all" type="text/css" href="../recursos/style-fhk-lila.css"/>
             
    </head>
    <body>
        <center>     
            <br><br>
            <table border="yes" cellspacing="0" cellpadding="5">               
                <tr>
                    <td style="width: 24px"></td>                
                    <td style="width: 100px; text-align: center">
                        CI
                    </td>
                    <td style="width: 250px; text-align: center">
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
                    <td style="text-align: right">
                        {$regs[i].per_ci}
                    </td>                    
                    <td style="text-align: left">
                        {$regs[i].per_apellidos} {$regs[i].per_nombres}                 
                    </td> 
                    <td style="text-align: left">
                        {if $regs[i].per_estado}
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