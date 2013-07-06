<script type="text/javascript" src="../General/jquery.min.js"></script>   
<script type="text/javascript" src="submitform.js"></script>
<div class="contenido-real">            
    <div class="contenido-real-titulo">
        Listado de materias
    </div>
    <div class="contenido-real-texto">
        <!--START LISTADO-->
        {if $p_nuevo}
        <table>
            <tr>
                <td>
                    <a href="Formulario.php"><image src="../imgs/add.png">Nuevo</a>
                </td>
            </tr>            
        </table>
        {/if}
        <table id="tListado" name="tListado" style="width: 70%" class="tabla_listado" >
            <thead>
                <tr class="fila0">
                    {if $p_modificar}
                    <th style="width: 24px"></th>
                    {/if}
                    {if $p_bajaalta}
                    <th style="width: 24px"></th>
                    {/if}
                    <td style="width: 50px; text-align: center">
                        Sigla
                    </td>
                    <td style="width: auto; text-align: left">
                        Nombre
                    </td>
                    <td style="width: 50px; text-align: center">
                        Semestre
                    </td>
                </tr>  
            </thead>
            <tbody>
                {section name=i loop=$regs}                
                <tr {if $smarty.section.i.index mod 2 eq 0}class="fila1"{else}class="fila2"{/if}>
                    {if $p_modificar}
                    <td style="text-align: center">
                        <a href="Formulario.php?id={$regs[i].id}">
                            <image title="Modificar" alt="upd" src="../imgs/upd.png" />
                        </a>
                    </td>
                    {/if}
                    {if $p_bajaalta}
                    <td style="text-align: center">
                        <form id="f{$smarty.section.i.index}" name="f{$smarty.section.i.index}" method="post" action="Listado.php">
                            <input type="hidden" value="EST" name="accion"/>
                            <input type="hidden" value="{$regs[i].id}" name="id"/>
                            <input type="image" title="Habilitar/Deshabilitar" alt="del"
                                   {if $regs[i].mat_estado}
                                   src="../imgs/check.png" 
                                   {else}
                                   src="../imgs/minus.png"
                                   {/if}
                            onclick="return submitDemoForm('f{$smarty.section.i.index}')"/>
                        </form>
                    </td>
                    {/if}
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