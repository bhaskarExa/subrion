<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:38:28
         compiled from "/var/www/html/subrion/admin/templates/default/blocks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2695719815c237644dce9e6-08007353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46a31ba2af3fb31094dcb2f74ca82e51d335f586' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/blocks.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2695719815c237644dce9e6-08007353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
    'types' => 0,
    'type' => 0,
    'tip' => 0,
    'positions' => 0,
    'position' => 0,
    'pagesGroup' => 0,
    'row' => 0,
    'classname' => 0,
    'post_key' => 0,
    'pages' => 0,
    'page' => 0,
    'group' => 0,
    'key' => 0,
    'menuPages' => 0,
    'iso' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c23764517e4e6_11382154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23764517e4e6_11382154')) {function content_5c23764517e4e6_11382154($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radio_switcher')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.html_radio_switcher.php';
?><form method="post" class="sap-form form-horizontal">
    <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>


    <div class="wrap-list">
        <div class="wrap-group">
            <div class="wrap-group-heading"><?php echo iaSmarty::lang(array('key'=>'options'),$_smarty_tpl);?>
</div>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'name'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['core']->value['page']['info']['action']) {?>
                        <input type="text" name="name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <p class="help-block"><?php echo iaSmarty::lang(array('key'=>'unique_name'),$_smarty_tpl);?>
</p>
                    <?php } else { ?>
                        <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" disabled>
                    <?php }?>
                </div>
            </div>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'type'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <select name="type" id="input-block-type">
                        <?php  $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['type']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['type']->key => $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
?>
                            <?php if (iaBlock::TYPE_MENU!=$_smarty_tpl->tpl_vars['type']->value) {?>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>'blocks','action'=>$_smarty_tpl->tpl_vars['type']->value)); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>'blocks','action'=>$_smarty_tpl->tpl_vars['type']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                <?php ob_start();?><?php echo iaSmarty::lang(array('key'=>"block_type_tip_".((string)$_smarty_tpl->tpl_vars['type']->value)),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tip'] = new Smarty_variable($_tmp1, null, 0);?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" data-tip="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tip']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['type']->value==$_smarty_tpl->tpl_vars['item']->value['type']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</option>
                                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>'blocks','action'=>$_smarty_tpl->tpl_vars['type']->value), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php }?>
                        <?php } ?>
                    </select>
                    <p class="help-block"></p>
                </div>
            </div>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'position'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <select name="position">
                        <?php  $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['position']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['positions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['position']->key => $_smarty_tpl->tpl_vars['position']->value) {
$_smarty_tpl->tpl_vars['position']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['position']->value['name'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['position'])&&$_smarty_tpl->tpl_vars['item']->value['position']==$_smarty_tpl->tpl_vars['position']->value['name']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['position']->value['name'];?>
</option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'css_class_name'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <input type="text" name="classname" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['classname'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['classname'];?>
<?php }?>">
                </div>
            </div>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'show_header'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['header'],'name'=>'header'),$_smarty_tpl);?>

                </div>
            </div>

            <div class="row" style="display: none;">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'collapsible'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['collapsible'],'name'=>'collapsible'),$_smarty_tpl);?>

                </div>
            </div>

            <div class="row" style="display: none;">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'collapsed'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['collapsed'],'name'=>'collapsed'),$_smarty_tpl);?>

                </div>
            </div>

            <div class="row">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'block_visible_everywhere'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['sticky'],'name'=>'sticky'),$_smarty_tpl);?>

                    <p class="help-block" data-sticky="0"><?php echo iaSmarty::lang(array('key'=>'block_visibility_exceptions_visible'),$_smarty_tpl);?>
</p>
                    <p class="help-block" data-sticky="1"><?php echo iaSmarty::lang(array('key'=>'block_visibility_exceptions_hidden'),$_smarty_tpl);?>
</p>
                </div>
            </div>

            <div class="row" id="js-pages-list">
                <label class="col col-lg-2 control-label"></label>

                <div class="col col-lg-8">
                    <ul class="nav nav-tabs">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
                            <li<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> class="active"<?php }?>><a href="#tab-visible_<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
                        <?php } ?>
                    </ul>

                    <div class="tab-content">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
                            <?php $_smarty_tpl->tpl_vars['post_key'] = new Smarty_variable("select_all_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['classname'] = new Smarty_variable("visible_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
                            <div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
">
                                <div class="checkbox checkbox-all">
                                    <label>
                                        <input type="checkbox" value="1" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" name="select_all_<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" id="select_all_<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
"<?php if (isset($_POST[$_smarty_tpl->tpl_vars['post_key']->value])&&$_POST[$_smarty_tpl->tpl_vars['post_key']->value]=='1') {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'select_all_in_tab'),$_smarty_tpl);?>

                                    </label>
                                </div>

                                <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value['group']==$_smarty_tpl->tpl_vars['group']->value) {?>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="pages[]" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
" id="page_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if (in_array($_smarty_tpl->tpl_vars['page']->value['name'],$_smarty_tpl->tpl_vars['item']->value['pages'])) {?> checked<?php }?>> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                                            </label>
                                        </div>
                                        <?php if ($_smarty_tpl->tpl_vars['page']->value['suburl']) {?>
                                            <div class="subpages" style="display:none" rel="<?php echo $_smarty_tpl->tpl_vars['page']->value['suburl'];?>
::<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">&nbsp;</div>
                                            <input type="hidden" name="subpages[<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
]" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']];?>
<?php } elseif (isset($_POST['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']])) {?><?php echo $_POST['subpages'][$_smarty_tpl->tpl_vars['page']->value['name']];?>
<?php }?>" id="subpage_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                        <?php }?>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="checkbox checkbox-all">
                        <label>
                            <input type="checkbox" value="1" name="select_all" id="js-pages-select-all"<?php if (isset($_POST['select_all'])&&$_POST['select_all']=='1') {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'select_all'),$_smarty_tpl);?>

                        </label>
                    </div>
                </div>
            </div>

            <div id="pages" class="row" style="display: none;">
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'pages_contains'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" name="all_pages" id="all_pages"<?php if (isset($_POST['all_pages'])&&$_POST['all_pages']=='1') {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'select_all'),$_smarty_tpl);?>

                        </label>
                    </div>

                    <ul class="nav nav-tabs">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
                            <li<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> class="active"<?php }?>><a href="#tab-pages_<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</a></li>
                        <?php } ?>
                    </ul>

                    <div class="tab-content">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagesGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['row']->key;
 $_smarty_tpl->tpl_vars['row']->iteration++;
?>
                            <?php $_smarty_tpl->tpl_vars['post_key'] = new Smarty_variable("all_pages_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['classname'] = new Smarty_variable("pages_".((string)$_smarty_tpl->tpl_vars['row']->value['name']), null, 0);?>
                            <div class="tab-pane<?php if ($_smarty_tpl->tpl_vars['row']->iteration==1) {?> active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" data-group="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['post_key']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['post_key']->value;?>
"<?php if (isset($_POST[$_smarty_tpl->tpl_vars['post_key']->value])&&$_POST[$_smarty_tpl->tpl_vars['post_key']->value]=='1') {?> checked<?php }?>>
                                    </label>
                                </div>

                                <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['page']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value['group']==$_smarty_tpl->tpl_vars['group']->value) {?>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="pages[]" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['page']->value['name'],$_smarty_tpl->tpl_vars['menuPages']->value,true)) {?> checked<?php }?>>
                                            <?php if (empty($_smarty_tpl->tpl_vars['page']->value['title'])) {?><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
<?php }?>
                                        </label>
                                    </div>
                                    <?php }?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-list">
        <div class="wrap-group">
            <div class="wrap-group-heading"><?php echo iaSmarty::lang(array('key'=>'block_contents'),$_smarty_tpl);?>
</div>

            <div class="row">
                <div class="col col-lg-2">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="btn-group btn-group-xs translate-group-actions">
                            <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-title"><span class="i-earth"></span></button>
                            <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-title"><span class="i-copy"></span></button>
                        </div>
                    <?php }?>
                    <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
</label>
                </div>
                <div class="col col-lg-4">
                    <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                        <div class="translate-group" id="language-group-title">
                            <div class="translate-group__default">
                                <div class="translate-group__item">
                                    <input type="text" name="title[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
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
]"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'][$_smarty_tpl->tpl_vars['iso']->value])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'][$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
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
]"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['title'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?> value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['title'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>>
                    <?php }?>
                </div>
            </div>

            <div class="wrap-row" id="js-content-dynamic">
                <div class="row" id="js-external-row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'external_file'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-4">
                        <?php echo smarty_function_html_radio_switcher(array('value'=>$_smarty_tpl->tpl_vars['item']->value['external'],'name'=>'external'),$_smarty_tpl);?>

                    </div>
                </div>

                <div class="row" id="js-row-external-file-name"<?php if (!$_smarty_tpl->tpl_vars['item']->value['external']) {?> style="display: none"<?php }?>>
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'filename'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-4">
                        <input type="text" name="filename" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['filename'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['core']->value['page']['info']['action']) {?>
                            <p class="help-block"><?php echo iaSmarty::lang(array('key'=>'filename_notification'),$_smarty_tpl);?>
</p>
                        <?php }?>
                    </div>
                </div>

                <div class="row" id="js-row-dynamic-content"<?php if ($_smarty_tpl->tpl_vars['item']->value['external']) {?> style="display: none"<?php }?>>
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'contents'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-8">
                        <textarea name="contents" id="input-content" rows="8"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['contents'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
                </div>
            </div>

            <div class="wrap-row" id="js-content-static">
                <div class="row">
                    <div class="col col-lg-2">
                        <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                            <div class="btn-group btn-group-xs translate-group-actions">
                                <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-content"><span class="i-earth"></span></button>
                                <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-content"><span class="i-copy"></span></button>
                            </div>
                        <?php }?>
                        <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'contents'),$_smarty_tpl);?>
</label>
                    </div>
                    <div class="col col-lg-8">
                        <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                            <div class="translate-group" id="language-group-content">
                                <div class="translate-group__default">
                                    <div class="translate-group__item">
                                        <textarea name="content[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]" id="content_<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" class="js-ckeditor resizable" rows="8"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['content'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
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
                                                <textarea name="content[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" id="content_<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
" class="js-ckeditor resizable" rows="8"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['content'][$_smarty_tpl->tpl_vars['iso']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content'][$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
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
]" id="content_<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" class="js-ckeditor resizable" rows="8"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['content'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['content'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</form>
<?php echo iaSmarty::ia_print_js(array('files'=>'utils/edit_area/edit_area, ckeditor/ckeditor, admin/blocks'),$_smarty_tpl);?>
<?php }} ?>
