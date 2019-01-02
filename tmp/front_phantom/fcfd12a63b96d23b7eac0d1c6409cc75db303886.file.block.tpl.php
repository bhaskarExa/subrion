<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:43:34
         compiled from "/var/www/html/subrion/templates/phantom/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17350109595c237776595632-95404895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcfd12a63b96d23b7eac0d1c6409cc75db303886' => 
    array (
      0 => '/var/www/html/subrion/templates/phantom/block.tpl',
      1 => 1487928352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17350109595c237776595632-95404895',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'position' => 0,
    '_block_content_' => 0,
    'header' => 0,
    'name' => 0,
    'classname' => 0,
    'collapsible' => 0,
    'collapsed' => 0,
    'manageMode' => 0,
    'hidden' => 0,
    'title' => 0,
    'icons' => 0,
    'icon' => 0,
    'display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c23777662db58_73819445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23777662db58_73819445')) {function content_5c23777662db58_73819445($_smarty_tpl) {?><!--__b_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
<?php if ('top'==$_smarty_tpl->tpl_vars['position']->value) {?>
	<header>
		<!--__b_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
		<?php echo $_smarty_tpl->tpl_vars['_block_content_']->value;?>

		<!--__e_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
	</header>
<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
		<div id="block_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" 
			 class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
<?php if (isset($_smarty_tpl->tpl_vars['collapsible']->value)&&$_smarty_tpl->tpl_vars['collapsible']->value) {?> collapsible<?php if (isset($_smarty_tpl->tpl_vars['collapsed']->value)&&$_smarty_tpl->tpl_vars['collapsed']->value) {?> collapsed<?php }?><?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?> vm-hidden="<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
"<?php }?>>
			<?php if ('landing'==$_smarty_tpl->tpl_vars['position']->value) {?>
				<div class="container">
			<?php }?>
			<h2 id="caption_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
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
			</h2>
			<div id="content_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box__content"<?php if (isset($_smarty_tpl->tpl_vars['display']->value)&&!$_smarty_tpl->tpl_vars['display']->value) {?> style="display: none;"<?php }?>>
	<?php } else { ?>
		<div id="block_<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="box--no-header <?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?> vm-hidden="<?php echo $_smarty_tpl->tpl_vars['hidden']->value;?>
"<?php }?>>
	<?php }?>

	<!--__b_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->
	<?php echo $_smarty_tpl->tpl_vars['_block_content_']->value;?>

	<!--__e_c_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
-->

	<?php if ($_smarty_tpl->tpl_vars['header']->value) {?>
			</div>
		</div>
	<?php } else { ?>
		</div>
	<?php }?>
<?php }?>
<!--__e_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
--><?php }} ?>
