<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model(array('users' => 'usersModel', 'authentication' => 'authenticationModel'));
	}
	
	public function index(){
	    $inputErrors = array();
		if($_POST){
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$errors = $this->validateInputData($username, $password);
			if(sizeof($errors) == 0){
                $isLoggedIn = $this->loginUser($username, $password);
                if($isLoggedIn){
                    $this->setSessionData();
                }
            }else{
			    $inputErrors = $errors;
            }
		}
		$this->data['title'] = 'Login';
		$this->data['errors'] = $inputErrors;
        $this->data['subview'] = 'pages/Login';
		$this->load->view('layouts/home', $this->data);
	}

    private function validateInputData($username, $password)
    {
        $errors = array();
        if(strlen($username) < 3){
            array_push($errors, 'Username is too short');
        }
        if(strlen($username) > 10){
            array_push($errors, 'Username is too long');
        }
        if(strlen($password) < 3){
            array_push($errors, 'Password is too short');
        }
        if(strlen($password) > 10){
            array_push($errors, 'Password is too long');
        }
        return $errors;
    }

    private function loginUser($username, $password)
    {
        print_r($username);
        print_r($password);
        return true;
    }

    private function setSessionData()
    {
        $userData = array('paradisekelewchi@gmail.com', 'paradise');
        $users_ = $this->authenticationModel->signup($userData);
        print_r($users_);
        return true;
    }
}
