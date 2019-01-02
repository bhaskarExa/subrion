<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:03:20
         compiled from "/var/www/html/subrion/templates/kickstart/language-selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11989870285c235ff8f40e13-39277669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23560ba76e045416730e2437cee3bc98fc520be1' => 
    array (
      0 => '/var/www/html/subrion/templates/kickstart/language-selector.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11989870285c235ff8f40e13-39277669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c235ff90705f2_00721130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c235ff90705f2_00721130')) {function content_5c235ff90705f2_00721130($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['core']->value['config']['language_switch']&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
    <ul class="nav-inventory pull-right">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php echo $_smarty_tpl->tpl_vars['core']->value['languages'][@constant('IA_LANGUAGE')]['title'];?>
 <span class="fa fa-angle-down"></span>
            </a>
            <ul class="dropdown-menu pull-right">
                <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                    <li<?php if (@constant('IA_LANGUAGE')==$_smarty_tpl->tpl_vars['code']->value) {?> class="active"<?php }?>><a href="<?php echo iaSmarty::ia_page_url(array('code'=>$_smarty_tpl->tpl_vars['code']->value),$_smarty_tpl);?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</a></li>
                <?php } ?>
            </ul>
        </li>
    </ul>
<?php }?>
<?php }} ?>
