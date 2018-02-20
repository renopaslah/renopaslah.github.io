<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistic extends CI_Controller {

	public function index(){
		$this->load->admin('statistic_v');
	}
	
}
