<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:12:51
         compiled from "plugin\gyro\template\edit.lbi" */ ?>
<?php /*%%SmartyHeaderCode:4664513325afaeae3e0d7f0-45534623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e1f22738a51af3965d404ffc307771bfbcbbad' => 
    array (
      0 => 'plugin\\gyro\\template\\edit.lbi',
      1 => 1494044320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4664513325afaeae3e0d7f0-45534623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeae3ea1f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeae3ea1f1')) {function content_5afaeae3ea1f1($_smarty_tpl) {?> <div class="col-md-4">
     <label name="gyro_lable"  class="col-md-6 control-label">开启陀螺仪</label>
    <div name="gyro_wrap"  class="col-md-6" data-toggle="tooltip" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>title="您当前没有该权限"<?php }else{ ?>title="开启/关闭陀螺仪"<?php }?>>
        <input id="gyro" name="switch_checkbox" class="form-control" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['v']->value['level_enable']==0){?>disabled<?php }?>/>
    </div>
</div>
<script>
	$(function(){
		//向main_edit.js 注册初始化方法
		plugins_init_function.push(gyro_init);
		plugins_config_get_function.push(gyro_get);
	})
	function gyro_init(){
    	$("#gyro").bootstrapSwitch('state', panoConfig.gyro=='1'?true:false);
	}
	function gyro_get(panoConfig){
	    panoConfig.gyro =  $("#gyro").bootstrapSwitch('state')?1:0;
	}
</script>
<?php }} ?>