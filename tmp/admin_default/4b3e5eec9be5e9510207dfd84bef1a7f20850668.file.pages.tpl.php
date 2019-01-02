<?php /* Smarty version Smarty-3.1.19, created on 2019-01-02 00:02:12
         compiled from "/var/www/html/subrion/admin/templates/default/pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3022664505c236061867877-37640152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b3e5eec9be5e9510207dfd84bef1a7f20850668' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/pages.tpl',
      1 => 1546404033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3022664505c236061867877-37640152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c236061bdf5c2_22068488',
  'variables' => 
  array (
    'item' => 0,
    'pageAction' => 0,
    'pagesGroup' => 0,
    'pageGroup' => 0,
    'pageId' => 0,
    'parentPageId' => 0,
    'pageTitle' => 0,
    'extensions' => 0,
    'extension' => 0,
    'custom_url' => 0,
    'isHomePage' => 0,
    'homePageTitle' => 0,
    'menus' => 0,
    'menu' => 0,
    'menuItem' => 0,
    'selectedMenus' => 0,
    'core' => 0,
    'metaTitles' => 0,
    'iso' => 0,
    'language' => 0,
    'metaDescription' => 0,
    'metaKeywords' => 0,
    'title' => 0,
    'content' => 0,
    'page_cust_content_mine' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236061bdf5c2_22068488')) {function content_5c236061bdf5c2_22068488($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radio_switcher')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.html_radio_switcher.php';
if (!is_callable('smarty_modifier_replace')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.replace.php';
?><form method="post" id="page_form" class="sap-form form-horizontal">
    <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

    <input type="hidden" name="language" id="js-active-language">
    <input type="hidden" name="module" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['module'], ENT_QUOTES, 'UTF-8', true);?>
">

    <div class="wrap-list">
        <div class="wrap-group">
            <div class="wrap-group-heading"><?php echo iaSmarty::lang(array('key'=>'options'),$_smarty_tpl);?>
</div>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'name'),$_smarty_tpl);?>
</label>
                <div class="col col-lg-4">
                    <input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="input-name"<?php if (iaCore::ACTION_EDIT==$_smarty_tpl->tpl_vars['pageAction']->value) {?> readonly<?php }?>>
                    <?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?><p class="help-block"><?php echo iaSmarty::lang(array('key'=>'unique_name'),$_smarty_tpl);?>
</p><?php }?>
                </div>
            </div>

            <?php if (!$_smarty_tpl->tpl_vars['item']->value['service']&&!$_smarty_tpl->tpl_vars['item']->value['readonly']) {?>
                <div class="row js-local-url-field">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'parent'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-4">
                        <select name="parent_id" id="input-parent">
                            <option value="0"><?php echo iaSmarty::lang(array('key'=>'_no_parent_page_'),$_smarty_tpl);?>
</option>
                            <?php  $_smarty_tpl->tpl_vars['pageGroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageGroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageGroup']->key => $_smarty_tpl->tpl_vars['pageGroup']->value) {
$_smarty_tpl->tpl_vars['pageGroup']->_loop = true;
?>
                                <optgroup label="<?php echo $_smarty_tpl->tpl_vars['pageGroup']->value['title'];?>
">
                                    <?php  $_smarty_tpl->tpl_vars['pageTitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pageTitle']->_loop = false;
 $_smarty_tpl->tpl_vars['pageId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pageGroup']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pageTitle']->key => $_smarty_tpl->tpl_vars['pageTitle']->value) {
$_smarty_tpl->tpl_vars['pageTitle']->_loop = true;
 $_smarty_tpl->tpl_vars['pageId']->value = $_smarty_tpl->tpl_vars['pageTitle']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['pageId']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['parentPageId']->value==$_smarty_tpl->tpl_vars['pageId']->value) {?> selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageTitle']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <?php } ?>
                                </optgroup>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row" id="js-field-remote-url" style="display: none;">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'page_external_url'),$_smarty_tpl);?>
</label>
                    <div class="col col-lg-4">
                        <input type="text" name="custom_url" id="input-custom-url" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom_url'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['custom_url'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                    </div>
                </div>

                <div class="row js-local-url-field">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'custom_url'),$_smarty_tpl);?>
</label>
                    <div class="col col-lg-4">
                        <div class="input-group">
                            <input type="text" name="alias" id="input-alias" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['alias'], ENT_QUOTES, 'UTF-8', true);?>
">
                            <input type="hidden" name="extension" value="<?php if ($_smarty_tpl->tpl_vars['item']->value['extension']) {?>.<?php echo $_smarty_tpl->tpl_vars['item']->value['extension'];?>
<?php } else { ?>/<?php }?>">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <?php if (empty($_smarty_tpl->tpl_vars['item']->value['extension'])) {?><?php echo iaSmarty::lang(array('key'=>'no_extension'),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['item']->value['extension'];?>
<?php }?>
                                    <span class="caret"></span>
                                </button>
                                <ul id="js-page-extension-list" class="dropdown-menu pull-right">
                                    <li<?php if (empty($_smarty_tpl->tpl_vars['item']->value['extension'])) {?> class="active"<?php }?>><a href="#" data-extension="/"><?php echo iaSmarty::lang(array('key'=>'no_extension'),$_smarty_tpl);?>
</a></li>
                                    <li class="divider"></li>
                                    <?php  $_smarty_tpl->tpl_vars['extension'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['extension']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['extensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['extension']->key => $_smarty_tpl->tpl_vars['extension']->value) {
$_smarty_tpl->tpl_vars['extension']->_loop = true;
?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['item']->value['extension']==$_smarty_tpl->tpl_vars['extension']->value) {?> class="active"<?php }?>><a href="#" data-extension=".<?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['extension']->value;?>
</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <p id="js-alias-placeholder" class="help-block"><?php echo iaSmarty::lang(array('key'=>'page_url_will_be'),$_smarty_tpl);?>
: <span class="text-danger"></span></p>
                    </div>
                </div>

                <div class="row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'external_url'),$_smarty_tpl);?>
</label>
                    <div class="col col-lg-4">
                        <?php if (isset($_smarty_tpl->tpl_vars['item']->value['custom_url'])&&$_smarty_tpl->tpl_vars['item']->value['custom_url']!=''||isset($_POST['unique'])&&$_POST['unique']==1) {?>
                            <?php $_smarty_tpl->tpl_vars['custom_url'] = new Smarty_variable(1, null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['custom_url'] = new Smarty_variable(0, null, 0);?>
                        <?php }?>
                        <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['custom_url']->value,'name'=>'unique'),$_smarty_tpl);?>

                    </div>
                </div>

                <div class="row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'no_follow_url'),$_smarty_tpl);?>
</label>
                    <div class="col col-lg-4">
                        <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['nofollow'],'name'=>'nofollow'),$_smarty_tpl);?>

                    </div>
                </div>

                <div class="row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'open_in_new_tab'),$_smarty_tpl);?>
</label>
                    <div class="col col-lg-4">
                        <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['new_window'],'name'=>'new_window'),$_smarty_tpl);?>

                    </div>
                </div>

                <div class="row js-local-url-field">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
</label>
                    <div class="col col-lg-4">
                        <input type="text" name="passw" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['passw'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['passw'], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (isset($_POST['passw'])) {?><?php echo htmlspecialchars($_POST['passw'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                    </div>
                </div>
            <?php } else { ?>
                <input type="hidden" value="1" name="service">
            <?php }?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>'pages','action'=>'home')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>'pages','action'=>'home'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'use_as_home_page'),$_smarty_tpl);?>
</label>
                <div class="col col-lg-4">
                    <?php if ($_smarty_tpl->tpl_vars['isHomePage']->value) {?>
                        <div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'already_home_page'),$_smarty_tpl);?>
</div>
                    <?php } else { ?>
                        <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['isHomePage']->value,'name'=>'home_page'),$_smarty_tpl);?>

                        <p class="help-block"><?php echo iaSmarty::lang(array('key'=>'current_home_page'),$_smarty_tpl);?>
: <span class="text-danger"><?php echo $_smarty_tpl->tpl_vars['homePageTitle']->value;?>
</span></p>
                    <?php }?>
                </div>
            </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>'pages','action'=>'home'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>'menus','action'=>iaCore::ACTION_ADD)); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>'menus','action'=>iaCore::ACTION_ADD), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <div class="row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'show_menus'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-4">
                        <ul class="nav nav-tabs">
                            <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
                                <?php if ($_smarty_tpl->tpl_vars['menu']->value['items']) {?>
                                    <li<?php if ($_smarty_tpl->tpl_vars['menu']->iteration==1) {?> class="active"<?php }?>><a href="#tab-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['menu']->value['title'],' ','');?>
" data-toggle="tab"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menu']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                                <?php }?>
                            <?php } ?>
                        </ul>

                        <div class="tab-content">
                            <?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['menu']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['menu']->iteration++;
?>
                                <?php if ($_smarty_tpl->tpl_vars['menu']->value['items']) {?>
                                    <div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['menu']->iteration==1) {?> active<?php }?>" id="tab-<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['menu']->value['title'],' ','');?>
">
                                        <?php  $_smarty_tpl->tpl_vars['menuItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menuItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menuItem']->key => $_smarty_tpl->tpl_vars['menuItem']->value) {
$_smarty_tpl->tpl_vars['menuItem']->_loop = true;
?>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="menus[]" value="<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['id'];?>
" id="p_<?php echo $_smarty_tpl->tpl_vars['menuItem']->value['id'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['menuItem']->value['id'],$_smarty_tpl->tpl_vars['selectedMenus']->value)) {?> checked<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['menuItem']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                                                </label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                <?php }?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>'menus','action'=>iaCore::ACTION_ADD), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


            <div class="js-local-url-field">
                <?php if ('page'==$_smarty_tpl->tpl_vars['item']->value['filename']) {?>
                    <div class="row">
                        <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'custom_template'),$_smarty_tpl);?>
</label>
                        <div class="col col-lg-4">
                            <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['custom_tpl'],'name'=>'custom_tpl'),$_smarty_tpl);?>

                        </div>
                    </div>

                    <div class="row" id="js-field-tpl-filename" style="display: none;">
                        <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'custom_template_filename'),$_smarty_tpl);?>
</label>
                        <div class="col col-lg-4">
                            <input type="text" name="template_filename" id="input-tpl-filename" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['template_filename'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['template_filename'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>

        <div class="wrap-group js-local-url-field">
            <div class="wrap-group-heading"><?php echo iaSmarty::lang(array('key'=>'seo'),$_smarty_tpl);?>
</div>

            <div class="row">
                <div class="col col-lg-2">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-meta_title"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-meta_title"><span class="i-copy"></span></button>
                        </div>
                    <?php }?>
                    <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'meta_title'),$_smarty_tpl);?>
</label>
                </div>
                <div class="col col-lg-4">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="translate-group" id="language-group-meta_title">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <input type="text" name="meta_title[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]"<?php if (isset($_smarty_tpl->tpl_vars['metaTitles']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaTitles']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                                    <div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                        <div class="translate-group__item">
                                            <input type="text" name="meta_title[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]"<?php if (isset($_smarty_tpl->tpl_vars['metaTitles']->value[$_smarty_tpl->tpl_vars['iso']->value])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaTitles']->value[$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                                            <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <input type="text" name="meta_title[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]"<?php if (isset($_smarty_tpl->tpl_vars['metaTitles']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaTitles']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                    <?php }?>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-2">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-meta_description"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-meta_description"><span class="i-copy"></span></button>
                        </div>
                    <?php }?>
                    <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'meta_description'),$_smarty_tpl);?>
</label>
                </div>
                <div class="col col-lg-4">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="translate-group" id="language-group-meta_description">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <textarea name="meta_description[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]" rows="2" id="meta_description-<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['metaDescription']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaDescription']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                    <div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                        <div class="translate-group__item">
                                            <textarea name="meta_description[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" rows="2"><?php if (isset($_smarty_tpl->tpl_vars['metaDescription']->value[$_smarty_tpl->tpl_vars['iso']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaDescription']->value[$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                            <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <textarea name="meta_description[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]" rows="2"><?php if (isset($_smarty_tpl->tpl_vars['metaDescription']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaDescription']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                    <?php }?>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-2">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-meta_keywords"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-meta_keywords"><span class="i-copy"></span></button>
                        </div>
                    <?php }?>
                    <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'meta_keywords'),$_smarty_tpl);?>
</label>
                </div>
                <div class="col col-lg-4">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="translate-group" id="language-group-meta_keywords">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <input type="text" name="meta_keywords[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]"<?php if (isset($_smarty_tpl->tpl_vars['metaKeywords']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaKeywords']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                                    <div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                        <div class="translate-group__item">
                                            <input type="text" name="meta_keywords[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]"<?php if (isset($_smarty_tpl->tpl_vars['metaKeywords']->value[$_smarty_tpl->tpl_vars['iso']->value])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaKeywords']->value[$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                                            <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <input type="text" name="meta_keywords[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]"<?php if (isset($_smarty_tpl->tpl_vars['metaKeywords']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['metaKeywords']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="wrap-group" id="js-content-fields">
            <div class="row">
                <div class="col col-lg-2">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-title"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-title"><span class="i-copy"></span></button>
                        </div>
                    <?php }?>
                    <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
 <?php echo iaSmarty::lang(array('key'=>'field_required'),$_smarty_tpl);?>
</label>
                </div>
                <div class="col col-lg-4">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="translate-group" id="language-group-title">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <input type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]"<?php if (isset($_smarty_tpl->tpl_vars['title']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                                    <div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                        <div class="translate-group__item">
                                            <input type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]"<?php if (isset($_smarty_tpl->tpl_vars['title']->value[$_smarty_tpl->tpl_vars['iso']->value])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value[$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                                            <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <input type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]"<?php if (isset($_smarty_tpl->tpl_vars['title']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                    <?php }?>
                </div>
            </div>

            <div class="row js-page-content-field">
                <div class="col col-lg-2">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-page_content"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-page_content"><span class="i-copy"></span></button>
                        </div>
                    <?php }?>
                    <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'page_content'),$_smarty_tpl);?>
</label>
                </div>
                <div class="col col-lg-8">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="translate-group" id="language-group-page_content">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <88 name="content[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]" data-language="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" rows="2" id="content-<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
"><?php if (isset($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?><?php echo $_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']];?>
<?php }?></88>
                                    <div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                </div>
                            </div>
                            <div class="translate-group__langs">
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                        <div class="translate-group__item">
                                            <textarea name="content[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" data-language="<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
" rows="2"><?php if (isset($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['iso']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                            <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } else { ?>
                        <textarea name="content[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]" data-language="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" rows="2"><?php if (isset($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['content']->value[$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['page_cust_content_mine']->value;?>
<?php }?></textarea>
                    <?php }?>
                </div>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</form>
<?php echo iaSmarty::ia_print_js(array('files'=>'ckeditor/ckeditor, admin/pages'),$_smarty_tpl);?>
<?php }} ?>
