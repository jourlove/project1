<?php /* Smarty version Smarty-3.1.7, created on 2018-05-14 23:29:07
         compiled from "F:/develop/phpStudy/WWW/vr720/template\default\library\passport_header.lbi" */ ?>
<?php /*%%SmartyHeaderCode:109085af9ab43b6ab70-90361253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bbbf96ff7799f9209b2ce317aaab4e536d5b325' => 
    array (
      0 => 'F:/develop/phpStudy/WWW/vr720/template\\default\\library\\passport_header.lbi',
      1 => 1494044498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109085af9ab43b6ab70-90361253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5af9ab43bb4f0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af9ab43bb4f0')) {function content_5af9ab43bb4f0($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-ch">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
<title><?php if ($_smarty_tpl->tpl_vars['title']->value){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['_lang']->value['title'];?>
-<?php echo $_smarty_tpl->tpl_vars['_lang']->value['subtitle'];?>
<?php }?></title>
<link rel="stylesheet" href="/static/css/zui.min.css">
<link rel="stylesheet" href="/static/css/zui-theme.css">
<link rel="stylesheet" href="/template/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['moban'];?>
/css/redefine.css">
<script language="JavaScript" type="text/javascript" src="/static/js/jquery-1.9.1.js"></script>

<style>
	.passport_container{
		margin:10% auto 0 auto;
		min-height: 600px;
		width: 300px;
		text-align: center;
	}
</style>
<script>

	function showerr(content,obj){
		alert_notice(content,'default','top');
		if(obj!=null){
			$(obj).parent(".input-group").addClass("has-error");
		}
	}


</script>
</head>

<body>

<?php }} ?>