{foreach $common_statistics as $group => $data}
    <table class="table table-condensed b-statistics">
        <thead>
        <tr>
            <th colspan="2">{lang key=$group}</th>
        </tr>
        </thead>
        <tbody>
            {foreach $data as $item}
                <tr>
                    <td>{$item.title}:</td>
                    <td><span class="badge">{$item.value}</span></td>
                </tr>
            {/foreach}
        </tbody>
        <tfoot>
        {foreach $data as $item}
            {if isset($item.html)}
                <tr>
                    <td colspan="2"><div class="user-list">{$item.html}</div></td>
                </tr>
            {/if}
        {/foreach}
        </tfoot>
    </table>
{/foreach}