<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Model model UMUM

class Menu_m extends CI_Model{
	
	function dept(){
		$data = array(
			array('inventory', 'Inventory - Pharmacy'),
			array('pharmacy', 'Pharmacy'),
			array('hrd', 'Human Resource'),
			array('finance', 'Finance'),
			array('accounting', 'Accounting'),
			array('medical', 'Medical Records'),
			array('analytics', 'Analytics')
		);
		return $data;
	}
	
	function menu(){
		$data = array('dashboard', 'statistic', 'setting');
		return $data;
	}
	
}