<?php /* Smarty version Smarty-3.1.19, created on 2018-12-26 06:05:05
         compiled from "/var/www/html/subrion/admin/templates/default/fields-system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9028519965c236061ca1720-27190036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04cc8156f911a93d2d9fed8a99acc390bb2a2f07' => 
    array (
      0 => '/var/www/html/subrion/admin/templates/default/fields-system.tpl',
      1 => 1528932894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9028519965c236061ca1720-27190036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'noSystemFields' => 0,
    'fieldset_before' => 0,
    'item' => 0,
    'plans' => 0,
    'plan' => 0,
    'core' => 0,
    'noSponsoredEnd' => 0,
    'noFeaturedEnd' => 0,
    'datetime' => 0,
    'datevalue' => 0,
    'statuses' => 0,
    'status' => 0,
    'fieldset_after' => 0,
    'ugp' => 0,
    'ugp_modified' => 0,
    'entry' => 0,
    'noControls' => 0,
    'pageAction' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c236061e73050_59672273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c236061e73050_59672273')) {function content_5c236061e73050_59672273($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radio_switcher')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.html_radio_switcher.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/html/subrion/includes/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_ia_hooker')) include '/var/www/html/subrion/includes/smarty/intelli_plugins/function.ia_hooker.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['noSystemFields']->value)) {?>
<div class="wrap-group">
    <div class="wrap-group-heading"><?php echo iaSmarty::lang(array('key'=>'system_fields'),$_smarty_tpl);?>
</div>

    <?php if (isset($_smarty_tpl->tpl_vars['fieldset_before']->value['systems'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset_before']->value['systems'];?>
<?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['owner'])) {?>
        <div class="row">
            <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'owner'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <input type="text" autocomplete="off" id="js-owner-autocomplete" name="owner" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['owner'], ENT_QUOTES, 'UTF-8', true);?>
" maxlength="255">
                <input type="hidden" name="member_id" id="member-id"<?php if (!empty($_smarty_tpl->tpl_vars['item']->value['member_id'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['item']->value['member_id'];?>
"<?php }?>>
            </div>
        </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['sponsored'])&&!is_null($_smarty_tpl->tpl_vars['item']->value['sponsored'])) {?>
        <div class="row">
            <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'sponsored'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <?php echo smarty_function_html_radio_switcher(array('value'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['sponsored'])===null||$tmp==='' ? 0 : $tmp),'name'=>'sponsored'),$_smarty_tpl);?>

            </div>
        </div>

        <div class="row" id="plans"<?php if ($_smarty_tpl->tpl_vars['item']->value['sponsored']!=1) {?> style="display: none;"<?php }?>>
            <label class="col col-lg-2 control-label" for="input-plan"><?php echo iaSmarty::lang(array('key'=>'plan'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <?php if (!empty($_smarty_tpl->tpl_vars['plans']->value)) {?>
                    <select name="plan_id" id="input-plan">
                        <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['plan']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['sponsored_plan_id'])&&$_smarty_tpl->tpl_vars['plan']->value['id']==$_smarty_tpl->tpl_vars['item']->value['sponsored_plan_id']) {?> selected<?php }?> data-date="<?php echo $_smarty_tpl->tpl_vars['plan']->value['defaultEndDate'];?>
"><?php echo iaSmarty::lang(array('key'=>"plan_title_".((string)$_smarty_tpl->tpl_vars['plan']->value['id'])),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['core']->value['config']['currency'];?>
 <?php echo $_smarty_tpl->tpl_vars['plan']->value['cost'];?>
</option>
                        <?php } ?>
                    </select>
                <?php } else { ?>
                    <span class="label label-info"><?php echo iaSmarty::lang(array('key'=>'no_plans'),$_smarty_tpl);?>
</span>
                <?php }?>
            </div>
        </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['plans']->value)&&!isset($_smarty_tpl->tpl_vars['noSponsoredEnd']->value)) {?>
            <div class="row" id="js-row-sponsored-end"<?php if ($_smarty_tpl->tpl_vars['item']->value['sponsored']!=1) {?> style="display:none"<?php }?>>
                <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'sponsored_end'),$_smarty_tpl);?>
</label>

                <div class="col col-lg-4">
                    <div class="input-group">
                        <input size="16" type="text" class="js-datepicker" value="<?php if (isset($_smarty_tpl->tpl_vars['item']->value['sponsored_end'])) {?><?php echo $_smarty_tpl->tpl_vars['item']->value['sponsored_end'];?>
<?php }?>" data-date-format="YYYY-MM-DD HH:mm" name="sponsored_end" readonly>
                        <span class="input-group-addon js-datepicker-toggle"><i class="i-calendar"></i></span>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['featured'])) {?>
        <div class="row">
            <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'featured'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <?php echo smarty_function_html_radio_switcher(array('name'=>'featured','value'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['featured'])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

            </div>
        </div>

        <div class="row"<?php if (!isset($_smarty_tpl->tpl_vars['noFeaturedEnd']->value)) {?> id="js-row-featured-end"<?php }?><?php if (!$_smarty_tpl->tpl_vars['item']->value['featured']||isset($_smarty_tpl->tpl_vars['noFeaturedEnd']->value)) {?> style="display:none;"<?php }?>>
            <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'featured_end'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <div class="input-group">
                    <input type="text" class="js-datepicker" name="featured_end" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['featured_end'];?>
" data-date-format="YYYY-MM-DD HH:mm">
                    <span class="input-group-addon js-datepicker-toggle"><i class="i-calendar"></i></span>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['locked'])) {?>
        <div class="row">
            <label class="col col-lg-2 control-label"><?php echo iaSmarty::lang(array('key'=>'locked'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <?php echo smarty_function_html_radio_switcher(array('name'=>'locked','value'=>(($tmp = @$_smarty_tpl->tpl_vars['item']->value['locked'])===null||$tmp==='' ? 0 : $tmp)),$_smarty_tpl);?>

            </div>
        </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['date_added'])) {?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'datevalue', null); ob_start(); ?>
            <?php if (isset($_smarty_tpl->tpl_vars['datetime']->value)) {?>
                value="<?php if ($_smarty_tpl->tpl_vars['item']->value['date_added']!='0000-00-00 00:00:00') {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_added'],'%Y-%m-%d %H:%M');?>
<?php }?>" data-date-format="YYYY-MM-DD HH:mm:ss"
            <?php } else { ?>
                value="<?php if ($_smarty_tpl->tpl_vars['item']->value['date_added']!='0000-00-00 00:00:00') {?><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['date_added'],'%Y-%m-%d');?>
<?php }?>"
            <?php }?>
        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, array("$_capture_buffer" => ob_get_contents()), true);
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

        <div class="row">
            <label class="col col-lg-2 control-label" for="field_date_added"><?php echo iaSmarty::lang(array('key'=>'date_added'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <div class="input-group">
                    <input type="text" class="datepicker js-datepicker" name="date_added" id="field_date_added" <?php echo $_smarty_tpl->tpl_vars['datevalue']->value;?>
>
                    <span class="input-group-addon js-datepicker-toggle"><i class="i-calendar"></i></span>
                </div>
            </div>
        </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['item']->value['status'])) {?>
        <?php if (!isset($_smarty_tpl->tpl_vars['statuses']->value)) {?>
            <?php $_smarty_tpl->tpl_vars['statuses'] = new Smarty_variable(array(iaCore::STATUS_ACTIVE,iaCore::STATUS_INACTIVE), null, 0);?>
        <?php }?>

        <div class="row">
            <label class="col col-lg-2 control-label" for="status"><?php echo iaSmarty::lang(array('key'=>'status'),$_smarty_tpl);?>
</label>

            <div class="col col-lg-4">
                <select name="status" id="status">
                <?php  $_smarty_tpl->tpl_vars['status'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['status']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['statuses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['status']->key => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['item']->value['status'])&&$_smarty_tpl->tpl_vars['item']->value['status']==$_smarty_tpl->tpl_vars['status']->value) {?> selected<?php } elseif (isset($_POST['status'])&&$_POST['status']==$_smarty_tpl->tpl_vars['status']->value) {?> selected<?php }?>><?php echo iaSmarty::lang(array('key'=>$_smarty_tpl->tpl_vars['status']->value),$_smarty_tpl);?>
</option>
                <?php } ?>
                </select>
            </div>
        </div>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['fieldset_after']->value['systems'])) {?><?php echo $_smarty_tpl->tpl_vars['fieldset_after']->value['systems'];?>
<?php }?>

    <?php echo iaSmarty::ia_add_media(array('files'=>'moment, datepicker'),$_smarty_tpl);?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function(){
    var $sponsoredEnd = $('input[name="sponsored_end"]'),
        $inputPlan = $('#input-plan');

    $inputPlan.on('change', function(){
        $sponsoredEnd.data('DateTimePicker').date($('option:selected', this).data('date'));
    });

    if ('' == $sponsoredEnd.val()){
        $inputPlan.trigger('change');
    }
    // sponsored switchers
    $('input[name="sponsored"]').on('change', function(){
        (1 == this.value) ? $('#plans, #js-row-sponsored-end').show() : $('#plans, #js-row-sponsored-end').hide();
    });

    // featured switchers
    $('input[name="featured"]').on('change', function(){
        (1 == this.value) ? $('#js-row-featured-end').show() : $('#js-row-featured-end').hide();
    });

    var objects = [];
        var items = [];

    $('#js-owner-autocomplete').typeahead({
        source: function(query, process){
            $.ajax({
                url: intelli.config.url + 'actions.json',
                type: 'get',
                dataType: 'json',
                data: { q: query, action: 'assign-owner' },
                success: function(response){
                    objects = items = [];
                    $.each(response, function(i, object){
                        items[object.fullname] = object;
                        objects.push(object.fullname);
                    });

                    return process(objects);
                }
            })
        },
        updater: function(item){
            $('#member-id').val(items[item].id);
            return item;
        },
        matcher: function(){
            return true;
        }
    });
});
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['ugp']->value)) {?>
<div class="widget widget-default<?php if (!$_smarty_tpl->tpl_vars['ugp_modified']->value) {?> collapsed<?php }?>" id="widget-permissions">
    <div class="widget-header"><i class="i-equalizer"></i> <?php echo iaSmarty::lang(array('key'=>'permissions'),$_smarty_tpl);?>

        <ul class="nav nav-pills pull-right">
            <li><a href="<?php echo @constant('IA_ADMIN_URL');?>
permissions/"><i class="i-users-2"></i> <?php echo iaSmarty::lang(array('key'=>'usergroup_management'),$_smarty_tpl);?>
</a></li>
            <li><a href="#" class="widget-toggle"><i class="i-chevron-up"></i></a></li>
        </ul>
    </div>
    <div class="widget-content">
        <ul class="widget-system-panel">
            <li><a href="#" rel="1"<?php if (!$_smarty_tpl->tpl_vars['ugp_modified']->value) {?> class="disabled"<?php }?>><?php echo iaSmarty::lang(array('key'=>'select_all'),$_smarty_tpl);?>
</a></li>
            <li><a href="#" rel="0"<?php if (!$_smarty_tpl->tpl_vars['ugp_modified']->value) {?> class="disabled"<?php }?>><?php echo iaSmarty::lang(array('key'=>'select_none'),$_smarty_tpl);?>
</a></li>
            <li><label class="checkbox"><input type="checkbox" name="permissions_defaults" id="input-ugp-default"<?php if (!$_smarty_tpl->tpl_vars['ugp_modified']->value) {?> checked<?php }?>> <?php echo iaSmarty::lang(array('key'=>'restore_defaults'),$_smarty_tpl);?>
</label></li>
        </ul>

        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ugp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
        <div class="row">
            <label class="col col-lg-2"><?php echo $_smarty_tpl->tpl_vars['entry']->value['title'];?>
<?php if (!$_smarty_tpl->tpl_vars['entry']->value['system']) {?> <i class="i-tools" title=""></i><?php }?></label>

            <div class="col col-lg-4 p-table__actions js-toggler-group" data-id="<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" data-default-access="<?php echo $_smarty_tpl->tpl_vars['entry']->value['default'];?>
">
                <input type="hidden" id="js-ugp-<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
" name="permissions[<?php echo $_smarty_tpl->tpl_vars['entry']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['entry']->value['access'];?>
">
                <span class="label label-<?php if (!$_smarty_tpl->tpl_vars['ugp_modified']->value) {?>default disabled<?php } elseif ($_smarty_tpl->tpl_vars['entry']->value['access']) {?>success<?php } else { ?>default<?php }?>" data-access="1"><i class="i-checkmark"></i> Yes</span>
                <span class="label label-<?php if (!$_smarty_tpl->tpl_vars['ugp_modified']->value) {?>default disabled<?php } elseif (!$_smarty_tpl->tpl_vars['entry']->value['access']) {?>danger<?php } else { ?>default<?php }?>" data-access="0"><i class="i-close"></i> No</span>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('ia_add_js', array()); $_block_repeat=true; echo iaSmarty::ia_add_js(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

$(function(){
    var usergroupAccess = { };

    $('#input-ugp-default').on('click', function(){
        var setDefaults = $(this).prop('checked');
        var $section = $('#widget-permissions');
        var $togglers = $('.js-toggler-group', $section);
        var $actions = $('.widget-system-panel a', $section);

        if (setDefaults){
            $togglers.each(function(){
                var id = $(this).data('id');
                usergroupAccess[id] = $('#js-ugp-' + id).val();
            });
            setTogglerValue();
            $actions.addClass('disabled');
        } else {
            $togglers.each(function() {
                var id = $(this).data('id');
                var value = ('undefined' === typeof usergroupAccess[id])
                    ? $('#js-ugp-' + id).val()
                    : usergroupAccess[id];

                setTogglerValue(value, $(this));
            });
            $actions.removeClass('disabled');
        }
    });

    $('.widget-system-panel a', '#widget-permissions').on('click', function(e){
        e.preventDefault();
        $(this).hasClass('disabled') || setTogglerValue($(this).attr('rel'));
    });

    function setTogglerValue(value, $toggler){
        $toggler = $toggler || $('#widget-permissions').find('.js-toggler-group');

        if ('undefined' !== typeof value){
            $toggler.each(function(){
                $('#js-ugp-' + $(this).data('id')).val(value);
                var status = (1 == value);

                $(this).find('span:eq(0)')
                    .removeClass((status ? 'label-default' : 'label-success') + ' disabled')
                    .addClass(status ? 'label-success' : 'label-default');
                $(this).find('span:eq(1)')
                    .removeClass((status ? 'label-danger' : 'label-default') + ' disabled')
                    .addClass(status ? 'label-default' : 'label-danger');
            });
        } else {
            $toggler.find('span')
                .removeClass('label-success label-danger')
                .addClass('label-default disabled');
        }
    }

    $('.label', '#widget-permissions').on('click', function(){
        $(this).hasClass('disabled') || setTogglerValue($(this).data('access'), $(this).parent());
    });
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo iaSmarty::ia_add_js(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['noControls']->value)) {?>
    <div class="form-actions inline">
        <input type="hidden" name="save" value="1">
        <button type="submit" class="btn btn-primary form-actions__btn-submit js-btn-submit">
            <?php if (iaCore::ACTION_ADD==$_smarty_tpl->tpl_vars['pageAction']->value) {?><?php echo iaSmarty::lang(array('key'=>'add'),$_smarty_tpl);?>
<?php } else { ?><?php echo iaSmarty::lang(array('key'=>'save'),$_smarty_tpl);?>
<?php }?>
        </button>
        <?php echo $_smarty_tpl->getSubTemplate ('goto.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo smarty_function_ia_hooker(array('name'=>'adminSubmitOptions'),$_smarty_tpl);?>

    </div>
<?php }?><?php }} ?>
