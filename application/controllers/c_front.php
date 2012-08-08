<?php

class C_Front extends CI_Controller {
	var $data;
	var $count;
	
	public function _construct() {

		parent::_construct();
		$this -> data = '';
		$this -> load -> helper('url');
		$this -> count = 1;

	}

	public function index() {
		$data['title'] = 'Macheo e-Mentoring System::Home';
		$this -> load -> view('index', $data);
	}//End of index file



}
?>