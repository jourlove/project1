<?php
/*
 * Vrsystem 自定义右键菜单
 * ============================================================================

 * $Author: wanghao 38585404#qq.com $
 * $Id: bind.php 28028 2016-06-19Z snake $
*/

$plugins['custom_right_button'] = array(
		'plugin_name' => '自定义右键菜单',
		"enable" => 1,    			
		"edit_container" => "setting_group",
		"edit_sort" => 6,
		"edit_resource"=>1,
		"view_container" => "",
		"view_sort" => 2,
		"view_resource"=>1,
		"xml" => 'plugin.xml.php'
	);


?>