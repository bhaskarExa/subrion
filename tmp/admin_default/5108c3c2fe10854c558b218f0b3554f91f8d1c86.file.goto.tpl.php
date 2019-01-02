<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:05:05
         compiled from "/var/www/html/subrion/admin/templates/default/goto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4072182035c236061e79d45-51122767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5108c3c2fe10854c558b218f0b3554f91f8d1c86' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/goto.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4072182035c236061e79d45-51122767',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'goto' => 0,
    'action' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c236061e9c8f1_95848020',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236061e9c8f1_95848020')) {function content_5c236061e9c8f1_95848020($_smarty_tpl) {?><label><?php echo iaSmarty::lang(array('key'=>'and_then'),$_smarty_tpl);?>
</label>
<select name="goto" class="goto-actions">
    <?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['goto']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['action']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php if (isset($_POST['goto'])&&$_POST['goto']==$_smarty_tpl->tpl_vars['action']->value) {?> selected<?php }?>><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['name']->value,'default'=>$_smarty_tpl->tpl_vars['name']->value),$_smarty_tpl);?>
</option>
    <?php } ?>
</select><?php }} ?>
