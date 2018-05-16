<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 20:30:39
         compiled from "D:/Develop/xampp/htdocs/vr720/vradmin/template\lib\login.lbi" */ ?>
<?php /*%%SmartyHeaderCode:4623272925afad2ef1e5177-95089384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c66bd8a9094b174542be34f108d893a54f3b6b8' => 
    array (
      0 => 'D:/Develop/xampp/htdocs/vr720/vradmin/template\\lib\\login.lbi',
      1 => 1494044619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4623272925afad2ef1e5177-95089384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afad2ef2006f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afad2ef2006f')) {function content_5afad2ef2006f($_smarty_tpl) {?><div id="login">
  <div class="dologo"></div>
  <form id="admin_login" action="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=login" method="post" enctype="multipart/form-data">
   <div id="wrong_text" class="warning" style="display:none"></div>
   <ul>  
    <li class="inpLi"><b>登录账号</b><input type="text" name="admin_name" class="inpLogin"></li>
    <li class="inpLi"><b>登录密码</b><input type="password" name="passwd" class="inpLogin"></li>
    <li style="height:auto"><label><input type="checkbox" name="remember" value="1"> 7天内免登录</label></li>
    <li class="sub"><input type="button" id="sub_btn" value="确认登录" class="btn" style="width:100%;" onclick="javascript:ajaxFormSubmit('admin_login','登录');"></li> 
   </ul>
  </form>
</div>
<?php }} ?>