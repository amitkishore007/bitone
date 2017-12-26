<?php 


/**
* 
*/
class MY_Model extends CI_Model
{
	

	
	function __construct()
	{
		parent::__construct();
		$this->load->library('GoogleAuthenticator');

	}

	public function get_options() {

		$q = $this->db->get('options');
		if ($q->num_rows()) {
			
			return $q->row();
		}
	}


	protected function send_message($otp_code,$number) {

			$rpc = $this->get_options();

			$auth_key = $rpc->sms_api;
			$url = 'https://control.msg91.com/api/sendotp.php?authkey='.$auth_key.'&mobile='.$number.'&message=Your%20otp%20is%20'.$otp_code.'&sender=ZXCOIN&otp='.$otp_code;
			 if(!function_exists("curl_init")) return "cURL extension is not installed";
			    if (trim($url) == "") die("@ERROR@");
			    $curl = curl_init($url);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
			    curl_setopt($curl, CURLOPT_POST, 1);                        
			    // curl_setopt($curl, CURLOPT_USERPWD, 'username:password');
			    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);                    
			    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);                          
			    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);                       
			    $response = curl_exec($curl);                                          
			    $resultStatus = curl_getinfo($curl);                                   
			   	
			    if($resultStatus['http_code'] == 200) {
			       
			        // All Ok
			    
			    } else {

			        return json_encode($resultStatus);                            
				}

			    $curl = null;
			    return utf8_encode($response);

	}

		protected function get_crypto_rate($url) {

		

			 if(!function_exists("curl_init")) return "cURL extension is not installed";
			    if (trim($url) == "") die("@ERROR@");
			    $curl = curl_init($url);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
			    curl_setopt($curl, CURLOPT_POST, 1);                        
			    // curl_setopt($curl, CURLOPT_USERPWD, 'username:password');
			    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);                    
			    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);                          
			    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);                       
			    $response = curl_exec($curl);                                          
			    $resultStatus = curl_getinfo($curl);                                   
			   	
			    if($resultStatus['http_code'] == 200) {
			       
			        // All Ok
			    
			    } else {

			        return json_encode($resultStatus);                            
				}

			    $curl = null;
			    return utf8_encode($response);

	}
	protected function check_sent_otp($otp,$mobile) {

		$rpc = $this->get_options();
			$auth_key = $rpc->sms_api;
			$url = 'https://control.msg91.com/api/verifyRequestOTP.php?authkey='.$auth_key.'&mobile='.$mobile.'&otp='.$otp;
			 if(!function_exists("curl_init")) return "cURL extension is not installed";
			    if (trim($url) == "") die("@ERROR@");
			    $curl = curl_init($url);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
			    curl_setopt($curl, CURLOPT_POST, 1);                        
			    // curl_setopt($curl, CURLOPT_USERPWD, 'username:password');
			    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);                    
			    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);                          
			    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);                       
			    $response = curl_exec($curl);                                          
			    $resultStatus = curl_getinfo($curl);                                   
			   	
			    if($resultStatus['http_code'] == 200) {
			       
			        // All Ok
			    
			    } else {

			        return json_encode($resultStatus);                            
				}

			    $curl = null;
			    return utf8_encode($response);

	}

	public function send_mail($from, $to, $username,$hash,$message='',$subject='') { 
       
         $from_email = $from; 
         $to_email = $to; 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Team Bitspro'); 
         $this->email->to($to_email);

         if (!empty($subject)) {
         	# code...
	         $this->email->subject($subject); 
         } else {
         $this->email->subject('welcome to Bitspro'); 

         	
         }


         $msg = '<!doctype html>
			<html>
			  <head>
			    <meta name="viewport" content="width=device-width" />
			    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			    <title>Bitspro verification email</title>
			    <style>
			      /* -------------------------------------
			          GLOBAL RESETS
			      ------------------------------------- */
			      img {
			        border: none;
			        -ms-interpolation-mode: bicubic;
			        max-width: 100%; }

			      body {
			        background-color: #f6f6f6;
			        font-family: sans-serif;
			        -webkit-font-smoothing: antialiased;
			        font-size: 14px;
			        line-height: 1.4;
			        margin: 0;
			        padding: 0;
			        -ms-text-size-adjust: 100%;
			        -webkit-text-size-adjust: 100%; }

			      table {
			        border-collapse: separate;
			        mso-table-lspace: 0pt;
			        mso-table-rspace: 0pt;
			        width: 100%; }
			        table td {
			          font-family: sans-serif;
			          font-size: 14px;
			          vertical-align: top; }

			      /* -------------------------------------
			          BODY & CONTAINER
			      ------------------------------------- */

			      .body {
			        background-color: #f6f6f6;
			        width: 100%; }

			      /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
			      .container {
			        display: block;
			        Margin: 0 auto !important;
			        /* makes it centered */
			        max-width: 580px;
			        padding: 10px;
			        width: 580px; }

			      /* This should also be a block element, so that it will fill 100% of the .container */
			      .content {
			        box-sizing: border-box;
			        display: block;
			        Margin: 0 auto;
			        max-width: 580px;
			        padding: 10px; }

			      /* -------------------------------------
			          HEADER, FOOTER, MAIN
			      ------------------------------------- */
			      .main {
			        background: #ffffff;
			        border-radius: 3px;
			        width: 100%; }

			      .wrapper {
			        box-sizing: border-box;
			        padding: 20px; }

			      .content-block {
			        padding-bottom: 10px;
			        padding-top: 10px;
			      }

			      .footer {
			        clear: both;
			        Margin-top: 10px;
			        text-align: center;
			        width: 100%; }
			        .footer td,
			        .footer p,
			        .footer span,
			        .footer a {
			          color: #999999;
			          font-size: 12px;
			          text-align: center; }

			      /* -------------------------------------
			          TYPOGRAPHY
			      ------------------------------------- */
			      h1,
			      h2,
			      h3,
			      h4 {
			        color: #000000;
			        font-family: sans-serif;
			        font-weight: 400;
			        line-height: 1.4;
			        margin: 0;
			        Margin-bottom: 30px; }

			      h1 {
			        font-size: 35px;
			        font-weight: 300;
			        text-align: center;
			        text-transform: capitalize; }

			      p,
			      ul,
			      ol {
			        font-family: sans-serif;
			        font-size: 14px;
			        font-weight: normal;
			        margin: 0;
			        Margin-bottom: 15px; }
			        p li,
			        ul li,
			        ol li {
			          list-style-position: inside;
			          margin-left: 5px; }

			      a {
			        color: #3498db;
			        text-decoration: underline; }

			      /* -------------------------------------
			          BUTTONS
			      ------------------------------------- */
			      .btn {
			        box-sizing: border-box;
			        width: 100%; }
			        .btn > tbody > tr > td {
			          padding-bottom: 15px; }
			        .btn table {
			          width: auto; }
			        .btn table td {
			          background-color: #ffffff;
			          border-radius: 5px;
			          text-align: center; }
			        .btn a {
			          background-color: #ffffff;
			          border: solid 1px #3498db;
			          border-radius: 5px;
			          box-sizing: border-box;
			          color: #3498db;
			          cursor: pointer;
			          display: inline-block;
			          font-size: 14px;
			          font-weight: bold;
			          margin: 0;
			          padding: 12px 25px;
			          text-decoration: none;
			          text-transform: capitalize; }

			      .btn-primary table td {
			        background-color: #3498db; }

			      .btn-primary a {
			        background-color: #3498db;
			        border-color: #3498db;
			        color: #ffffff; }

			      /* -------------------------------------
			          OTHER STYLES THAT MIGHT BE USEFUL
			      ------------------------------------- */
			      .last {
			        margin-bottom: 0; }

			      .first {
			        margin-top: 0; }

			      .align-center {
			        text-align: center; }

			      .align-right {
			        text-align: right; }

			      .align-left {
			        text-align: left; }

			      .clear {
			        clear: both; }

			      .mt0 {
			        margin-top: 0; }

			      .mb0 {
			        margin-bottom: 0; }

			      .preheader {
			        color: transparent;
			        display: none;
			        height: 0;
			        max-height: 0;
			        max-width: 0;
			        opacity: 0;
			        overflow: hidden;
			        mso-hide: all;
			        visibility: hidden;
			        width: 0; }

			      .powered-by a {
			        text-decoration: none; }

			      hr {
			        border: 0;
			        border-bottom: 1px solid #f6f6f6;
			        Margin: 20px 0; }

			      /* -------------------------------------
			          RESPONSIVE AND MOBILE FRIENDLY STYLES
			      ------------------------------------- */
			      @media only screen and (max-width: 620px) {
			        table[class=body] h1 {
			          font-size: 28px !important;
			          margin-bottom: 10px !important; }
			        table[class=body] p,
			        table[class=body] ul,
			        table[class=body] ol,
			        table[class=body] td,
			        table[class=body] span,
			        table[class=body] a {
			          font-size: 16px !important; }
			        table[class=body] .wrapper,
			        table[class=body] .article {
			          padding: 10px !important; }
			        table[class=body] .content {
			          padding: 0 !important; }
			        table[class=body] .container {
			          padding: 0 !important;
			          width: 100% !important; }
			        table[class=body] .main {
			          border-left-width: 0 !important;
			          border-radius: 0 !important;
			          border-right-width: 0 !important; }
			        table[class=body] .btn table {
			          width: 100% !important; }
			        table[class=body] .btn a {
			          width: 100% !important; }
			        table[class=body] .img-responsive {
			          height: auto !important;
			          max-width: 100% !important;
			          width: auto !important; }}

			      /* -------------------------------------
			          PRESERVE THESE STYLES IN THE HEAD
			      ------------------------------------- */
			      @media all {
			        .ExternalClass {
			          width: 100%; }
			        .ExternalClass,
			        .ExternalClass p,
			        .ExternalClass span,
			        .ExternalClass font,
			        .ExternalClass td,
			        .ExternalClass div {
			          line-height: 100%; }
			        .apple-link a {
			          color: inherit !important;
			          font-family: inherit !important;
			          font-size: inherit !important;
			          font-weight: inherit !important;
			          line-height: inherit !important;
			          text-decoration: none !important; }
			        .btn-primary table td:hover {
			          background-color: #34495e !important; }
			        .btn-primary a:hover {
			          background-color: #34495e !important;
			          border-color: #34495e !important; } }

			    </style>
			  </head>
			  <body class="">
			    <table border="0" cellpadding="0" cellspacing="0" class="body">
			      <tr>
			        <td>&nbsp;</td>
			        <td class="container">
			          <div class="content">

			            <!-- START CENTERED WHITE CONTAINER -->
			            <span class="preheader">welcom to zedexcoin.</span>
			            <table class="main">

			              <!-- START MAIN CONTENT AREA -->
			              <tr>
			                <td class="wrapper">
			                  <table border="0" cellpadding="0" cellspacing="0">
			                    <tr>
			                      <td>
			                        <p>Hi '.$username.',</p>
			                        <p>Thankyou for registering with Bitspro, please visit the link below to verify your email address.</p>
			                        <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary">
			                          <tbody>
			                            <tr>
			                              <td align="left">
			                                <table border="0" cellpadding="0" cellspacing="0">
			                                  <tbody>
			                                    <tr>
			                                      <td> <a href="'.base_url('signup/verify_email_account?hash='.$hash).'" target="_blank">Click to verify</a> </td>
			                                    </tr>
			                                  </tbody>
			                                </table>
			                              </td>
			                            </tr>
			                          </tbody>
			                        </table>
			               
			                        <p>login and explore the one of the powerfull digital asset!</p>
			                      </td>
			                    </tr>
			                  </table>
			                </td>
			              </tr>

			            <!-- END MAIN CONTENT AREA -->
			            </table>

			            <!-- START FOOTER -->
			            <div class="footer">
			              <table border="0" cellpadding="0" cellspacing="0">
			                <tr>
			                  <td class="content-block">
			                    <span class="apple-link"></span>
			                    
			                  </td>
			                </tr>
			                <tr>
			                  <td class="content-block powered-by">
			                    Powered by <a href="'.base_url().'">bitspro.io</a>.
			                  </td>
			                </tr>
			              </table>
			            </div>
			            <!-- END FOOTER -->

			          <!-- END CENTERED WHITE CONTAINER -->
			          </div>
			        </td>
			        <td>&nbsp;</td>
			      </tr>
			    </table>
			  </body>
			</html>';

			if (!empty($message)) {
				
		         $this->email->message($message); 
				
			} else {

		         $this->email->message($msg); 
			}

   
         //Send mail 
         if($this->email->send()) {
	         return true;
         	
         } else{

         	// return false;
         	echo $this->email->print_debugger();
         }
         
      } 


}