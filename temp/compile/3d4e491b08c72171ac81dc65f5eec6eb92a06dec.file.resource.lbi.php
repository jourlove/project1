<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:14:20
         compiled from "plugin\showvrglass\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:15720425435afaeb3c1637a6-17475514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d4e491b08c72171ac81dc65f5eec6eb92a06dec' => 
    array (
      0 => 'plugin\\showvrglass\\template\\resource.lbi',
      1 => 1494044378,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15720425435afaeb3c1637a6-17475514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeb3c17702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeb3c17702')) {function content_5afaeb3c17702($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showvrglass_init);
})
function showvrglass_init(data,settings){
	settings['skin_settings.webvr'] = data.hidevrglasses_flag==1 ? false : true;
}
function showWebvrBtn(){
    $('.btn_vrmode').show();
}
</script><?php }} ?>