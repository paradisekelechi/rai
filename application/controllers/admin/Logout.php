<?php
/**
 * Created by PhpStorm.
 * User: Paradise Kelechi
 * Date: 31/05/2018
 * Time: 11:50 PM
 */

class Logout extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $isSessionDestroyed = $this->destroySessionData();
        if($isSessionDestroyed){
            $isLoggedOut = $this->logoutUser();
            if($isLoggedOut){
                redirect(base_url('admin/login'));
            }
        }
    }

    /**
     * @return object
     */
    private function logoutUser()
    {
        return true;
    }

    /**
     * @return object
     */
    private function destroySessionData()
    {
        return true;
    }
}
