<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:45:54
         compiled from "/var/www/html/subrion/templates/paper/block.common-statistics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17342642235c237802bc1176-81934977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671ca722802eb5308a433a0e6062d6ede9b0ec20' => 
    array (
      0 => '/var/www/html/subrion/templates/paper/block.common-statistics.tpl',
      1 => 1494408736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17342642235c237802bc1176-81934977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'common_statistics' => 0,
    'group' => 0,
    'data' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c237802bdf6f7_95512571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c237802bdf6f7_95512571')) {function content_5c237802bdf6f7_95512571($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['common_statistics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['group']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
    <table class="table table-condensed b-statistics">
        <thead>
        <tr>
            <th colspan="2"><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['group']->value),$_smarty_tpl);?>
</th>
        </tr>
        </thead>
        <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
:</td>
                    <td><span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</span></td>
                </tr>
            <?php } ?>
        </tbody>
        <tfoot>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if (isset($_smarty_tpl->tpl_vars['item']->value['html'])) {?>
                <tr>
                    <td colspan="2"><div class="user-list"><?php echo $_smarty_tpl->tpl_vars['item']->value['html'];?>
</div></td>
                </tr>
            <?php }?>
        <?php } ?>
        </tfoot>
    </table>
<?php } ?><?php }} ?>
