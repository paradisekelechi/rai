<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->data['title'] = 'Gallery';
        $this->data['subview'] = 'pages/Gallery';
		$this->load->view('_layout', $this->data);
	}
}
