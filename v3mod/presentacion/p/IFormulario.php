<script type="text/javascript" src="../General/jquery.min.js"></script>   
<script type="text/javascript" src="submitform.js"></script>
<div class="contenido-real-titulo">
    Formulario de Materia
</div>
<!-- contenido real texto-->
<div class="contenido-real-texto">      
    <!-- start formulario-->
    <form id="form1" name="form1" action="Procesar.php?id={$valores.id}&accion={$accion}" method="POST">           
        <table style="width: 50%" class="tabla_formulario">              
            <tr class="fila0">
                <th style="text-align: left" colspan="2">
                    Datos de Materia
                </th>
            </tr>
            <tr class="fila_f">
                <td style="text-align: left" colspan="2">
                    <span class="rSpan">Los campos marcados con (*), son requeridos.</span>
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Sigla<span class="rSpan">(*)</span>
                </th>
                <td style="text-align: left">
                    <input type="text" name="sigla" value="{$valores.mat_sigla}" maxlength="8" />
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Nombre<span class="rSpan">(*)</span>
                </th>
                <td style="text-align: left">
                    <input type="text" name="nombre" value="{$valores.mat_nombre}" />
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Semestre<span class="rSpan">(*)</span>
                </th>
                <td style="text-align: left">
                    <input type="text" name="semestre" value="{$valores.mat_semestre}" />
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Horas te&oacute;ricas<span class="rSpan">(*)</span>
                </th>
                <td style="text-align: left">
                    <input type="text" name="hteoricas" value="{$valores.mat_hteoricas}" />
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Horas pr&aacute;cticas<span class="rSpan">(*)</span>
                </th>
                <td style="text-align: left">
                    <input type="text" name="hpracticas" value="{$valores.mat_hpracticas}" />
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Horas semestre<span class="rSpan">(*)</span>
                </th>
                <td style="text-align: left">
                    <input type="text" name="hsemestre" value="{$valores.mat_hsemestre}" />
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Cr&eacute;ditos<span class="rSpan">(*)</span>
                </th>
                <td style="text-align: left">
                    <input type="text" name="creditos" value="{$valores.mat_creditos}" />
                </td>
            </tr>
            <tr class="fila1_f">
                <th>
                    Estado
                </th>
                <td style="text-align: left">
                    <label><input type="checkbox" name="estado" value="1" {if $valores.mat_estado eq "1"} checked {/if} />Habilitada</label>
                </td>
            </tr>
            <tr class="fila0">
                <td style="text-align: center" colspan="2">
                    <input type="hidden" name="postID" value="{$postId}"/>
                    <input type="submit" class="boton_obscuro" value="Guardar" onclick="return submitDemoForm()"/>&nbsp;
                    <input type="button" class="boton_obscuro"  value="Cancelar" onClick="history.back()"/>
                </td>
            </tr>
        </table>
    </form>
    <!-- end formulario-->       	
</div> 
<!-- /contenido real texto-->
