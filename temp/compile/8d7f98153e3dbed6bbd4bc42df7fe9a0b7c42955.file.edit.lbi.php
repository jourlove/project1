<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:52
         compiled from "plugin\showuser\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:10340892935afaeae4032a45-95754596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d7f98153e3dbed6bbd4bc42df7fe9a0b7c42955' => 
    array (
      0 => 'plugin\\showuser\\template\\edit.lbi',
      1 => 1494044374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10340892935afaeae4032a45-95754596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae40cee6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae40cee6')) {function content_5afaeae40cee6($_smarty_tpl) {?><div class="col-md-4">
     <label name="nameuser" class="col-md-6 control-label">隐藏作者名</label>
    <div name="nameuser"  class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="隐藏作者名"<?php }?>>
        <input id="showuser" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
    </div>
</div>
<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(showuser_init);
		plugins_works_get_function.push(showuser_get);
	})
	function showuser_init(){
    	$("#showuser").bootstrapSwitch('state', worksmain.hideuser_flag=='1'?true:false);
	}
	function showuser_get(worksMaindata){
	    worksMaindata.hideuser_flag =  $("#showuser").bootstrapSwitch('state')?'1':'0';
	}
</script><?php }} ?>