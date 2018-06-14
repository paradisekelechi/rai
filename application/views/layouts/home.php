<?php
/**
 * Created by PhpStorm.
 * User: Paradise Kelechi
 * Date: 31/05/2018
 * Time: 10:08 AM
 */

$this->load->view('components/home/Header');
$this->load->view('components/home/Navigation');
$this->load->view($subview);
$this->load->view('components/home/Footer');