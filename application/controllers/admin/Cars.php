<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cars extends CI_Controller {

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

    public function addCarView()
    {
        // Load add car view and add a car accordingly
    }

    public function carsList()
    {
        // Load cars List view
    }

    public function carDetails()
    {
        // Load Car Details page with car data
    }

    public function deleteCar()
    {
        $isDeleted = true;
        return $isDeleted;
    }
}
