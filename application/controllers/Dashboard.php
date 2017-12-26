<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/

class Dashboard extends MY_Controller
{


	
	public function __construct() {

		parent::__construct();

		if (!$this->session->userdata('is_logged_in')) {
			
			return redirect('login');
		}
		$this->load->model('dashboardModel');
		$this->load->helper('my_helper');

	}


	public function index() {



		$data['main_content'] = 'public/dashboard/index';
	

		$this->load->view('includes/dashboard_template',$data);


	}

}