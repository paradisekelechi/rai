<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->data['title'] = 'Contact';
        $this->data['subview'] = 'pages/Contact';
		$this->load->view('_layout', $this->data);
	}
}
