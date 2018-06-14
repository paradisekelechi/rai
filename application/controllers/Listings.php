<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listings extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->data['title'] = 'Cars';
        $this->data['subview'] = 'pages/cars/Listings';
        $this->load->view('layouts/home', $this->data);
    }
}
