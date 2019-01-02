<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:06:59
         compiled from "/var/www/html/subrion/templates/_common/notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14093040215c2360d30c6276-55690326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e5830e84b18d3beae8d51fe84b192efdba92262' => 
    array (
      0 => '/var/www/html/subrion/templates/_common/notification.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14093040215c2360d30c6276-55690326',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'type' => 0,
    'entries' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c2360d30f7bc8_61775969',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2360d30f7bc8_61775969')) {function content_5c2360d30f7bc8_61775969($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entries']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entries']->key => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['entries']->key;
?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
        <ul class="list-unstyled">
            <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                <li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li>
            <?php } ?>
        </ul>
    </div>
<?php }
if (!$_smarty_tpl->tpl_vars['entries']->_loop) {
?>
    <div id="notification" class="alert alert-info" style="display: none;"></div>
<?php } ?><?php }} ?>
