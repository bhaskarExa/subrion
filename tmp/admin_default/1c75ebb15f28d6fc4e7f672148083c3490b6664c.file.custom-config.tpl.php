<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:03:22
         compiled from "/var/www/html/subrion/admin/templates/default/custom-config.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15876980025c235ffad99a29-19127413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c75ebb15f28d6fc4e7f672148083c3490b6664c' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/custom-config.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15876980025c235ffad99a29-19127413',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'key' => 0,
    'value' => 0,
    'securityToken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c235ffae00ba3_06767740',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c235ffae00ba3_06767740')) {function content_5c235ffae00ba3_06767740($_smarty_tpl) {?><?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>0)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>0), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    intelli.pageName = '<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
';
    <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['customConfig']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
        intelli.config.<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';
    <?php } ?>
    intelli.config.url = '<?php echo @constant('IA_URL');?>
';
    intelli.config.admin_url = '<?php echo @constant('IA_URL');?>
<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['admin_page'];?>
';
    intelli.securityToken = '<?php echo $_smarty_tpl->tpl_vars['securityToken']->value;?>
';
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>0), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
