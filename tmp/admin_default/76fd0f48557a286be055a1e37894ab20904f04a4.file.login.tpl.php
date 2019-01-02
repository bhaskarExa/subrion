<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:03:22
         compiled from "/var/www/html/subrion/admin/templates/default/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15321656115c235ffa634ca5-18618235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76fd0f48557a286be055a1e37894ab20904f04a4' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/login.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15321656115c235ffa634ca5-18618235',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'img' => 0,
    'access_denied' => 0,
    'error_login' => 0,
    'empty_login' => 0,
    'code' => 0,
    'language' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c235ffad91487_59618871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c235ffad91487_59618871')) {function content_5c235ffad91487_59618871($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_ia_hooker')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.ia_hooker.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <title><?php echo iaSmarty::ia_print_title(array(),$_smarty_tpl);?>
</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="generator" content="Subrion CMS - Open Source Content Management System">
        <meta name="robots" content="noindex">
        <base href="<?php echo @constant('IA_ADMIN_URL');?>
">

        <!--[if lt IE 9]>
            <script src="../../../js/utils/shiv.js"></script>
            <script src="../../../js/utils/respond.min.js"></script>
        <![endif]-->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/apple-touch-icon-57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
ico/favicon.ico">

        <?php echo iaSmarty::ia_print_css(array('files'=>"bootstrap-".((string)$_smarty_tpl->tpl_vars['core']->value['config']['sap_style']),'order'=>0),$_smarty_tpl);?>


        <?php echo iaSmarty::ia_add_media(array('files'=>'jquery, subrion, js:admin/login','order'=>0),$_smarty_tpl);?>

        <?php echo iaSmarty::ia_print_js(array('files'=>'_IA_TPL_bootstrap.min'),$_smarty_tpl);?>


        <?php echo iaSmarty::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


        <?php echo $_smarty_tpl->getSubTemplate ('custom-config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </head>

    <body class="page-login">
        <div class="page-login__content">
            <div class="b-login">
                <div class="b-login__img">
                    <a href="https://subrion.org/"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
subrion-logo-lines.png" alt="Subrion CMS" title="Subrion CMS"/></a>
                    <h1><?php echo iaSmarty::lang(array('key'=>'welcome_to_admin_panel'),$_smarty_tpl);?>
</h1>
                </div>
                <div class="b-login__form">
                    <div class="login-body">
                        <?php if (!empty($_smarty_tpl->tpl_vars['access_denied']->value)) {?>
                            <div class="alert alert-danger"><?php echo iaSmarty::lang(array('key'=>'access_denied'),$_smarty_tpl);?>
</div>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['error_login']->value)) {?>
                            <div class="alert alert-danger"><?php echo iaSmarty::lang(array('key'=>'error_login'),$_smarty_tpl);?>
</div>
                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['empty_login']->value)) {?>
                            <div class="alert alert-danger"><?php echo iaSmarty::lang(array('key'=>'empty_login'),$_smarty_tpl);?>
</div>
                        <?php }?>

                        <form method="post" class="sap-form">
                            <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

                            <p>
                                <input type="text" id="username" name="username" value="<?php if (isset($_POST['username'])) {?><?php echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" autofocus placeholder="<?php echo iaSmarty::lang(array('key'=>'login'),$_smarty_tpl);?>
">
                            </p>
                            <p>
                                <input type="password" id="dummy_password" name="password" placeholder="<?php echo iaSmarty::lang(array('key'=>'password'),$_smarty_tpl);?>
">
                            </p>
                            <div class="checkbox">
                                <label><input type="checkbox" name="remember"<?php if (isset($_POST['remember'])) {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'remember_me'),$_smarty_tpl);?>
</label>
                            </div>
                            <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
                            <p>
                                <select name="_lang" id="_lang">
                                    <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['code']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['code']->value==@constant('IA_LANGUAGE')) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option>
                                    <?php } ?>
                                </select>
                            </p>
                            <?php }?>
                            <input type="submit" class="btn btn-primary" value="<?php echo iaSmarty::lang(array('key'=>'login'),$_smarty_tpl);?>
">
                            <a href="#" class="btn btn-link" id="js-forgot-dialog"><?php echo iaSmarty::lang(array('key'=>'forgot_password'),$_smarty_tpl);?>
</a>
                        </form>
                    </div>
                    <div class="js-login-body-forgot-password" style="display: none;">
                        <form method="post" class="sap-form">
                            <div class="alert" style="display: none;"><?php echo iaSmarty::lang(array('key'=>'error_email_incorrect'),$_smarty_tpl);?>
</div>
                            <?php echo iaSmarty::preventCsrf(array(),$_smarty_tpl);?>

                            <p class="help-block"><?php echo iaSmarty::lang(array('key'=>'restore_password'),$_smarty_tpl);?>
</p>
                            <p>
                                <input type="text" id="email" name="email" placeholder="<?php echo iaSmarty::lang(array('key'=>'type_email_here'),$_smarty_tpl);?>
">
                            </p>
                            <input id="js-forgot-submit" type="submit" class="btn btn-primary" value="<?php echo iaSmarty::lang(array('key'=>'go'),$_smarty_tpl);?>
">
                            <input  id="js-forgot-dialog-close" type="submit" class="btn btn-link" value="<?php echo iaSmarty::lang(array('key'=>'cancel'),$_smarty_tpl);?>
">
                        </form>
                    </div>
                    <div class="copyright">
                        <p>
                            Powered by <a href="https://subrion.org/" title="Subrion CMS">Subrion CMS v<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['version'];?>
</a><br>
                            Copyright &copy; 2008-<?php echo smarty_modifier_date_format(time(),'%Y');?>
 <a href="https://intelliants.com/" title="Intelligent Web Solutions">Intelliants LLC</a>
                        </p>
                        <p>
                            <a href="<?php echo @constant('IA_URL');?>
" class="back-to-home"><span>←</span> <?php echo iaSmarty::lang(array('key'=>'back_to_homepage'),$_smarty_tpl);?>
</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterBeforeJsDisplay'),$_smarty_tpl);?>

        <?php echo iaSmarty::ia_print_js(array('display'=>'on'),$_smarty_tpl);?>

        <?php echo smarty_function_ia_hooker(array('name'=>'smartyAdminFooterAfterJsDisplay'),$_smarty_tpl);?>

    </body>
</html><?php }} ?>
