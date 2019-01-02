<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:43:34
         compiled from "/var/www/html/subrion/templates/phantom/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19929923125c2377762683a9-63436159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdb9e28679c0dec2b1aca4cd5fbce33451ace6f8' => 
    array (
      0 => '/var/www/html/subrion/templates/phantom/layout.tpl',
      1 => 1487928352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19929923125c2377762683a9-63436159',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'core' => 0,
    'key' => 0,
    'value' => 0,
    'member' => 0,
    '_content_' => 0,
    'manageMode' => 0,
    'previewMode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c23777634bfc8_00834230',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23777634bfc8_00834230')) {function content_5c23777634bfc8_00834230($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_hooker')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.ia_hooker.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_randnum')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.randnum.php';
?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['iso'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['core']->value['language']['direction'];?>
">
	<head>
		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeHeadSection'),$_smarty_tpl);?>


		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<title><?php echo iaSmarty::ia_print_title(array(),$_smarty_tpl);?>
</title>
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-description'];?>
">
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['meta-keywords'];?>
">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="generator" content="Subrion CMS - Open Source Content Management System">
		<meta name="robots" content="index">
		<meta name="robots" content="follow">
		<meta name="revisit-after" content="1 day">
		<base href="<?php echo @constant('IA_URL');?>
">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<link rel="shortcut icon" href="<?php if (!empty($_smarty_tpl->tpl_vars['core']->value['config']['site_favicon'])) {?><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site_favicon'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
favicon.ico<?php }?>">

		<?php echo iaSmarty::ia_add_media(array('files'=>'jquery, subrion, css:main','order'=>0),$_smarty_tpl);?>

		<?php echo iaSmarty::ia_print_js(array('files'=>'_IA_TPL_bootstrap.min, _IA_TPL_skel.min, _IA_TPL_util, _IA_TPL_main','order'=>999),$_smarty_tpl);?>


		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterHeadSection'),$_smarty_tpl);?>


		<?php echo iaSmarty::ia_print_css(array('display'=>'on'),$_smarty_tpl);?>


		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/phantom/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/phantom/css/ie8.css" /><![endif]-->

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

			intelli.pageName = '<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
';

			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['customConfig']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				intelli.config.<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
 = '<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
';
			<?php } ?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</head>

	<body class="page-<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['name'];?>
">
		<div class="hidden">
			<?php echo iaSmarty::ia_blocks(array('block'=>'hidden'),$_smarty_tpl);?>

		</div>
		<div id="wrapper">
			<header id="header">
				<div class="inner">
					<a href="<?php echo @constant('IA_URL');?>
" class="logo">
						<?php if (!empty($_smarty_tpl->tpl_vars['core']->value['config']['site_logo'])) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['site'];?>
">
						<?php } else { ?>
							<span class="symbol"><img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
templates/phantom/images/logo.svg" alt="" /></span><span class="title"><?php echo $_smarty_tpl->tpl_vars['core']->value['config']['logo_text'];?>
</span>
						<?php }?>
					</a>

					<nav>
						<ul>
							<li><a href="#menu">Menu</a></li>
						</ul>
					</nav>
				</div>
			</header>

			<nav id="menu">
				<h2><?php echo iaSmarty::lang(array('key'=>'nav_header'),$_smarty_tpl);?>
</h2>
				<?php echo iaSmarty::ia_blocks(array('block'=>'mainmenu'),$_smarty_tpl);?>


				<?php if ($_smarty_tpl->tpl_vars['member']->value&&$_smarty_tpl->tpl_vars['core']->value['config']['members_enabled']) {?>
					<a href="<?php echo @constant('IA_URL');?>
blog/add/" class="button inverse fit icon fa-pencil"><?php echo iaSmarty::lang(array('key'=>'add_blog_post'),$_smarty_tpl);?>
</a>
				<?php }?>

				<h2><?php echo iaSmarty::lang(array('key'=>'account'),$_smarty_tpl);?>
</h2>
				<?php echo iaSmarty::ia_blocks(array('block'=>'account'),$_smarty_tpl);?>

			</nav>

			<div id="main" class="content">
				<div class="inner">
					<?php if (isset($_GET['elements'])) {?>
						<?php echo $_smarty_tpl->getSubTemplate ('page.elements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

					<?php } else { ?>
						<div class="blocks-top"><?php echo iaSmarty::ia_blocks(array('block'=>'top'),$_smarty_tpl);?>
</div>
						<?php if ('index'!=$_smarty_tpl->tpl_vars['core']->value['page']['name']) {?>
							<div class="content__header clearfix">
								<h1><?php echo $_smarty_tpl->tpl_vars['core']->value['page']['title'];?>
</h1>
								<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeBreadcrumb'),$_smarty_tpl);?>

								<?php echo $_smarty_tpl->getSubTemplate ('breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							</div>

							<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeNotifications'),$_smarty_tpl);?>

							<?php echo $_smarty_tpl->getSubTemplate ('notification.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


							<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontBeforeMainContent'),$_smarty_tpl);?>


							<div class="content__body">
								<?php echo $_smarty_tpl->tpl_vars['_content_']->value;?>

							</div>

							<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontAfterMainContent'),$_smarty_tpl);?>

						<?php }?>
						<div class="blocks-bottom"><?php echo iaSmarty::ia_blocks(array('block'=>'bottom'),$_smarty_tpl);?>
</div>
					<?php }?>
				</div>
			</div>

			<footer id="footer">
				<div class="inner">
					<section>
						<?php echo iaSmarty::ia_blocks(array('block'=>'prefooter'),$_smarty_tpl);?>

					</section>
					<section>
						<h2><?php echo iaSmarty::lang(array('key'=>'follow'),$_smarty_tpl);?>
</h2>
						<ul class="icons">
							<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_twitter']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_twitter'];?>
" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_facebook']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_facebook'];?>
" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_instagram']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_instagram'];?>
" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_dribbble']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_dribbble'];?>
" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_github']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_github'];?>
" class="icon style2 fa-github"><span class="label">GitHub</span></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_500px']) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_500px'];?>
" class="icon style2 fa-500px"><span class="label">500px</span></a></li><?php }?>
							<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['website_social_email']) {?><li><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['website_social_email'];?>
" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li><?php }?>
						</ul>
					</section>
					<ul class="copyright">
						<li>&copy; <?php echo smarty_modifier_date_format($_SERVER['REQUEST_TIME'],'%Y');?>
 <?php echo iaSmarty::lang(array('key'=>'powered_by_subrion'),$_smarty_tpl);?>
</li>
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>
		</div>

		<!-- SYSTEM STUFF -->

		<?php if ($_smarty_tpl->tpl_vars['core']->value['config']['cron']) {?>
			<div style="display: none;">
				<img src="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
cron/?<?php echo smarty_function_randnum(array(),$_smarty_tpl);?>
" width="1" height="1" alt="">
			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['manageMode']->value)) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('visual-mode.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['previewMode']->value)) {?>
			<p><?php echo iaSmarty::lang(array('key'=>'youre_in_preview_mode'),$_smarty_tpl);?>
</p>
		<?php }?>

		<?php echo iaSmarty::ia_print_js(array('display'=>'on'),$_smarty_tpl);?>


		<?php echo smarty_function_ia_hooker(array('name'=>'smartyFrontFinalize'),$_smarty_tpl);?>

	</body>
</html><?php }} ?>
