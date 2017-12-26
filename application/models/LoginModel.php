<?php 


/**
* 
*/
 
class LoginModel extends MY_Model
{

	public function __construct(){


		parent::__construct();

		$this->load->model('securityModel');
	}
	

	public function login() {

		$info  = $this->input->post();

		
		$this->load->library('form_validation');

		$output = array();
		
		$output['status'] = "false";
		
		$output['error']    = "";
				

		if ($this->form_validation->run('login_form_validation')==FALSE) {
				
			$this->form_validation->set_error_delimiters('', '');

			
			$output['error']    = form_error('email') . '<br/> '.form_error('password');
			

		} else {

		
			$info['password'] = md5($info['password']);
			
			$result = $this->db->where($info)->get('users');

			if ($result->num_rows()) {

				$user  = $result->row();
					
					if ($user->is_2fa) {


						$output['status'] = "twofa";
						
					

					} else {

						$output['status'] = "success";
						$data = array(

							'user_id'      => $user->id,
							'email'        => $user->email,
							'is_logged_in' => 1
							
							
					    );
					    $login_store = array('ip'=>$this->input->ip_address(),'user_id'=>$user->id);
					    $this->storeLogin($login_store);


						$this->session->set_userdata($data);
					}		
						
						
			} else {
				
				$output['error']  = "Email/password did not matched !";
				
			}


		}

		return $output;

	}



	public function twofa_login() {

		$info  = $this->input->post();

		
		$this->load->library('form_validation');

		$output = array();
		
		$output['status'] = "false";
		
		$output['error']    = "";
				

		if ($this->form_validation->run('twofa_login_form_validation')==FALSE) {
				
			$this->form_validation->set_error_delimiters('', '');

			
			$output['error']    = form_error('email') . ' : '.form_error('password').' : '.form_error('twofa');
			

		} else {

		
			$info['password'] = md5($info['password']);
			$code = $info['twofa'];
			unset($info['twofa']);
			
			$result = $this->db->where($info)->get('users');

			if ($result->num_rows()) {

				$user  = $result->row();
					
					$check = $this->securityModel->checkCode($user->google_2fa_code, $code);
					if ($check) {

						$output['status'] = "success";
						$data = array(

							'user_id'      => $user->id,
							'email'        => $user->email,
							'is_logged_in' => 1
					    );

						$login_store = array('ip'=>$this->input->ip_address(),'user_id'=>$user->id);
					    $this->storeLogin($login_store);

						$this->session->set_userdata($data);
					} else {

						$output['status'] = 'false';
						$output['error'] = 'Please enter a valid 2FA code';
					}		
						
						
			} else {
				
				$output['error']  = "Email/password did not matched !";
				
			}


		}

		return $output;

	}



	public function storeLogin($data)
	{
		
		$this->db->insert('login_status',$data);

		if ($this->db->affected_rows()==1) {
			
			return false;
		}

	}


}