<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:39:16
         compiled from "/var/www/html/subrion/admin/templates/default/phrases.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3204554825c237674f41dd3-93636513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '946385b6d4bff01f45d2321827e734ffcef5fbd5' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/phrases.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3204554825c237674f41dd3-93636513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pageAction' => 0,
    'item' => 0,
    'categories' => 0,
    'key' => 0,
    'category' => 0,
    'modules' => 0,
    'name' => 0,
    'title' => 0,
    'core' => 0,
    'iso' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c2376750f9c00_39105579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2376750f9c00_39105579')) {function content_5c2376750f9c00_39105579($_smarty_tpl) {?><?php if (iaCore::ACTION_READ==$_smarty_tpl->tpl_vars['pageAction']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate ('grid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo iaSmarty::ia_add_media(array('files'=>'js:intelli/intelli.grid,js:admin/phrases'),$_smarty_tpl);?>


    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        intelli.config.language = '<?php echo @constant('IA_LANGUAGE');?>
';
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php } else { ?>
    <form method="post" class="sap-form form-horizontal">
        <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>


        <div class="wrap-list">
            <div class="wrap-group">
                <div class="wrap-group-heading"><?php echo iaSmarty::lang(array('key'=>'options'),$_smarty_tpl);?>
</div>

                <div class="row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'key'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-4">
                        <input id="input-key" type="text" name="key" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['key'];?>
"<?php if (iaCore::ACTION_EDIT==$_smarty_tpl->tpl_vars['pageAction']->value) {?> disabled<?php }?>>
                        <p class="help-block"><?php echo iaSmarty::lang(array('key'=>'unique_name'),$_smarty_tpl);?>
</p>
                    </div>
                </div>

                <div class="row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'category'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-4">
                        <select name="category">
                            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['key']->value==$_smarty_tpl->tpl_vars['item']->value['category']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'module'),$_smarty_tpl);?>
</label>

                    <div class="col col-lg-4">
                        <select name="module"<?php if (iaCore::ACTION_EDIT==$_smarty_tpl->tpl_vars['pageAction']->value) {?> disabled<?php }?>>
                            <?php  $_smarty_tpl->tpl_vars['title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['title']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['title']->key => $_smarty_tpl->tpl_vars['title']->value) {
$_smarty_tpl->tpl_vars['title']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['title']->key;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['name']->value==$_smarty_tpl->tpl_vars['item']->value['module']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col col-lg-2">
                        
                        <label class="control-label"><?php echo iaSmarty::lang(array('key'=>'value'),$_smarty_tpl);?>
</label>
                    </div>
                    <div class="col col-lg-6">
                        <div class="translate-group" id="language-group-value">
                            
                                <div class="translate-group__item">
                                    <textarea name="value[<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
]" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['core']->value['language']['iso']], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                    <div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['language']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div>
                                </div>
                            
                            
                                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['language']['iso']) {?>
                                        <div class="translate-group__item">
                                            <textarea name="value[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" rows="5"><?php if (isset($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['iso']->value])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['iso']->value], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                            <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        </div>
                                    <?php }?>
                                <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('noSystemFields'=>true), 0);?>

        </div>
    </form>
<?php }?>
<?php }} ?>
