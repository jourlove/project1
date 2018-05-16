<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:52
         compiled from "plugin\showviewnum\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:15445873375afaeae41a9aa2-47198883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8a0b67ec638a258aa6e755a3225536dc5ddee4' => 
    array (
      0 => 'plugin\\showviewnum\\template\\edit.lbi',
      1 => 1494044376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15445873375afaeae41a9aa2-47198883',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae421af3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae421af3')) {function content_5afaeae421af3($_smarty_tpl) {?> <div class="col-md-4">
     <label name="namehot"  class="col-md-6 control-label">隐藏人气</label>
    <div name="namehot"  class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="隐藏人气"<?php }?>>
        <input id="showviewnum" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
    </div>
</div>
<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(showviewnum_init);
		plugins_works_get_function.push(showviewnum_get);
	})
	function showviewnum_init(){
    	$("#showviewnum").bootstrapSwitch('state', worksmain.hideviewnum_flag=='1'?true:false);
	}
	function showviewnum_get(worksMaindata){
	    worksMaindata.hideviewnum_flag =  $("#showviewnum").bootstrapSwitch('state')?1:0;
	}
</script>
<?php }} ?>