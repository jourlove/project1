<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:14:20
         compiled from "plugin\showviewnum\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:1012705945afaeb3c61e7c2-66055652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60b832fcf0b374974a012b8fbdd6ec97686f9085' => 
    array (
      0 => 'plugin\\showviewnum\\template\\resource.lbi',
      1 => 1494044376,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1012705945afaeb3c61e7c2-66055652',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaeb3c63204',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaeb3c63204')) {function content_5afaeb3c63204($_smarty_tpl) {?><script>
$(function(){
	plugins_init_function.push(showviewnum_init);
})
function showviewnum_init(data){
	if(data.hideviewnum_flag=='1'){
        $("#viewnumDiv").hide();
    }
    
  
}
</script><?php }} ?>