<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:06:58
         compiled from "module:blog/block.new-posts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5974371185c2360d3005fd1-53992102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49b7f70a9f995a3406839dc5651f5959917e2205' => 
    array (
      0 => 'module:blog/block.new-posts.tpl',
      1 => 1528932894,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '5974371185c2360d3005fd1-53992102',
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
  'unifunc' => 'content_5c2360d30712e2_59998585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2360d30712e2_59998585')) {function content_5c2360d30712e2_59998585($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.truncate.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['block_blog_entries']->value)) {?>
    <div class="new-blog-posts">
        <?php  $_smarty_tpl->tpl_vars['one_blog_entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_blog_entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['block_blog_entries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['one_blog_entry']->key => $_smarty_tpl->tpl_vars['one_blog_entry']->value) {
$_smarty_tpl->tpl_vars['one_blog_entry']->_loop = true;
 $_smarty_tpl->tpl_vars['one_blog_entry']->iteration++;
?>
            <div class="media">
                <?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->value['image']) {?>
                    <a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
"
                       class="media-object pull-left"><?php echo iaSmarty::ia_image(array('file'=>$_smarty_tpl->tpl_vars['one_blog_entry']->value['image'],'width'=>60,'title'=>$_smarty_tpl->tpl_vars['one_blog_entry']->value['title']),$_smarty_tpl);?>
</a>
                <?php }?>
                <div class="media-body">
                    <h5 class="media-heading">
                        <a href="<?php echo @constant('IA_URL');?>
blog/<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['one_blog_entry']->value['alias'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                    </h5>
                    <p class="text-fade-50"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['one_blog_entry']->value['date_added']);?>
 <?php echo iaSmarty::lang(array('key'=>'by'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['one_blog_entry']->value['fullname'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                    <p><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['one_blog_entry']->value['body']),50,'...');?>
</p>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['one_blog_entry']->iteration==$_smarty_tpl->tpl_vars['core']->value['config']['blog_number_new_block']) {?>
                <?php break 1?>
            <?php }?>
        <?php } ?>
    </div>
    <p>
        <a href="<?php echo @constant('IA_URL');?>
blog/"><?php echo iaSmarty::lang(array('key'=>'view_all_blog_entries'),$_smarty_tpl);?>
 &rarr;</a>
    </p>
<?php } else { ?>
    <div class="alert alert-info"><?php echo iaSmarty::lang(array('key'=>'no_blog_entries'),$_smarty_tpl);?>
</div>
<?php }?><?php }} ?>
