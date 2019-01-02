{if 'mainmenu' == $position}
    {ia_menu menus=$menu.contents class="b-menu {$menu.classname}"}
{elseif 'inventory' == $position}
    {ia_menu menus=$menu.contents class="nav-inventory hidden-sm hidden-xs pull-right {$menu.classname}"}
{elseif 'account' == $position}
    {if 'account' == $menu.name && $member && $core.config.members_enabled}
        <ul class="b-nav__account">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    {ia_image file=$member.avatar title=$member.fullname|default:$member.username class='img-circle' gravatar=true email=$member.email type='thumbnail'}
                    {$member.fullname|default:$member.username}
                    <span class="caret"></span>
                </a>
                {ia_hooker name='smartyFrontInsideAccountBox'}
                {ia_menu menus=$menu.contents class='dropdown-menu' loginout=true}
            </li>
            {access object='admin_access'}
                <li><a rel="nofollow" href="{$smarty.const.IA_ADMIN_URL}" target="_blank" title="{lang key='admin_dashboard'}"><span class="fe fe-command"></span><span class="hidden-lg"> {lang key='admin_dashboard'}</span></a></li>
            {/access}
        </ul>
    {else}
        <ul class="b-nav__account">
            <li{if 'login' == $core.page.name} class="active"{/if}><a href="{$smarty.const.IA_URL}login/"><span class="fe fe-head"></span> {lang key='login'}</a></li>
            <li{if 'member_registration' == $core.page.name} class="active"{/if}><a href="{$smarty.const.IA_URL}registration/">{lang key='register'}</a></li>
        </ul>
    {/if}
{elseif in_array($position, array('left', 'right', 'user1', 'user2', 'top'))}
    {if !empty($menu.contents[0]) && 'account' != $menu.name}
        {ia_block header=$menu.header title=$menu.title movable=true id=$menu.id name=$menu.name collapsible=$menu.collapsible classname=$menu.classname}
            {ia_menu menus=$menu.contents class="list-group {$menu.classname}"}
        {/ia_block}
    {/if}
{elseif 'copyright' == $position}
    {ia_menu menus=$menu.contents class="nav-footer {$menu.classname}"}
{else}
    <!--__ms_{$menu.id}-->
    {if $menu.header || isset($manageMode)}
        <div class="nav-menu-header {$menu.classname}">{$menu.title|escape}</div>
    {else}
        <div class="menu {$menu.classname}">
    {/if}

    <!--__ms_c_{$menu.id}-->
    {ia_menu menus=$menu.contents class='nav-menu'}
    <!--__me_c_{$menu.id}-->

    {if $menu.header || isset($manageMode)}
    {else}
        </div>
    {/if}
    <!--__me_{$menu.id}-->
{/if}