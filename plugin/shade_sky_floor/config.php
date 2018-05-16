<?php
/*
 * Vrsystem 天空地面遮罩提示插件
 * ============================================================================

 * $Author: wanghao 38585404#qq.com $
 * $Id: bind.php 28028 2016-06-19Z snake $
*/

$plugins['shade_sky_floor'] = array(
		'plugin_name' => '补天补地',
		"enable" => 1,    			
		"edit_container" => "setting_group",
		"edit_sort" => 4,
		"edit_resource"=>1,
		"view_container" => "",
		"view_sort" => 2,
		"view_resource"=>1,
		"xml"=>'plugin.xml'
	);


?>