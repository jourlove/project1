<?php
/*
 * Vrsystem 是否允许管理员推荐插件
 * ============================================================================
 * 技术支持：2015-2099 Snake
 * 官网地址: http://www.666qiang.com
 * ----------------------------------------------------------------------------
 * $Author: wanghao 38585404#qq.com $
 * $Id: bind.php 28028 2016-06-19Z snake $
*/

$plugins['allowed_recomm'] = array(
        'plugin_name' => '允许管理员推荐',
		"enable" => 1,    			
		"edit_container" => "option_group",
		"edit_sort" => 10,
		"view_container" => "",
		"view_sort" => 1
	);


?>