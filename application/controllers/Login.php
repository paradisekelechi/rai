<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		if($_POST){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if($username == 'classicadmin' && $password == 'classicpassword'){
				redirect(base_url('dashboard'));
			}
		}
		$this->data['title'] = 'Login';
        $this->data['subview'] = 'pages/Login';
		$this->load->view('_layout', $this->data);
	}
}
