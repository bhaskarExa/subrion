<?php /* Smarty version Smarty-3.1.19, created on 2019-01-01 23:38:42
         compiled from "/var/www/html/subrion/admin/templates/default/field-type-content-fieldset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19973941225c2c40527bd1f6-98589919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd92a656c22117dd8953ee107e57dd9acb84a6957' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/field-type-content-fieldset.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19973941225c2c40527bd1f6-98589919',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_sections' => 0,
    'section' => 0,
    'fieldset_before' => 0,
    'exceptions' => 0,
    'field' => 0,
    'fieldset_after' => 0,
    'isSystem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c2c4052887de5_55390875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2c4052887de5_55390875')) {function content_5c2c4052887de5_55390875($_smarty_tpl) {?><div class="wrap-list">
    <?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['section']->key;
?>
        <?php if (!empty($_smarty_tpl->tpl_vars['section']->value['fields'])&&isset($_smarty_tpl->tpl_vars['section']->value['name'])) {?>
            <div class="wrap-group" id="<?php echo $_smarty_tpl->tpl_vars['section']->value['name'];?>
">
                <div class="wrap-group-heading">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['title'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php if ($_smarty_tpl->tpl_vars['section']->value['description']) {?>
                        <a href="#" class="js-tooltip" data-placement="right" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['section']->value['description'], ENT_QUOTES, 'UTF-8', true);?>
"><span class="fa fa-info-circle"></span></a>
                    <?php }?>
                </div>

                <?php if (isset($_smarty_tpl->tpl_vars['fieldset_before']->value[$_smarty_tpl->tpl_vars['section']->value['name']])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset_before']->value[$_smarty_tpl->tpl_vars['section']->value['name']];?>
<?php }?>

                <?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->_loop = true;
?>
                    <?php if (!isset($_smarty_tpl->tpl_vars['exceptions']->value)||!in_array($_smarty_tpl->tpl_vars['field']->value['name'],$_smarty_tpl->tpl_vars['exceptions']->value)) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ('field-type-content-manage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                <?php } ?>

                <?php if (isset($_smarty_tpl->tpl_vars['fieldset_after']->value[$_smarty_tpl->tpl_vars['section']->value['name']])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset_after']->value[$_smarty_tpl->tpl_vars['section']->value['name']];?>
<?php }?>
            </div>
        <?php }?>
    <?php } ?>

    <?php if (!empty($_smarty_tpl->tpl_vars['isSystem']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate ('fields-system.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
</div>
<?php echo iaSmarty::ia_print_js(array('files'=>'jquery/plugins/jquery.numeric'),$_smarty_tpl);?>
<?php }} ?>
