<?php
/**
 * Created by PhpStorm.
 * User: Paradise Kelechi
 * Date: 31/05/2018
 * Time: 10:04 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class index extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->data['title'] = 'Home';
        $this->data['subview'] = 'pages/Home';
        $this->load->view('_layout', $this->data);
    }
}
