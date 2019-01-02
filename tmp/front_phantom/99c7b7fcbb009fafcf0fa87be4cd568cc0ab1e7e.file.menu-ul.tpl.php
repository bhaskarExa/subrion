<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:43:34
         compiled from "/var/www/html/subrion/templates/phantom/menu-ul.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12631042785c237776493e61-22042256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99c7b7fcbb009fafcf0fa87be4cd568cc0ab1e7e' => 
    array (
      0 => '/var/www/html/subrion/templates/phantom/menu-ul.tpl',
      1 => 1487928352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12631042785c237776493e61-22042256',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
        'pid' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'pid' => 0,
    'data' => 0,
    'class' => 0,
    'position' => 0,
    'menu' => 0,
    'menu_children' => 0,
    'menus' => 0,
    'menu_class' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c237776548a24_57779515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c237776548a24_57779515')) {function content_5c237776548a24_57779515($_smarty_tpl) {?><?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
	<?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['pid']->value])) {?>
		<ul class="<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php if ($_smarty_tpl->tpl_vars['pid']->value) {?> menu_<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
<?php }?>">

			<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['pid']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
?>

				<?php if (in_array($_smarty_tpl->tpl_vars['position']->value,array('left','right','user1','user2','top'))) {?>
					<a class="list-group-item<?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> active<?php }?>" href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
<?php } else { ?><?php echo @constant('IA_SELF');?>
#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['menu']->value['nofollow']) {?> rel="nofollow"<?php }?><?php if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?> target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['menu']->value['text'];?>
</a>
				<?php } else { ?>
					<li class="m_<?php echo $_smarty_tpl->tpl_vars['menu']->value['page_name'];?>

					    <?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value)) {?> dropdown<?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['menu']->value['active']) {?> active<?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['menu']->value['level']>=1&&(isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value))) {?> dropdown-submenu<?php }?>
					    <?php if ($_smarty_tpl->tpl_vars['menu']->value['level']>=0&&(isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value))&&$_smarty_tpl->tpl_vars['position']->value=='left') {?> dropdown-submenu<?php }?>
					    ">

						<a href="<?php if ($_smarty_tpl->tpl_vars['menu']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['menu']->value['url'];?>
<?php } else { ?><?php echo @constant('IA_SELF');?>
#<?php }?>"
							<?php if ($_smarty_tpl->tpl_vars['menu']->value['nofollow']) {?> rel="nofollow"<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['menu']->value['new_window']) {?> target="_blank"<?php }?>
							<?php if ((isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value))&&$_smarty_tpl->tpl_vars['menu']->value['level']==0&&$_smarty_tpl->tpl_vars['position']->value!='left') {?>data-toggle="dropdown"<?php }?>
						>
							<?php echo $_smarty_tpl->tpl_vars['menu']->value['text'];?>

							<?php if ((isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])||isset($_smarty_tpl->tpl_vars['menu_children']->value))&&$_smarty_tpl->tpl_vars['menu']->value['level']==0&&$_smarty_tpl->tpl_vars['position']->value!='left') {?><span class="caret"></span><?php }?>
						</a>
						<?php if (isset($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['menu']->value['el_id']])) {?>
							<?php if (in_array($_smarty_tpl->tpl_vars['position']->value,array('inventory','right','copyright'))) {?>
								<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['data']->value,'pid'=>$_smarty_tpl->tpl_vars['menu']->value['el_id'],'class'=>'dropdown-menu pull-right'));?>

							<?php } else { ?>
								<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['data']->value,'pid'=>$_smarty_tpl->tpl_vars['menu']->value['el_id'],'class'=>'dropdown-menu'));?>

							<?php }?>
						<?php }?>
					</li>
				<?php }?>

			<?php } ?>
		</ul>
	<?php }?>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>


<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['menus']->value,'class'=>$_smarty_tpl->tpl_vars['menu_class']->value));?>
<?php }} ?>
