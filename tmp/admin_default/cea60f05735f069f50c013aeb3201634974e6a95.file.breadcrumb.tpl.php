<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:03:53
         compiled from "/var/www/html/subrion/admin/templates/default/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19876123415c2360197189d6-49541421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cea60f05735f069f50c013aeb3201634974e6a95' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/breadcrumb.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19876123415c2360197189d6-49541421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c23601973a260_04613397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23601973a260_04613397')) {function content_5c23601973a260_04613397($_smarty_tpl) {?><ul class="breadcrumb">
    <?php if ('index'==$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
        <li class="active"><?php echo iaSmarty::lang(array('key'=>'welcome_to_admin_board'),$_smarty_tpl);?>
</li>
    <?php } else { ?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['breadcrumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['url']&&!$_smarty_tpl->tpl_vars['item']->last) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</a></li>
            <?php } else { ?>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</li>
            <?php }?>
        <?php } ?>
    <?php }?>
</ul><?php }} ?>
