<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->data['totalCars'] = $this->getTotalCarsCount();
        $this->data['availableCars'] = $this->getAvailableCarsCount();
        $this->data['deletedCars'] = $this->getDeletedCarsCount();
        $this->data['title'] = 'Dashboard';
        $this->data['subview'] = 'pages/admin/Dashboard';
        $this->load->view('layouts/admin', $this->data);
    }

    private function getTotalCarsCount()
    {
        $carsDataCount = array();
        return $carsDataCount;
    }

    private function getDeletedCarsCount()
    {
        $deletedCarsDataCount = array();
        return $deletedCarsDataCount;
    }

    private function getAvailableCarsCount()
    {
        $availableCarsDataCount = array();
        return $availableCarsDataCount;
    }
}
