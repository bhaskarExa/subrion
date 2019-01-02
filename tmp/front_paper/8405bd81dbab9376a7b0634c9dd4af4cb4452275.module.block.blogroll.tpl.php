<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:45:54
         compiled from "module:blog/block.blogroll.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3456174605c237802be7cc8-52694609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8405bd81dbab9376a7b0634c9dd4af4cb4452275' => 
    array (
      0 => 'module:blog/block.blogroll.tpl',
      1 => 1494408736,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '3456174605c237802be7cc8-52694609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_blog_entries' => 0,
    'one_blog_entry' => 0,
    'core' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c237802c21969_46161023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c237802c21969_46161023')) {function content_5c237802c21969_46161023($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['block_blog_entries']->value)&&$_smarty_tpl->tpl_vars['block_blog_entries']->value) {?>
	<div class="blogroll">
		<div class="row">
			<?php  $_smarty_tpl->tpl_vars['one_blog_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_blog_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_blog_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['one_blog_entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_blog_entry']->key => $_smarty_tpl->tpl_vars['one_blog_entry']->value) {
$_smarty_tpl->tpl_vars['one_blog_entry']->_loop = true;
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration++;
 $_smarty_tpl->tpl_vars['one_blog_entry']->last = $_smarty_tpl->tpl_vars['one_blog_entry']->iteration === $_smarty_tpl->tpl_vars['one_blog_entry']->total;
?>
				<div class="col-md-3">
					<div class="blog-item">
						<div class="blog-item__date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_blog_entry']->value['date_added'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>
</div>
						<h4 class="blog-item__title"><a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a></h4>

						<div class="blog-item__intro">
							<?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['one_blog_entry']->value['body']),$_smarty_tpl->tpl_vars['core']->value['config']['blog_max_block'],'...');?>

						</div>
						<div class="blog-item__author"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['fullname'], ENT_QUOTES, 'UTF-8', true);?>
</div>
					</div>
				</div>

				<?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->iteration%4==0&&!$_smarty_tpl->tpl_vars['one_blog_entry']->last) {?>
					</div>
					<div class="row">
				<?php }?>
			<?php } ?>
		</div>
	</div>
	<p class="m-t text-center"><a href="<?php echo @constant('IA_URL');?>
blog/" class="btn btn-primary text-uppercase"><?php echo iaSmarty::lang(array('key'=>'view_all_blog_entries'),$_smarty_tpl);?>
</a></p>
<?php } else { ?>
	<div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_blog_entries'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
