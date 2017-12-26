<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/

class SignupModel extends MY_Model
{


	public function __construct() {

		parent::__construct();
		$this->load->helper('my_helper');
		
	}

	
	public function create_user() {

		$this->load->library('form_validation');

		$output = array('status'=>'false','name'=>'','email'=>'','phone'=>'','password'=>'','retype'=>'');

		if ($this->form_validation->run('user_registration_form_validation')==FALSE) {

			 	$this->form_validation->set_error_delimiters('', '');
				$output['name'] = form_error('name');
				$output['email']    = form_error('email');
				$output['phone']    = form_error('phone');
				$output['password'] = form_error('password');
				$output['retype']   = form_error('retype');
				// $output['captcha']  = 'Please verify the captcha';
				


		} else {

			
			unset($_POST['retype']);

			$info = $this->input->post();
			
			$valid = validate_password($info['password']);

			
			if ($valid) {

				
				
				$info['password'] = md5($info['password']);

				// $rpc = $this->get_options();
							
				// $blackdiamond = new Bitcoin($rpc->rpc_user,$rpc->rpc_password,$rpc->rpc_host,$rpc->rpc_port);
				
				// $address = $blackdiamond->getnewaddress();

				// if (!empty($address)) {
					
					// $otp_code = rand(1,999999);
					// $response = $this->send_message($otp_code,$info['phone']);
					// $rslt = json_decode($response);

				$gauth = new GoogleAuthenticator();

				$secret = $gauth->createSecret();


				$hash = generateRandomString(100);

				// $email = $this->send_mail('bitspro.io@gmail.com',$info['email'],$info['name'],$hash);
					
					// if ($email) {
							
							
							$user_data = array(

								'email'          => $info['email'],
								'username'       => $info['name'],
								'phone'          => $info['phone'],
								'password'       => $info['password'],
								'activation_code'=> $hash,
								'google_2fa_code'=> $secret

								
						    );

						    $this->db->insert('users',$user_data);

						    $q = $this->db->where(['email'=>$info['email']])->get('users');

						    if ($q->num_rows()) {
						    	
						    	$user = $q->row();

						    	$sess = array(
									'user_id'      =>$user->id,
									'username'     =>$user->username,
									'email'        =>$user->email,
									'is_logged_in' =>1
						    	);


								$this->session->set_userdata($sess);
						    	$output['status'] = "success";
						    }

					// }

				// }	
				
			} else {

				$output['password'] = 'Password length should be 8 character and should contain atleast one Uppercase, one lowercase, one digit and one special character';

			}

			
		}

		return $output;

	}

	


	
	public function user_signup() {

		$user_info = array(

			'username'       =>$this->session->userdata('username'),
			'email'          =>$this->session->userdata('email'),
			'phone'          =>$this->session->userdata('phone'),
			'password'       =>$this->session->userdata('password'),
			'wallet_address' =>$this->session->userdata('wallet_address'),
			
			);

		$output = 'error';



		$this->db->insert('users',$user_info);

		if ($this->db->affected_rows()==1) {
			
			$user_id = $this->db->insert_id();

			$rpc = $this->get_options();

			$blackdiamond = new Bitcoin($rpc->rpc_user,$rpc->rpc_password,$rpc->rpc_host,$rpc->rpc_port);
								
			 $address = $user_info['wallet_address'];
			$set_acc = $user_id.$this->session->userdata('email').$this->session->userdata('username'); 
			$blackdiamond->setaccount($address,md5($set_acc));

			$user_login = array(
				'user_id'	   => $user_id,
				'user_name'    => $user_info['username'],
				'user_email'   => $user_info['email'],
				'email_verify' =>  0
			);


			$this->session->set_userdata($user_login);

			$array  = array('username' ,'email','phone','password','wallet_address','otp');
			$this->session->unset_userdata($array);
			// send email for verification

			$mail = $this->send_mail('info.zedexcoin@gmail.com', $user_login['user_email'], $user_login['user_name']);
			if ($mail) {
				

				$output = 'success';
			} else {

				$output = 'not_sent';
				
			}

		}

		return $output;
	}


	 
	

}