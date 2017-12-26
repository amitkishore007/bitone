<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/

class Home extends MY_Controller
{

	public function __construct() {

		parent::__construct();

		if ($this->session->userdata('is_logged_in')) {
			
			return redirect('dashboard');
		}
		$this->load->model('dashboardModel');
		$this->load->helper('my_helper');

	}


	public function index() {



		$data['main_content'] = 'public/home/home';
	

		$this->load->view('includes/template',$data);


	}

}