<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:14:20
         compiled from "plugin\showlogo\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:8872738385afaeb3c1c90b9-58698731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e663afac247e53f1e7e076d31013df561c607f5' => 
    array (
      0 => 'plugin\\showlogo\\template\\resource.lbi',
      1 => 1494044372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8872738385afaeb3c1c90b9-58698731',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeb3c1e07c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeb3c1e07c')) {function content_5afaeb3c1e07c($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showlogo_init);
})
function showlogo_init(data){
	if(data.hidelogo_flag=='1'){
        $("#logoImg").hide();
    }else{
    	$("#logoImg").show();
    }
}
</script><?php }} ?>