<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:14:20
         compiled from "plugin\custom_user\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:19197143945afaeb3c396023-07137180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0765f13dc5d95be23dcdff18eac846db9db4b2' => 
    array (
      0 => 'plugin\\custom_user\\template\\resource.lbi',
      1 => 1494044316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19197143945afaeb3c396023-07137180',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeb3c3b92b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeb3c3b92b')) {function content_5afaeb3c3b92b($_smarty_tpl) {?><script>
$(function(){
	$("#authorDiv").show();
	plugins_init_function.push(custom_user_init);
})
function custom_user_init(data){
	var logoObj = data.custom_logo;
	if(logoObj && logoObj.user){
        $("#user_nickName").text(logoObj.user);
    }
}
</script>

<?php }} ?>