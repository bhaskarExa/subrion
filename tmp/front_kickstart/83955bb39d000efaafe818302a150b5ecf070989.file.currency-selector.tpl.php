<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:03:21
         compiled from "/var/www/html/subrion/templates/_common/currency-selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5111048655c235ff90736a5-84603587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83955bb39d000efaafe818302a150b5ecf070989' => 
    array (
      0 => '/var/www/html/subrion/templates/_common/currency-selector.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5111048655c235ff90736a5-84603587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'code' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c235ff90a3c84_80092387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c235ff90a3c84_80092387')) {function content_5c235ff90a3c84_80092387($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['core']->value['config']['currency_switch']&&count($_smarty_tpl->tpl_vars['core']->value['currencies'])>1) {?>
    <ul class="nav-inventory pull-right" id="js-currencies-list">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['currency']['title'], ENT_QUOTES, 'UTF-8', true);?>
 <span class="caret"></span>
            </a>
            <ul class="dropdown-menu pull-right">
                <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['currencies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['entry']->key;
?>
                    <li<?php if ($_smarty_tpl->tpl_vars['core']->value['currency']['code']==$_smarty_tpl->tpl_vars['code']->value) {?> class="active"<?php }?>><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['entry']->value['code'];?>
" data-code="<?php echo $_smarty_tpl->tpl_vars['entry']->value['code'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
                <?php } ?>
            </ul>
        </li>
    </ul>
<?php }?>
<?php }} ?>
