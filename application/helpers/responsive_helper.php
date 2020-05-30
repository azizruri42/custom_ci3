<?php if(!defined('BASEPATH'))exit('No direct sript allowed');

if (!function_exists('selectDevice')){
	function selectDevice($view) {
		$CI =& get_instance();
		$CI->load->library('Mobile_detect');
		$path = explode('/',$view);
		$length = count($path);
		$view = $path[$length - 1];
		unset($path[$length - 1]);
		$path = implode('/',$path);
		if($CI->mobile_detect->isTablet()):
			$data = $path.'/tablet/'.$view;
		elseif($CI->mobile_detect->isMobile()):
			$data = $path.'/mobile/'.$view;
		else:
			$data = $path.'/desktop/'.$view;
		endif;	
		return $data;
	}
}
