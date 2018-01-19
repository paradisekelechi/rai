<?php
	$this->load->view('components/Header');
	if($subview == 'pages/Dashboard'){
		$this->load->view('components/AdminNavigation');
	}else{
		$this->load->view('components/Navigation');
	}
	$this->load->view($subview);
	$this->load->view('components/Footer');
