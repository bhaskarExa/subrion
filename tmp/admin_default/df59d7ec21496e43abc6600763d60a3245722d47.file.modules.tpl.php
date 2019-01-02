<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 07:41:49
         compiled from "/var/www/html/subrion/admin/templates/default/modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12717942255c23770dd79945-24861470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df59d7ec21496e43abc6600763d60a3245722d47' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/modules.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12717942255c23770dd79945-24861470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'core' => 0,
    'module' => 0,
    'note' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c23770e020501_29594691',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c23770e020501_29594691')) {function content_5c23770e020501_29594691($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.date_format.php';
?><?php if ($_smarty_tpl->tpl_vars['modules']->value) {?>
    <input type="hidden" id="js-default-package-value" value="<?php echo $_smarty_tpl->tpl_vars['core']->value['config']['default_package'];?>
">

    <div class="cards">
        <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
            <div class="card card--module<?php if ($_smarty_tpl->tpl_vars['module']->value['remote']) {?> card--remote<?php } elseif (!$_smarty_tpl->tpl_vars['module']->value['installed']) {?> card--local<?php } elseif ($_smarty_tpl->tpl_vars['module']->value['installed']) {?> card--installed<?php }?> card--<?php echo $_smarty_tpl->tpl_vars['module']->value['status'];?>
">
                <div class="card__item">
                    <?php if ($_smarty_tpl->tpl_vars['module']->value['buttons']) {?>
                        <div class="card__item__actions">
                            <a href="#" class="dropdown-toggle" type="button" data-toggle="dropdown"><span class="fa fa-ellipsis-v"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right has-icons">
                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['docs'])) {?>
                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['buttons']['docs'];?>
" target="_blank"><span class="fa fa-info-circle"></span> <?php echo iaSmarty::lang(array('key'=>'details'),$_smarty_tpl);?>
</a></li>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['readme'])) {?>
                                    <li><a href="#" class="js-cmd-readme" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"><span class="fa fa-book"></span> <?php echo iaSmarty::lang(array('key'=>'documentation'),$_smarty_tpl);?>
</a></li>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['reinstall'])) {?>
                                    <li>
                                        <a href="#" class="js-cmd-reinstall" data-url="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/reinstall/" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"><span class="fa fa-refresh"></span> <?php echo iaSmarty::lang(array('key'=>'reinstall'),$_smarty_tpl);?>
</a>
                                    </li>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['config'])) {?>
                                    <li><a href="<?php echo @constant('IA_ADMIN_URL');?>
configuration/<?php echo $_smarty_tpl->tpl_vars['module']->value['buttons']['config']['url'];?>
/#<?php echo $_smarty_tpl->tpl_vars['module']->value['buttons']['config']['anchor'];?>
"><span class="fa fa-cog"></span> <?php echo iaSmarty::lang(array('key'=>'go_to_config'),$_smarty_tpl);?>
</a></li>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['manage'])) {?>
                                    <li><a href="<?php echo @constant('IA_ADMIN_URL');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['buttons']['manage'];?>
"><span class="fa fa-list"></span> <?php echo iaSmarty::lang(array('key'=>'manage'),$_smarty_tpl);?>
</a></li>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['import'])) {?>
                                    <li><a href="<?php echo @constant('IA_ADMIN_URL');?>
database/import/"><span class="fa fa-database"></span> <?php echo iaSmarty::lang(array('key'=>'import'),$_smarty_tpl);?>
</a></li>
                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['set_default'])) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'set_default')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'set_default'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <?php if ($_smarty_tpl->tpl_vars['core']->value['config']['default_package']!=$_smarty_tpl->tpl_vars['module']->value['name']) {?>
                                            <li><a data-url="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/set_default/" data-action="set_default" href="#" class="js-cmd-reset"><span class="fa fa-refresh"></span> <?php echo iaSmarty::lang(array('key'=>'set_as_default_package'),$_smarty_tpl);?>
</a></li>
                                        <?php } else { ?>
                                            <li><a data-url="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/reset/" data-action="reset" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
" href="#" class="js-cmd-reset"><span class="fa fa-refresh"></span> <?php echo iaSmarty::lang(array('key'=>'reset_default'),$_smarty_tpl);?>
</a></li>
                                        <?php }?>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'set_default'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['upgrade'])) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'upgrade')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'upgrade'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <li><a href="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/upgrade/"><span class="fa fa-arrow-circle-o-up"></span> <?php echo iaSmarty::lang(array('key'=>'upgrade'),$_smarty_tpl);?>
</a></li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'upgrade'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['deactivate'])) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'activate')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'activate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <li><a href="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/deactivate/"><span class="fa fa-power-off"></span> <?php echo iaSmarty::lang(array('key'=>'deactivate'),$_smarty_tpl);?>
</a></li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'activate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['activate'])) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'activate')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'activate'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <li><a href="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/activate/"><span class="fa fa-check-circle"></span> <?php echo iaSmarty::lang(array('key'=>'activate'),$_smarty_tpl);?>
</a></li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'activate'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>

                                <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['uninstall'])) {?>
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'uninstall')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'uninstall'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                                        <li><a href="#" class="js-cmd-uninstall" data-url="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/uninstall/" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
"><span class="fa fa-remove"></span> <?php echo iaSmarty::lang(array('key'=>'uninstall'),$_smarty_tpl);?>
</a></li>
                                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'uninstall'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php }?>
                            </ul>
                        </div>
                    <?php }?>
                    <div class="card__item__image">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['module']->value['logo'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
">
                    </div>
                    <div class="card__item__body">
                        <h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['module']->value['summary'];?>
</p>
                        <div class="card__item__chips">
                            <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['upgrade'])) {?>
                                <span class="chip chip--success"><span class="fa fa-arrow-circle-o-up"></span> <?php echo iaSmarty::lang(array('key'=>'update_available'),$_smarty_tpl);?>
</span>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['notes'])) {?>
                                <span class="chip chip--danger js-tooltip" data-toggle="tooltip" data-html="true" title="<?php  $_smarty_tpl->tpl_vars['note'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['note']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['module']->value['notes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['note']->key => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->_loop = true;
?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['note']->value, ENT_QUOTES, 'UTF-8', true);?>
<br><?php } ?>"><span class="fa fa-warning"></span> <?php echo iaSmarty::lang(array('key'=>'module_required'),$_smarty_tpl);?>
</span>
                            <?php }?>

                            <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['remote'])&&$_smarty_tpl->tpl_vars['module']->value['price']>0) {?>
                                <span class="chip chip--warning"><span class="fa fa-star"></span> Premium $<?php echo $_smarty_tpl->tpl_vars['module']->value['price'];?>
</span>
                            <?php }?>
                            <span class="chip chip--default"><?php echo iaSmarty::lang(array('key'=>'compatibility'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['module']->value['compatibility'];?>
</span>
                        </div>
                    </div>
                </div>

                <div class="card__actions">
                    <span class="card__actions__info">
                        <span class="fa fa-tag"></span> <b><?php echo $_smarty_tpl->tpl_vars['module']->value['version'];?>
</b> &middot; <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['module']->value['date'],$_smarty_tpl->tpl_vars['core']->value['config']['date_format']);?>

                    </span>

                    <?php if (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['install'])) {?>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('access', array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'install')); $_block_repeat=true; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'install'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                            <a href="#" class="btn btn-success btn-xs pull-right js-cmd-install" data-url="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/install/" data-module="<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
" data-remote="<?php echo $_smarty_tpl->tpl_vars['module']->value['remote'];?>
"><?php echo iaSmarty::lang(array('key'=>'install'),$_smarty_tpl);?>
</a>
                        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::access(array('object'=>'admin_page','id'=>$_smarty_tpl->tpl_vars['core']->value['page']['name'],'action'=>'install'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['reinstall'])) {?>
                        <span class="card__actions__status"><span class="fa fa-check"></span> <?php echo iaSmarty::lang(array('key'=>'installed'),$_smarty_tpl);?>
</span>
                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['activate'])) {?>
                        <span class="card__actions__status card__actions__status--inactive"><span class="fa fa-info-circle"></span> <?php echo iaSmarty::lang(array('key'=>'deactivated'),$_smarty_tpl);?>
</span>
                    <?php } elseif (!empty($_smarty_tpl->tpl_vars['module']->value['buttons']['download'])) {?>
                        <a href="<?php echo @constant('IA_SELF');?>
<?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
/download/" class="btn btn-primary btn-xs pull-right"><i class="i-box-add"></i> <?php echo iaSmarty::lang(array('key'=>'download'),$_smarty_tpl);?>
</a>
                    <?php } elseif ($_smarty_tpl->tpl_vars['module']->value['price']>0) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['module']->value['url'];?>
" target="_blank" class="btn btn-default btn-xs pull-right"><?php echo iaSmarty::lang(array('key'=>'view'),$_smarty_tpl);?>
</a>
                    <?php } elseif (empty($_smarty_tpl->tpl_vars['module']->value['buttons']['download'])) {?>
                        <span class="card__actions__status card__actions__status--inactive"><span class="fa fa-info-circle"></span> <?php echo iaSmarty::lang(array('key'=>'unable_to_install'),$_smarty_tpl);?>
</span>
                    <?php }?>
                </div>
            </div>
        <?php } ?>
    </div>

    <?php echo iaSmarty::ia_print_js(array('files'=>'admin/modules'),$_smarty_tpl);?>

<?php } else { ?>
    <div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_modules'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
