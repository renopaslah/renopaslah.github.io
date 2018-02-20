<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

function department(){
	$CI = get_instance();
	$CI->load->model('Menu_m');
	$data = $CI->Menu_m->dept();
	return $data;
}

function menu(){
	$CI = get_instance();
	$CI->load->model('Menu_m');
	$data = $CI->Menu_m->menu();
	return $data;
}

function part_now($segment){
	$CI = get_instance();
	$dn = $CI->uri->segment($segment);
	return $dn;
}