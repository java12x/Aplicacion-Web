<form method="POST" name="demo_form">
    <input type="hidden" name="edit_mode" 
           value="{if $edit_mode}true{else}false{/if}"/>
    <table border="0" cellpadding="5" cellspacing="0">
        <tr>
            <td>Demo Text:</td>
            <td>
                {if $edit_mode}
                <input type="text" name="demo_text" size="20"
                       value="{$smarty.post.demo_text|escape}">
                {else}
                <input type="hidden" name="demo_text" 
                       value="{$smarty.post.demo_text|escape}">
                {$smarty.post.demo_text|escape}
                {/if}
            </td>
        </tr>
        <tr>
            <td>Demo Checkbox:</td>
            <td>
                {if $edit_mode}
                <input type="checkbox" name="demo_checkbox" 
                       {if $smarty.post.demo_checkbox}checked{/if}>
                       {else}
                       {if $smarty.post.demo_checkbox}
                       <input type="hidden" name="demo_checkbox" value="On">
                {/if}
                {if $smarty.post.demo_checkbox}On{else}Off{/if}
                {/if}
            </td>
        </tr>
        <tr>
            <td>Demo Radio:</td>
            <td>
                {if $edit_mode}
                <input type="radio" name="demo_radio" value="1"
                       {if $smarty.post.demo_radio == '1'}checked{/if}>1
                       <input type="radio" name="demo_radio" value="2"
                       {if $smarty.post.demo_radio == '2'}checked{/if}>2
                       <input type="radio" name="demo_radio" value="3"
                       {if $smarty.post.demo_radio == '3'}checked{/if}>3
                       {else}
                       <input type="hidden" name="demo_radio" 
                       value="{$smarty.post.demo_radio|escape}">
                {$smarty.post.demo_radio|escape}
                {/if}
            </td>
        </tr>
        <tr>
            <td>Demo Select:</td>
            <td>
                {if $edit_mode}
                <select name="demo_select" size="1">
                    {section name="demo_section" start=10 loop=100 step="10"}
                    {assign var="demo_counter"
                    value=$smarty.section.demo_section.index}
                    <option {if $smarty.post.demo_select == $demo_counter}
                        selected{/if} value="{$demo_counter}">
                        {$demo_counter}
                </option>
                {/section}
            </select>
            {else}
            <input type="hidden" name="demo_select" 
                   value="{$smarty.post.demo_select|escape}">
            {$smarty.post.demo_select|escape}
            {/if}
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
            <button type="submit" onclick="return submitDemoForm()">
                {if $edit_mode}Save{else}Edit{/if}
            </button>
        </td>
    </tr> 
</table>

</form>