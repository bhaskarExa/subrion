<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:43:49
         compiled from "module:blog/block.blogroll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3595538135c2377853bcf44-95097817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8405bd81dbab9376a7b0634c9dd4af4cb4452275' => 
    array (
      0 => 'module:blog/block.blogroll.tpl',
      1 => 1487928352,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3595538135c2377853bcf44-95097817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_blog_entries' => 0,
    'styles' => 0,
    'one_blog_entry' => 0,
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c23778540a139_22081444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23778540a139_22081444')) {function content_5c23778540a139_22081444($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.date_format.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['block_blog_entries']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['styles'] = new Smarty_variable(array(1,2,3,4,5,6), null, 0);?>
	<section class="tiles">
		<?php  $_smarty_tpl->tpl_vars['one_blog_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_blog_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_blog_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_blog_entry']->key => $_smarty_tpl->tpl_vars['one_blog_entry']->value) {
$_smarty_tpl->tpl_vars['one_blog_entry']->_loop = true;
?>
			<article class="style<?php echo $_smarty_tpl->tpl_vars['styles']->value[array_rand($_smarty_tpl->tpl_vars['styles']->value)];?>
">
				<span class="image">
					<?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->value['image']) {?>
						<?php echo iaSmarty::ia_image(array('file'=>$_smarty_tpl->tpl_vars['one_blog_entry']->value['image'],'type'=>'thumbnail','title'=>htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true)),$_smarty_tpl);?>

					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/phantom/images/placeholder.jpg" alt="" />
					<?php }?>
				</span>
				<a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
">
					<h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h2>
					<div class="content">
						<p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['one_blog_entry']->value['body']),80,'...');?>
</p>
						<p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_blog_entry']->value['date_added'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
</p>
					</div>
				</a>
			</article>
		<?php } ?>
	</section>
	<div class="m-t-md">
		<a href="<?php echo @constant('IA_URL');?>
blog/" class="button"><?php echo iaSmarty::lang(array('key'=>'view_all_blog_entries'),$_smarty_tpl);?>
</a>
	</div>
<?php } else { ?>
	<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_blog_entries'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
