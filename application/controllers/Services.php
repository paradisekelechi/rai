<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function cars(){
		$this->data['title'] = 'Services';
        $this->data['subview'] = 'pages/services/Cars';
		$this->load->view('_layout', $this->data);
    }
    
    public function carparts(){
		$this->data['title'] = 'Services';
        $this->data['subview'] = 'pages/Services/CarParts';
		$this->load->view('_layout', $this->data);
    }
    public function maintenance(){
		$this->data['title'] = 'Services';
        $this->data['subview'] = 'pages/services/Maintenance';
		$this->load->view('_layout', $this->data);
	}
}
