<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function index(){
		$this->load->admin('setting_v');
	}
	
}
