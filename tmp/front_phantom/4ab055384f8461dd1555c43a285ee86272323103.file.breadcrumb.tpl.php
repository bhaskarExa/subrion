<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:43:34
         compiled from "/var/www/html/subrion/templates/phantom/breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15947217405c237776555f15-61720959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ab055384f8461dd1555c43a285ee86272323103' => 
    array (
      0 => '/var/www/html/subrion/templates/phantom/breadcrumb.tpl',
      1 => 1487928352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15947217405c237776555f15-61720959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c23777657bb06_71559147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23777657bb06_71559147')) {function content_5c23777657bb06_71559147($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['core']->value['page']['breadcrumb'])) {?>
	<ul class="actions small breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">
		<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['core']->value['page']['breadcrumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->iteration++;
 $_smarty_tpl->tpl_vars['entry']->last = $_smarty_tpl->tpl_vars['entry']->iteration === $_smarty_tpl->tpl_vars['entry']->total;
?>
			<?php if ($_smarty_tpl->tpl_vars['entry']->value['url']&&!$_smarty_tpl->tpl_vars['entry']->last) {?>
				<li typeof="v:Breadcrumb">
					<a href="<?php echo $_smarty_tpl->tpl_vars['entry']->value['url'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['entry']->value['no_follow'])&&$_smarty_tpl->tpl_vars['entry']->value['no_follow']) {?> rel="nofollow"<?php }?> rel="v:url" property="v:title"><?php echo $_smarty_tpl->tpl_vars['entry']->value['caption'];?>
</a> <span class="fa fa-angle-right"></span>
				</li>
			<?php } else { ?>
				<li class="active"><?php echo $_smarty_tpl->tpl_vars['entry']->value['caption'];?>
</li>
			<?php }?>
		<?php } ?>
	</ul>
<?php }?><?php }} ?>
