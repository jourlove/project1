<?php
//退出登录
if(!defined('IN_T')){
   die('hacking attempt');
} 
unset($_SESSION['admin']);
//如果记住密码
setcookie("admin[id]",0,Common::gmtime()-1,'/');
setcookie("admin[hashcode]",'',Common::gmtime()-1,'/');
Common::base_header("Location:".$_lang['host']."".ADMIN_PATH."/?m=login\n");
exit;
?>
