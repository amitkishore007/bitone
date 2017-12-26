<?php 


/**
* 
*/
class SecurityModel extends MY_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function checkCode($google_2fa_code, $code){

		$gauth = new GoogleAuthenticator();

		$check = $gauth->verifyCode($google_2fa_code, $code,2);

	

		if ($check) {

			return true;

		}


	}
}

?>