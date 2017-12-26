<?php


/**
* 
*/
class Security extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('userModel');
		$this->load->model('securityModel');
	}

	public function index() {

		$data['main_content'] = 'public/dashboard/security';

		$data['myinfo'] = $this->userModel->get(['id'=>$this->session->userdata('user_id')]);
        
		$this->load->view('includes/dashboard_template',$data);

	}

	public function activate_2fa() {

		if ($this->input->post()) {

			$output = array('status'=>'false','qr_code'=>'');

			$status = $this->input->post('status');

			$gauth = new GoogleAuthenticator();

			$user = $this->userModel->get(['id'=>$this->session->userdata('user_id')]);

	        $qr_code = $gauth->getQRCodeGoogleUrl($user->email,$user->google_2fa_code,'Bitspro ICO');


	        if ($qr_code) {
	        	# code...

	        	$output['status'] = 'success';
	        	$output['qr_code'] = $qr_code;

	        } else{

	         	$output['status'] = 'false';
	        	$output['qr_code'] = '';
	        }

	        echo json_encode($output);


		} else {

			return redirect('dashboard');
		}
	}


	public function two_fa_submit() {

		if ($this->input->post()) {
			# code...
			$user = $this->userModel->get(['id'=>$this->session->userdata('user_id')]);

			$code = $this->input->post('code');


			$output = $this->securityModel->checkCode($user->google_2fa_code, $code);

			$response = 'false';

			if ($output) {
				
				$updated = $this->userModel->update(['id'=>$this->session->userdata('user_id')],['is_2fa'=>1]);

				if ($updated) {
					
					$response = 'success';
				}

			} 

			echo $response;

		} else {

			return redirect('dashboard');
		}

	}




}