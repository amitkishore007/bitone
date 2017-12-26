<?php 



$config = [

		'login_form_validation'=>[

							[
							'field' => 'email',
							'label' => 'Email address',
							'rules' => 'required|trim|valid_email'
        
							],
							[
							
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required'
        
							]

		],

		'twofa_login_form_validation'=>[

							[
							'field' => 'email',
							'label' => 'Email address',
							'rules' => 'required|trim|valid_email'
        
							],
							[
							
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required'
        
							],
							[
							
							'field' => 'twofa',
							'label' => '2FA',
							'rules' => 'required|trim'
        
							]

		], 
		'user_registration_form_validation'=>[

							[
							
							'field' => 'name',
							'label' => 'User Name',
							'rules' => 'required|trim|min_length[3]|alpha_numeric|is_unique[users.username]'
        
							],
							[
							
							'field' => 'email',
							'label' => 'Email',
							'rules' => 'required|trim|valid_email|is_unique[users.email]'
        
							],
							[
							
							'field' => 'phone',
							'label' => 'Phone number',
							'rules' => 'required|trim|is_natural|exact_length[10]'
        
							],
							[
							
							'field' => 'password',
							'label' => 'Password',
							'rules' => 'required|trim|min_length[8]'
        
							],
							[
							
							'field' => 'retype',
							'label' => 'Retype password',
							'rules' => 'required|trim|matches[password]'
        
							]
							

		],

];