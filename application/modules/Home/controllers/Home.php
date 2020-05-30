<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index() {
		$this->load->helper('visitor');
		echo test_helper();
		$this->load->view('welcome_message');
	}
}
