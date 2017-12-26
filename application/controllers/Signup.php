<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class Signup extends CI_Controller
{
	
	public function __construct() {


		parent::__construct();
		
		if ($this->session->userdata('is_logged_in')) {
			return redirect('dashboard');
		}
		$this->load->model('signupModel');
		$this->load->model('userModel');


	}


	public function verify_email() {

		$data['main_content'] = 'public/home/verify_email';
		$this->load->view('includes/login_template',$data);

	}

	public function index() {

		$data['main_content'] = 'public/home/signup';
		$this->load->view('includes/login_template',$data);

	}

	public function create_user() {

		if ($this->input->post()) {

			$output = $this->signupModel->create_user();

			echo json_encode($output);
			
		} else {

			return redirect('signup');
		}
	}

	public function verify_email_account() {

			
			$hash = $this->input->get('hash');

			if (empty($hash)) {
				
				$this->session->set_flashdata('msg','Please try later!');
				return redirect('login');

			} else {

				// $output = $this->loginModel->update_user_data(['email'=>$email]);
				 $user = $this->userModel->get(['activation_code'=>$hash]);

				 	if ($user) {
				 	# code...
				 
						if (!$user->is_email) {


								$user_data = array('is_active'=>1,'is_email'=>1);
								$where = array('id'=>$user->id);

								$updated = $this->userModel->update($where,$user_data);

								$msg = $updated ? 'Successfuly verified email' : 'could not verify email, please try later';

								if ($updated) {

									$data['main_content'] = 'public/home/email_verified';
									$this->load->view('includes/template',$data);		
									# code...
								} else{


									$data['msg'] = 'could not verify email address, please try later!';
									return redirect('login');
								}

									

						} else if($user->is_email) {

							$this->session->set_flashdata('msg','your email address is verified, please login !');
							return redirect('login');
						} else {

							$this->session->set_flashdata('msg','coult not verify email !');
							return redirect('login');
						}
					}
			}
	}

}