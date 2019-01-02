<?php /* Smarty version Smarty-3.1.19, created on 2019-01-02 00:25:07
         compiled from "/var/www/html/subrion/templates/_common/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4681422715c2377fdcb8bf0-99245980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01cd984f74f947569a1bef92e3a2d1a4a715d08f' => 
    array (
      0 => '/var/www/html/subrion/templates/_common/page.tpl',
      1 => 1545885910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4681422715c2377fdcb8bf0-99245980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c2377fdce45e8_65519326',
  'variables' => 
  array (
    'protect' => 0,
    'page_protect' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2377fdce45e8_65519326')) {function content_5c2377fdce45e8_65519326($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['protect']->value) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['page_protect']->value)) {?>
        <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['page_protect']->value;?>
</div>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php } else { ?>
    <div class="alert alert-warning"><?php echo iaSmarty::lang(array('key'=>'password_protected_page'),$_smarty_tpl);?>
</div>

    <form action="<?php echo @constant('IA_SELF');?>
" method="post" class="form-inline">
        <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

        <label><?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
:
            <input type="password" name="password" value="">
            <button type="submit" name="login" value="" class="btn btn-primary"><?php echo iaSmarty::lang(array('key'=>'view'),$_smarty_tpl);?>
</button>
        </label>
    </form>
<?php }?><?php }} ?>
