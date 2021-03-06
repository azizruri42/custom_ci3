<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Minifile {

	protected $CI;

	public function __construct() {
		$this->CI =& get_instance();
	}

	public function create($file = array(),$tipe) {

		$string = "";
		foreach($file as $item):
			$string .= $this->_get_file($item);
		endforeach;
		$file = md5($string).".".$tipe;
		if(!file_exists("./assets/core/$tipe/".$file)):
			file_put_contents("./assets/core/$tipe/".$file, $string);
		endif;

		return $file;
	}

	private function _get_file($filename) {
		if(preg_match("/modules/",$filename)):
			$string = is_file("./application/".$filename) ? file_get_contents("./application/".$filename) : "";

		elseif(preg_match(common_assets(), $filename)):
			$string = is_file($filename) ? file_get_contents($filename) : "";

		else:
			$string = is_file("./".$filename) ? file_get_contents("./".$filename) : "";

		endif;
		return $string;
	}

	public function jsFile(){
		$js = "";
		$js .= "const JS_FANCYBOX_PACK = '".base_url(JS_FANCYBOX_PACK)."'; ";
		$js .= "const JS_FANCYBOX = '".base_url(JS_FANCYBOX)."'; ";
		$js .= "const JS_MOUSEWHEEL_PACK = '".base_url(JS_MOUSEWHEEL_PACK)."'; ";
		$js .= "const JS_JQUERY_VALIDATE = '".base_url(JS_JQUERY_VALIDATE)."'; ";
		$js .= "const JS_JQUERY_UI_WIDGET = '".base_url(JS_JQUERY_UI_WIDGET)."'; ";
		$js .= "const JS_JQUERY_FILEUPLOAD = '".base_url(JS_JQUERY_FILEUPLOAD)."'; ";
		$js .= "const JS_JQUERY_IFRAME_TRANSPORT = '".base_url(JS_JQUERY_IFRAME_TRANSPORT)."'; ";
		$js .= "const JS_CROPPER_MIN = '".base_url(JS_CROPPER_MIN)."'; ";
		$js .= "const JS_MOMENT = '".base_url(JS_MOMENT)."'; ";
		$js .= "const JS_BOOTSTRAP_DATETIMEPICKER = '".base_url(JS_BOOTSTRAP_DATETIMEPICKER)."'; ";
		$js .= "const JS_RAPHAEL_MIN = '".base_url(JS_RAPHAEL_MIN)."'; ";
		$js .= "const JS_MORRIS_MIN = '".base_url(JS_MORRIS_MIN)."'; ";
		$js .= "const JS_BOOTSTRAP3_TYPEAHEAD = '".base_url(JS_BOOTSTRAP3_TYPEAHEAD)."'; ";
		$js .= "const JS_YOUTUBE = '".base_url(JS_YOUTUBE)."'; ";
		$js .= "const JS_MULTIPLE_SELECT = '".base_url(JS_MULTIPLE_SELECT)."'; ";
		$js .= "const JS_SLICK = '".base_url(JS_SLICK)."'; ";
		$js .= "const JS_TAGS_INPUT = '".base_url(JS_TAGS_INPUT)."'; ";
		$js .= "const JS_TINYMCE = '".base_url(JS_TINYMCE)."'; ";
		$js .= "const JS_TINYMCE_JQ = '".base_url(JS_TINYMCE_JQ)."'; ";
		$js .= "const TOKOMO_CHAT = '".base_url(TOKOMO_CHAT)."'; ";

		return $js;
	}
}
