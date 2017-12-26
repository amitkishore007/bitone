<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/

class Login extends MY_Controller
{
	

	public function __construct() {

		parent::__construct();
		
		$this->checkLogin();
		$this->load->model('loginModel');
		
		// $this->load->model('dashboardModel');


	}


	public function checkLogin() {

		if ($this->session->userdata('is_logged_in')) {
			
			return redirect('dashboard');
		}
	}


	public function index() {

		
		$data['main_content'] = 'public/home/login';
	

		// $gauth = new GoogleAuthenticator();

		// $secret = $gauth->createSecret();


		$this->load->view('includes/login_template',$data);


	}


	public function login() {

		if ($this->input->post()) {

			$user = $this->loginModel->login();
			  
			echo json_encode($user);

				
		} else {

			return redirect('login');
		}

	}

	public function twofa_login() {

		if ($this->input->post()) {

			$user = $this->loginModel->twofa_login();
			  
			echo json_encode($user);

				
		} else {

			return redirect('login');
		}

	}

	public function destroy(){

		$this->session->sess_destroy();
	}



}