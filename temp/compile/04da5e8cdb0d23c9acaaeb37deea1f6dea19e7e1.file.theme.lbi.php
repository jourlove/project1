<?php /* Smarty version Smarty-3.1.7, created on 2018-05-14 19:56:53
         compiled from "F:/develop/phpStudy/WWW/vr720/vradmin/template\lib\theme.lbi" */ ?>
<?php /*%%SmartyHeaderCode:70215af9709097c9f9-53959344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04da5e8cdb0d23c9acaaeb37deea1f6dea19e7e1' => 
    array (
      0 => 'F:/develop/phpStudy/WWW/vr720/vradmin/template\\lib\\theme.lbi',
      1 => 1526298927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70215af9709097c9f9-53959344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5af97090a5f33',
  'variables' => 
  array (
    'theme_cur' => 0,
    'themes' => 0,
    'v' => 0,
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5af97090a5f33')) {function content_5af97090a5f33($_smarty_tpl) {?><div id="theme" style="height:auto!important;height:550px;min-height:550px;">
   <ul class="tab">
    <li><a href="javascript:;" class="selected">管理模板</a></li>

   </ul>
   <div class="enable">
    <h2>当前启用的模板</h2>
    <p><img src="/template/<?php echo $_smarty_tpl->tpl_vars['theme_cur']->value['code'];?>
/thumb.png" width="280" height="175"></p>
    <dl>
     <dt><?php echo $_smarty_tpl->tpl_vars['theme_cur']->value['name'];?>
</dt>
     <dd>版本：<?php echo $_smarty_tpl->tpl_vars['theme_cur']->value['version'];?>
</dd>
     <dd>作者：<a href="http://www.666qiang.com" target="_blank">www.666qiang.com</a></dd>
     <dd>简介：<?php echo $_smarty_tpl->tpl_vars['theme_cur']->value['intro'];?>
</dd>
    </dl>
   </div>
   <div class="themeList">
    <h2>可用模板</h2>
	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['themes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
	 <dl>
     <p><img src="/template/<?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
/thumb.png" width="280" height="220"></p>
     <dt><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['v']->value['version'];?>
</dt>
     <dd class="btnList">
	  作者：<a href="http://www.666qiang.com" target="_blank">www.666qiang.com</a>
	  <span><a href="/<?php echo $_smarty_tpl->tpl_vars['_lang']->value['admin_path'];?>
/?m=theme&unique=<?php echo $_smarty_tpl->tpl_vars['v']->value['code'];?>
" class="del" style="color:#0072C6">启用</a></span>
	 </dd>
    </dl>
	<?php } ?>
   </div>
</div><?php }} ?>