<?php /* Smarty version Smarty-3.1.7, created on 2018-05-15 22:52:31
         compiled from "plugin\footmarker\template\resource.lbi" */ ?>
<?php /*%%SmartyHeaderCode:5873061615afaf42f4f1d54-95057514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00dc3376e69ae3fd360406c66b47a14dc00acd27' => 
    array (
      0 => 'plugin\\footmarker\\template\\resource.lbi',
      1 => 1494044318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5873061615afaf42f4f1d54-95057514',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5afaf42f4fd8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5afaf42f4fd8d')) {function content_5afaf42f4fd8d($_smarty_tpl) {?>
<script>
	$(function(){
		plugins_init_function.push(footmarker_init);
	})
	function footmarker_init(data){
		 if (data.footmark=='0') {
            $('#footmarkDiv').hide();
        }
	}
	function hideShareAndFootmarkBtn(){
	    //$("#shareDiv").hide();
	    $("#footmarkDiv").hide();
	}
	function showFootMark(){
	    var krpano = document.getElementById('krpanoSWFObject');
	    var sceneName = krpano.get('xml.scene');
	    var viewuuid = (sceneName.split('_'))[1].toUpperCase();
	    var locationData = $('body').data(viewuuid);
	    if(locationData){
	        _U.mapMarkModal().openModal(locationData,true);
	    }else{
	        $.zui.messager.show('没有足迹', {placement: 'center', type: 'warning', time: '3000', icon: 'warning-sign'});
	    }
	}
</script>
<?php }} ?>