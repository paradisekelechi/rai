<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->data['title'] = 'Login';
        $this->data['subview'] = 'pages/Login';
		$this->load->view('_layout', $this->data);
	}
}
