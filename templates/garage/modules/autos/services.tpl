{if !empty($categories)}
    <div class="ia-categories">
        <div class="row ia-cats">
            {foreach $categories as $category}
                <div class="col-md-4">
                    <div class="ia-cat">
                        <span class="fa fa-folder-open"></span>
                        <a href="{$core.packages.autos.url}services/{$category.alias}">{$category.title|escape}</a>
                    </div>
                </div>

                {if $category@iteration % 3 == 0 && !$category@last}
                    </div>
                    <div class="row ia-cats">
                {/if}
            {/foreach}
        </div>
    </div>

    <hr>
{/if}

{if $listings}
    <div class="ia-items">
        {foreach $listings as $listing}
            {include 'extra:autos/list-autos_services'}
        {/foreach}
    </div>

    {navigation aTotal=$pagination.total aTemplate=$pagination.url aItemsPerPage=$pagination.limit aIgnore=true}
{else}
    <div class="alert alert-info">{lang key='no_services_to_show'}</div>
{/if}