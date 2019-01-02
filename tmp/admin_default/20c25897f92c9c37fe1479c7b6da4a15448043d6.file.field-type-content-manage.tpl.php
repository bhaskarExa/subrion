<?php /* Smarty version Smarty-3.1.19, created on 2019-01-01 23:38:42
         compiled from "/var/www/html/subrion/admin/templates/default/field-type-content-manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:685159765c2c405288cd19-74232525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20c25897f92c9c37fe1479c7b6da4a15448043d6' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/field-type-content-manage.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685159765c2c405288cd19-74232525',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'field' => 0,
    'fieldName' => 0,
    'item' => 0,
    'field_before' => 0,
    'core' => 0,
    'name' => 0,
    'type' => 0,
    'tooltip' => 0,
    'field_inner' => 0,
    'iso' => 0,
    'language' => 0,
    'value' => 0,
    'default_date' => 0,
    'id' => 0,
    'pageAction' => 0,
    'entry' => 0,
    'i' => 0,
    'k' => 0,
    'v' => 0,
    'max_num' => 0,
    '_field' => 0,
    '_values' => 0,
    '_value' => 0,
    'radios' => 0,
    'checkboxes' => 0,
    'field_after' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c2c405311d7a2_96103432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c2c405311d7a2_96103432')) {function content_5c2c405311d7a2_96103432($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ia_html_file')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.ia_html_file.php';
if (!is_callable('smarty_function_html_options')) include '/var/www/html/subrion/includes/smarty/plugins/function.html_options.php';
if (!is_callable('smarty_function_html_radios')) include '/var/www/html/subrion/includes/smarty/plugins/function.html_radios.php';
if (!is_callable('smarty_function_html_checkboxes')) include '/var/www/html/subrion/includes/smarty/plugins/function.html_checkboxes.php';
?><?php $_smarty_tpl->tpl_vars['type'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['type'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['fieldName'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['name'], null, 0);?>
<?php $_smarty_tpl->tpl_vars['name'] = new Smarty_variable("field_".((string)$_smarty_tpl->tpl_vars['field']->value['item'])."_".((string)$_smarty_tpl->tpl_vars['field']->value['name']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['fieldName']->value], null, 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['field_before']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?><?php echo $_smarty_tpl->tpl_vars['field_before']->value[$_smarty_tpl->tpl_vars['fieldName']->value];?>
<?php }?>

<div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_fieldzone" class="row <?php echo $_smarty_tpl->tpl_vars['field']->value['relation'];?>
">
    <div class="col col-lg-2">
        <?php if ($_smarty_tpl->tpl_vars['field']->value['multilingual']&&count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?>
            <div class="btn-group btn-group-xs translate-group-actions">
                <button type="button" class="btn btn-default js-edit-lang-group" data-group="#language-group-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"><span class="i-earth"></span></button>
                <button type="button" class="btn btn-default js-copy-lang-group" data-group="#language-group-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['field']->value['use_editor']) {?> data-wysiwyg-enabled="true" data-name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"<?php }?>><span class="i-copy"></span></button>
            </div>
        <?php }?>
        <label class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?><?php echo iaSmarty::lang(array('key'=>'field_required'),$_smarty_tpl);?>
<?php }?></label>
        <?php if ((iaField::PICTURES==$_smarty_tpl->tpl_vars['type']->value||iaField::IMAGE==$_smarty_tpl->tpl_vars['type']->value)&&!$_smarty_tpl->tpl_vars['field']->value['timepicker']) {?>
            <div class="help-block">
                <?php echo iaSmarty::lang(array('key'=>'thumb_dimensions'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['field']->value['thumb_width'];?>
x<?php echo $_smarty_tpl->tpl_vars['field']->value['thumb_height'];?>
<br>
                <?php echo iaSmarty::lang(array('key'=>'image_dimensions'),$_smarty_tpl);?>
: <?php echo $_smarty_tpl->tpl_vars['field']->value['image_width'];?>
x<?php echo $_smarty_tpl->tpl_vars['field']->value['image_height'];?>

            </div>
        <?php }?>
        <?php ob_start();?><?php echo iaSmarty::lang(array('key'=>"field_tooltip_".((string)$_smarty_tpl->tpl_vars['field']->value['item'])."_".((string)$_smarty_tpl->tpl_vars['field']->value['name']),'default'=>''),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['tooltip'] = new Smarty_variable($_tmp1, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><div class="help-block"><?php echo $_smarty_tpl->tpl_vars['tooltip']->value;?>
</div><?php }?>
    </div>

    <?php if (iaField::TEXTAREA==$_smarty_tpl->tpl_vars['type']->value||iaField::PICTURES==$_smarty_tpl->tpl_vars['type']->value) {?>
        <div class="col col-lg-8">
    <?php } else { ?>
        <div class="col col-lg-4">
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['field_inner']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?>
        <?php echo $_smarty_tpl->tpl_vars['field_inner']->value[$_smarty_tpl->tpl_vars['fieldName']->value];?>

    <?php } else { ?>

    <?php switch ($_smarty_tpl->tpl_vars['type']->value){?>
<?php case iaField::TEXT:?>
            <?php if ($_smarty_tpl->tpl_vars['field']->value['multilingual']) {?>
                <div class="translate-group" id="language-group-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
">
                    <div class="translate-group__default">
                        <div class="translate-group__item">
                            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php if (empty($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'])])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'])], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
">
                            <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?><div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['masterLanguage']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>
                        </div>
                    </div>
                    <div class="translate-group__langs">
                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['code']) {?>
                                <div class="translate-group__item">
                                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
" value="<?php if (empty($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['iso']->value)])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['iso']->value)], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
">
                                    <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                                </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
            <?php } else { ?>
                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
">
            <?php }?>

        <?php break;?><?php case iaField::DATE:?>
            <?php ob_start();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['default_date'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value&&!in_array($_smarty_tpl->tpl_vars['value']->value,array('0000-00-00','0000-00-00 00:00:00')) ? $_tmp2 : '', null, 0);?>

            <div class="input-group date" id="field_date_<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
">
                <input type="text" class="js-datepicker" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['default_date']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['field']->value['timepicker']) {?>data-date-format="YYYY-MM-DD HH:mm:ss"<?php } else { ?>data-date-format="YYYY-MM-DD"<?php }?>>
                <span class="input-group-addon js-datepicker-toggle"><i class="i-calendar"></i></span>
            </div>

        <?php break;?><?php case iaField::NUMBER:?>
            <input class="js-filter-numeric" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
">

        <?php break;?><?php case iaField::CURRENCY:?>
            <div class="input-group col-md-8">
                <span class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['defaultCurrency']['code'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                <input class="form-control span2 js-filter-numeric" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['value']->value) {?> value="<?php echo floatval($_smarty_tpl->tpl_vars['value']->value);?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" maxlength="<?php echo $_smarty_tpl->tpl_vars['field']->value['length']+2;?>
">
            </div>

        <?php break;?><?php case iaField::URL:?>
            <?php if (!is_array($_smarty_tpl->tpl_vars['value']->value)) {?>
                <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable(explode('|',$_smarty_tpl->tpl_vars['value']->value), null, 0);?>
            <?php }?>
            <div class="row control-group-inner">
                <div class="col col-lg-6">
                    <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[url]" class="control-label"><?php echo iaSmarty::lang(array('key'=>'url'),$_smarty_tpl);?>
:</label>
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[url]" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['url'])) {?><?php echo $_smarty_tpl->tpl_vars['value']->value['url'];?>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['value']->value[0])) {?><?php echo $_smarty_tpl->tpl_vars['value']->value[0];?>
<?php } else { ?>http://<?php }?>">
                </div>

                <div class="col col-lg-6">
                    <label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[title]" class="control-label"><?php echo iaSmarty::lang(array('key'=>'title'),$_smarty_tpl);?>
:</label>
                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
[title]" value="<?php if (isset($_smarty_tpl->tpl_vars['value']->value['title'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
<?php } elseif (!empty($_smarty_tpl->tpl_vars['value']->value[1])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value[1], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>">
                    <p class="help-block">(<?php echo iaSmarty::lang(array('key'=>'optional'),$_smarty_tpl);?>
)</p>
                </div>
            </div>

        <?php break;?><?php case iaField::ICONPICKER:?>
            <?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_smarty_tpl->tpl_vars['value']->value ? $_smarty_tpl->tpl_vars['value']->value : 'fa-folder', null, 0);?>
            <div class="input-group iconpicker-container">
                <input type="text" data-placement="bottomRight" class="js-iconpicker" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
">
                <span class="input-group-addon"><i class="fa <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"></i></span>
            </div>

        <?php break;?><?php case iaField::TEXTAREA:?>
            <?php if (!$_smarty_tpl->tpl_vars['field']->value['use_editor']) {?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['multilingual']) {?>
                <div class="translate-group" id="language-group-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
">
                    <div class="translate-group__default">
                        <div class="translate-group__item">
                            <textarea name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'];?>
]" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" rows="5"><?php if (empty($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'])])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'])], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                            <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?><div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['masterLanguage']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>
                        </div>
                    </div>
                    <div class="translate-group__langs">
                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso']) {?>
                            <div class="translate-group__item">
                                <textarea name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
]" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['iso']->value;?>
" rows="5"><?php if (empty($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['iso']->value)])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['default'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['iso']->value)], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                                <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
                <?php } else { ?>
                <textarea name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" rows="8" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['length']>0) {?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function($)
{
    $('#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
').dodosTextCounter(<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
,
    {
        counterDisplayElement: 'span',
        counterDisplayClass: 'textcounter_<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
',
        addLineBreak: false
    });

    $('.textcounter_<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
').wrap('<p class="help-block text-right">').addClass('textcounter').after(' ' + _t('chars_left'));
});
                    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    <?php echo iaSmarty::ia_print_js(array('files'=>'jquery/plugins/jquery.textcounter'),$_smarty_tpl);?>

                <?php }?>
                <?php }?>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['field']->value['multilingual']) {?>
                <div class="translate-group" id="language-group-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
">
                    <div class="translate-group__default">
                        <div class="translate-group__item">
                            <?php ob_start();?><?php echo empty($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'])]) ? $_smarty_tpl->tpl_vars['field']->value['default'] : $_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'])];?>
<?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_tmp3, null, 0);?>
                            <?php echo iaSmarty::ia_wysiwyg(array('value'=>$_smarty_tpl->tpl_vars['value']->value,'name'=>((string)$_smarty_tpl->tpl_vars['fieldName']->value)."[".((string)$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso'])."]",'id'=>((string)$_smarty_tpl->tpl_vars['name']->value)),$_smarty_tpl);?>

                            <?php if (count($_smarty_tpl->tpl_vars['core']->value['languages'])>1) {?><div class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['core']->value['masterLanguage']['title'], ENT_QUOTES, 'UTF-8', true);?>
</div><?php }?>
                        </div>
                    </div>
                    <div class="translate-group__langs">
                        <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['iso'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['core']->value['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['iso']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
                            <?php if ($_smarty_tpl->tpl_vars['iso']->value!=$_smarty_tpl->tpl_vars['core']->value['masterLanguage']['iso']) {?>
                            <div class="translate-group__item">
                                <?php ob_start();?><?php echo empty($_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['iso']->value)]) ? $_smarty_tpl->tpl_vars['field']->value['default'] : $_smarty_tpl->tpl_vars['item']->value[((string)$_smarty_tpl->tpl_vars['fieldName']->value)."_".((string)$_smarty_tpl->tpl_vars['iso']->value)];?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['value'] = new Smarty_variable($_tmp4, null, 0);?>
                                <?php echo iaSmarty::ia_wysiwyg(array('value'=>$_smarty_tpl->tpl_vars['value']->value,'name'=>((string)$_smarty_tpl->tpl_vars['fieldName']->value)."[".((string)$_smarty_tpl->tpl_vars['iso']->value)."]",'id'=>((string)$_smarty_tpl->tpl_vars['name']->value)."-".((string)$_smarty_tpl->tpl_vars['iso']->value)),$_smarty_tpl);?>

                                <span class="translate-group__item__code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </div>
                            <?php }?>
                        <?php } ?>
                    </div>
                </div>
                <?php } else { ?>
                    <?php echo iaSmarty::ia_wysiwyg(array('value'=>$_smarty_tpl->tpl_vars['value']->value,'name'=>$_smarty_tpl->tpl_vars['field']->value['name']),$_smarty_tpl);?>

                <?php }?>
            <?php }?>

        <?php break;?><?php case iaField::IMAGE:?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_dropzone" class="js-dropzone s-dropzone dropzone"
                data-item="<?php echo $_smarty_tpl->tpl_vars['field']->value['item'];?>
" data-item_id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? '' : $tmp);?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-imagetype-primary="<?php echo $_smarty_tpl->tpl_vars['field']->value['imagetype_primary'];?>
"
                data-imagetype-thumbnail="<?php echo $_smarty_tpl->tpl_vars['field']->value['imagetype_thumbnail'];?>
" data-max_num="1" data-submit_btn_text="<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?>add<?php } else { ?>save<?php }?>"
                data-values='<?php if ($_smarty_tpl->tpl_vars['value']->value) {?><?php echo json_encode(array($_smarty_tpl->tpl_vars['value']->value),4);?>
<?php }?>'></div>
            <?php echo iaSmarty::ia_add_media(array('files'=>'css: _IA_URL_js/dropzone/dropzone'),$_smarty_tpl);?>

            <?php echo iaSmarty::ia_print_js(array('files'=>'dropzone/dropzone'),$_smarty_tpl);?>


        <?php break;?><?php case iaField::PICTURES:?>
            <div id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_dropzone" class="js-dropzone s-dropzone dropzone"
                data-item="<?php echo $_smarty_tpl->tpl_vars['field']->value['item'];?>
" data-item_id="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['id']->value)===null||$tmp==='' ? '' : $tmp);?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-imagetype-primary="<?php echo $_smarty_tpl->tpl_vars['field']->value['imagetype_primary'];?>
"
                data-imagetype-thumbnail="<?php echo $_smarty_tpl->tpl_vars['field']->value['imagetype_thumbnail'];?>
" data-max_num="<?php echo $_smarty_tpl->tpl_vars['field']->value['length'];?>
" data-submit_btn_text="<?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?>add<?php } else { ?>save<?php }?>"
                data-values='<?php if ($_smarty_tpl->tpl_vars['value']->value) {?><?php echo json_encode(array_values($_smarty_tpl->tpl_vars['value']->value),4);?>
<?php }?>'></div>
            <?php echo iaSmarty::ia_add_media(array('files'=>'css: _IA_URL_js/dropzone/dropzone'),$_smarty_tpl);?>

            <?php echo iaSmarty::ia_print_js(array('files'=>'dropzone/dropzone'),$_smarty_tpl);?>


        <?php break;?><?php case iaField::STORAGE:?>
            <?php if ($_smarty_tpl->tpl_vars['value']->value) {?>
                <div class="uploads-list" id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_upload_list">
                    <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['entry']->key;
 $_smarty_tpl->tpl_vars['entry']->index++;
?>
                        <div class="uploads-list-item">
                            <span class="uploads-list-item__thumb uploads-list-item__thumb--file"><i class="i-file-2"></i></span>
                            <div class="uploads-list-item__body">
                                <div class="input-group">
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['entry']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                    <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php } ?>
                                    <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][title]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['entry']->index;?>
">

                                    <span class="input-group-btn">
                                        <a class="btn btn-success uploads-list-item__img" href="<?php echo $_smarty_tpl->tpl_vars['core']->value['page']['nonProtocolUrl'];?>
uploads/<?php echo $_smarty_tpl->tpl_vars['entry']->value['path'];?>
<?php echo $_smarty_tpl->tpl_vars['entry']->value['file'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" download><i class="i-box-add"></i></a>
                                        <a class="btn btn-danger js-cmd-delete-file" href="#" title="<?php echo iaSmarty::lang(array('key'=>'delete'),$_smarty_tpl);?>
" data-file="<?php echo $_smarty_tpl->tpl_vars['entry']->value['file'];?>
" data-item="<?php echo $_smarty_tpl->tpl_vars['field']->value['item'];?>
" data-field="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><span class="fa fa-remove"></span></a>
                                        <span class="btn btn-default uploads-list-item__drag-handle"><span class="fa fa-reorder"></span></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
    var params = {
        handle: '.uploads-list-item__drag-handle'
    }

    intelli.sortable('<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
_upload_list', params);
});
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>


                <?php $_smarty_tpl->tpl_vars['max_num'] = new Smarty_variable(($_smarty_tpl->tpl_vars['field']->value['length']-count($_smarty_tpl->tpl_vars['value']->value)), null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['max_num'] = new Smarty_variable($_smarty_tpl->tpl_vars['field']->value['length'], null, 0);?>
            <?php }?>

            <?php echo smarty_function_ia_html_file(array('name'=>$_smarty_tpl->tpl_vars['fieldName']->value,'id'=>$_smarty_tpl->tpl_vars['fieldName']->value,'multiple'=>true,'max_num'=>$_smarty_tpl->tpl_vars['max_num']->value,'title'=>true),$_smarty_tpl);?>


        <?php break;?><?php case iaField::COMBO:?>
            <select name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                <option value=""><?php echo iaSmarty::lang(array('key'=>'_select_'),$_smarty_tpl);?>
</option>
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['field']->value['values'],'selected'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>

            </select>

            <?php if ('parent'==$_smarty_tpl->tpl_vars['field']->value['relation']&&$_smarty_tpl->tpl_vars['field']->value['children']) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
    $('<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone<?php if (!$_smarty_tpl->tpl_vars['_values']->last) {?>, <?php }?><?php } ?>').addClass('hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
');
    $('#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
').on('change', function()
    {
        var value = $(this).val();
        $('.hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
').hide();
        <?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>
        if ($.inArray(value, [<?php  $_smarty_tpl->tpl_vars['_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_value']->key => $_smarty_tpl->tpl_vars['_value']->value) {
$_smarty_tpl->tpl_vars['_value']->_loop = true;
 $_smarty_tpl->tpl_vars['_value']->iteration++;
 $_smarty_tpl->tpl_vars['_value']->last = $_smarty_tpl->tpl_vars['_value']->iteration === $_smarty_tpl->tpl_vars['_value']->total;
?>'<?php echo $_smarty_tpl->tpl_vars['_value']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['_value']->last) {?>,<?php }?><?php } ?>])!=-1) $('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').show();
        <?php } ?>
        $('fieldset').show().each(function(index, item)
        {
            if ($('.fieldset-wrapper', item).length > 0)
            {
                $('.fieldset-wrapper div.fieldzone:visible, .fieldset-wrapper div.fieldzone.regular', item).length == 0
                    ? $(this).hide()
                    : $(this).show();
            }
        });
    }).change();
});
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>

        <?php break;?><?php case iaField::RADIO:?>
            <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['values'])) {?>
                <?php echo smarty_function_html_radios(array('assign'=>'radios','name'=>$_smarty_tpl->tpl_vars['fieldName']->value,'options'=>$_smarty_tpl->tpl_vars['field']->value['values'],'selected'=>$_smarty_tpl->tpl_vars['value']->value,'separator'=>'</div>'),$_smarty_tpl);?>


                <div class="radio"><?php echo implode('<div class="radio">',$_smarty_tpl->tpl_vars['radios']->value);?>

            <?php }?>

            <?php if (iaField::RELATION_PARENT==$_smarty_tpl->tpl_vars['field']->value['relation']&&$_smarty_tpl->tpl_vars['field']->value['children']) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
    $('<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone<?php if (!$_smarty_tpl->tpl_vars['_values']->last) {?>, <?php }?><?php } ?>').addClass('hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
');
    $('input[name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
"]').on('change', function()
    {
        var $this = $(this),
            value = $this.val();

        if ($this.is(':checked'))
        {
            <?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>
                if ($.inArray(value, [<?php  $_smarty_tpl->tpl_vars['_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_value']->key => $_smarty_tpl->tpl_vars['_value']->value) {
$_smarty_tpl->tpl_vars['_value']->_loop = true;
 $_smarty_tpl->tpl_vars['_value']->iteration++;
 $_smarty_tpl->tpl_vars['_value']->last = $_smarty_tpl->tpl_vars['_value']->iteration === $_smarty_tpl->tpl_vars['_value']->total;
?>'<?php echo $_smarty_tpl->tpl_vars['_value']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['_value']->last) {?>,<?php }?><?php } ?>])!=-1)
                {
                    $('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').show();
                }
                else
                {
                    $('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').hide();
                }
            <?php } ?>
        }
    }).change();
});
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>

        <?php break;?><?php case iaField::CHECKBOX:?>
            <?php if (!empty($_smarty_tpl->tpl_vars['field']->value['values'])) {?>
                <?php echo smarty_function_html_checkboxes(array('assign'=>'checkboxes','name'=>$_smarty_tpl->tpl_vars['fieldName']->value,'options'=>$_smarty_tpl->tpl_vars['field']->value['values'],'selected'=>$_smarty_tpl->tpl_vars['value']->value,'separator'=>'</div>'),$_smarty_tpl);?>


                <div class="checkbox"><?php echo implode('<div class="checkbox">',$_smarty_tpl->tpl_vars['checkboxes']->value);?>

            <?php }?>

            <?php if (iaField::RELATION_PARENT==$_smarty_tpl->tpl_vars['field']->value['relation']&&$_smarty_tpl->tpl_vars['field']->value['children']) {?>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
    $('<?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone<?php if (!$_smarty_tpl->tpl_vars['_values']->last) {?>, <?php }?><?php } ?>').addClass('hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
');
    $('input[name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
[]"]').on('change', function()
    {
        $('.hide_<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
').hide();

        $('input[type="checkbox"]:checked', '#type_fieldzone').each(function()
        {
            var value = $(this).val();

            <?php  $_smarty_tpl->tpl_vars['_values'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_values']->_loop = false;
 $_smarty_tpl->tpl_vars['_field'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_values']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_values']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_values']->key => $_smarty_tpl->tpl_vars['_values']->value) {
$_smarty_tpl->tpl_vars['_values']->_loop = true;
 $_smarty_tpl->tpl_vars['_field']->value = $_smarty_tpl->tpl_vars['_values']->key;
 $_smarty_tpl->tpl_vars['_values']->iteration++;
 $_smarty_tpl->tpl_vars['_values']->last = $_smarty_tpl->tpl_vars['_values']->iteration === $_smarty_tpl->tpl_vars['_values']->total;
?>
                if ($.inArray(value, [<?php  $_smarty_tpl->tpl_vars['_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['_values']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['_value']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['_value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['_value']->key => $_smarty_tpl->tpl_vars['_value']->value) {
$_smarty_tpl->tpl_vars['_value']->_loop = true;
 $_smarty_tpl->tpl_vars['_value']->iteration++;
 $_smarty_tpl->tpl_vars['_value']->last = $_smarty_tpl->tpl_vars['_value']->iteration === $_smarty_tpl->tpl_vars['_value']->total;
?>'<?php echo $_smarty_tpl->tpl_vars['_value']->value;?>
'<?php if (!$_smarty_tpl->tpl_vars['_value']->last) {?>,<?php }?><?php } ?>])!=-1) $('#<?php echo $_smarty_tpl->tpl_vars['_field']->value;?>
_fieldzone').show();
            <?php } ?>
        });
    }).change();
});
                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            <?php }?>

        <?php break;?><?php case iaField::TREE:?>
            <input type="text" id="label-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" disabled>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" id="input-<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <div class="js-tree categories-tree" data-field="<?php echo $_smarty_tpl->tpl_vars['fieldName']->value;?>
" data-nodes="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['values'], ENT_QUOTES, 'UTF-8', true);?>
" data-multiple="<?php echo $_smarty_tpl->tpl_vars['field']->value['timepicker'];?>
"></div>
            <?php echo iaSmarty::ia_add_media(array('files'=>'tree'),$_smarty_tpl);?>

            <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array('order'=>5)); $_block_repeat=true; echo iaSmarty::ia_add_js(array('order'=>5), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function()
{
    'use strict';

    $('.js-tree').each(function()
    {
        var data = $(this).data(),
            options = { core:{ data: data.nodes, multiple: data.multiple}};

        if (data.multiple) options.plugins = ['checkbox'];

        $(this).jstree(options)
        .on('changed.jstree', function(e, d)
        {
            var nodes = [], ids = [];
            for (var i = 0; i < d.selected.length; i++)
            {
                var node = d.instance.get_node(d.selected[i]);
                nodes.push(node.text.trim());
                ids.push(node.id);
            }

            var fieldName = $(this).data('field');

            $('#label-' + fieldName).val(nodes.join(', '));
            $('#input-' + fieldName).val(ids.join(', '));
        })
        .on('ready.jstree', function(e, d)
        {
            var nodes = $('#input-' + $(this).data('field')).val().split(',');
            d.instance.open_all();
            for (var i in nodes)
            {
                d.instance.select_node(nodes[i]);
            }
        })
    });
});
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array('order'=>5), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    <?php }?>
    <?php }?>
    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['field_after']->value[$_smarty_tpl->tpl_vars['fieldName']->value])) {?><?php echo $_smarty_tpl->tpl_vars['field_after']->value[$_smarty_tpl->tpl_vars['fieldName']->value];?>
<?php }?><?php }} ?>
