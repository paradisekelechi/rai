<?php
/**
 * Created by PhpStorm.
 * User: andeladeveloper
 * Date: 31/05/2018
 * Time: 10:48 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class EmailSender extends CI_Controller {

    function __construct(){
        parent::__construct();
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'xxx',
            'smtp_pass' => 'xxx',
            'mailtype'  => 'html',
            'charset'   => 'iso-8859-1'
        );
        $this->load->library('email', $config);
    }

    public function index(){
        $this->data['title'] = 'Home';
        $this->data['subview'] = 'pages/Home';
        $this->load->view('_layout', $this->data);
    }

    /**
     * @return object
     */
    public function sendEmail()
    {
        $this->email->from('paradisekelechi@gmail.com', 'Paradise Name');
        $this->email->to('paradisekelechi@gmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        $this->email->send();
    }
}
