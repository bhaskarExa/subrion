<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:03:21
         compiled from "/var/www/html/subrion/templates/kickstart/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4866535095c235ff9380566-55613546%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19a2f2c446c81d67c1163e95228536a0ecd0d0e1' => 
    array (
      0 => '/var/www/html/subrion/templates/kickstart/block.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4866535095c235ff9380566-55613546',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'header' => 0,
    'name' => 0,
    'classname' => 0,
    'collapsible' => 0,
    'collapsed' => 0,
    'manageMode' => 0,
    'hidden' => 0,
    'position' => 0,
    'title' => 0,
    'icons' => 0,
    'icon' => 0,
    'display' => 0,
    '_block_content_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c235ff9419a48_27528109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c235ff9419a48_27528109')) {function content_5c235ff9419a48_27528109($_smarty_tpl) {?><!--__b_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
<?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
    <div id="block_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"
         class="box <?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['collapsible']->value)&&$_smarty_tpl->tpl_vars['collapsible']->value) {?> collapsible<?php if (isset($_smarty_tpl->tpl_vars['collapsed']->value)&&$_smarty_tpl->tpl_vars['collapsed']->value) {?> collapsed<?php }?><?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?> vm-hidden="<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['position']->value)&&'landing'==$_smarty_tpl->tpl_vars['position']->value) {?>
            <div class="container">
        <?php }?>
        <h4 id="caption_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box__caption"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>

            <?php if (isset($_smarty_tpl->tpl_vars['icons']->value)&&$_smarty_tpl->tpl_vars['icons']->value) {?>
                <span class="box__actions">
                    <?php  $_smarty_tpl->tpl_vars['icon'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['icon']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['icons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['icon']->key => $_smarty_tpl->tpl_vars['icon']->value) {
$_smarty_tpl->tpl_vars['icon']->_loop = true;
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['icon']->value['url'];?>
" <?php echo $_smarty_tpl->tpl_vars['icon']->value['attributes'];?>
 id="<?php echo $_smarty_tpl->tpl_vars['icon']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['icon']->value['text'];?>
</a>
                    <?php } ?>
                </span>
            <?php }?>
        </h4>
        <div id="content_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box__content"<?php if (isset($_smarty_tpl->tpl_vars['display']->value)&&!$_smarty_tpl->tpl_vars['display']->value) {?> style="display: none;"<?php }?>>
<?php } else { ?>
    <div id="block_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box box--no-header <?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?> vm-hidden="<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['position']->value)&&'landing'==$_smarty_tpl->tpl_vars['position']->value) {?>
            <div class="container">
        <?php }?>
<?php }?>

<!--__b_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
<?php echo $_smarty_tpl->tpl_vars['_block_content_']->value;?>

<!--__e_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->

<?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['position']->value)&&'landing'==$_smarty_tpl->tpl_vars['position']->value) {?>
            </div>
        <?php }?>
    </div>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars['position']->value)&&'landing'==$_smarty_tpl->tpl_vars['position']->value) {?>
        </div>
    <?php }?>
    </div>
<?php }?>
<!--__e_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
--><?php }} ?>
