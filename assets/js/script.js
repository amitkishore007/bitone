$('document').ready(function(){



	$('.crypto-icon').hover(function(){

		$(this).addClass('pulse');

	});


	
	$('.user-login').on('click',function(){

		
		var email     = $('#user-email').val();
		var password  = $('#user-password').val();

		var btn = $(this);

		$.ajax({

			url : ajax_url+'login/login',
			type: 'POST',
			data : {email:email,password:password},
			beforeSend : function() {

				btn.addClass('disabled');
				btn.html('validating..');
				$('.form-error').hide();
				$('.form-error').html('');
			},
			success : function(html) {	

				console.log(html);

				btn.removeClass('disabled');
				btn.html('Login');
				var data = $.parseJSON(html);

				if (data.status=='success') {

					window.location = ajax_url+'dashboard';

				} else if(data.status=='twofa') {

					btn.removeClass('user-login');
					$('.two-fa-input').slideDown();
					btn.hide();
					$('.check2fa').show();


					toastr["success"]("Please use google authenticator app for 2FA code!");


				} else {

					$('.form-error').show();

					$('.form-error').html(data.error);
				}
			}

		});


		return false;
	});


	$('.create-user').on('click',function(){

		var btn = $(this);


		var form = $('#signup-form');

		var form_data = form.serialize();

		 console.log(form_data);


		$.ajax({

			type : 'POST',
			url  : ajax_url+'signup/create_user',
			data : form_data,
			beforeSend : function() {
				btn.attr('disabled','disabled');
				btn.html('Please Wait...');
				
				$('.error').hide();
			},
		error : function(jqXHR,exception) {
				console.log(jqXHR.responseText);
				var msg = '';
		        if (jqXHR.status === 0) {
		            msg = 'Not connect.\n Verify Network.';
		        } else if (jqXHR.status == 404) {
		            msg = 'Requested page not found. [404]';
		        } else if (jqXHR.status == 500) {
		            msg = 'Internal Server Error [500].';
		        } else if (exception === 'parsererror') {
		            msg = 'Requested JSON parse failed.';
		        } else if (exception === 'timeout') {
		            msg = 'Time out error.';
		        } else if (exception === 'abort') {
		            msg = 'Ajax request aborted.';
		        } else {
		            msg = 'Uncaught Error.\n' + jqXHR.responseText;
		        }
		        alert(msg);
			},
			success : function(html) {

				$('.error').show();

				console.log(html);

				btn.removeAttr('disabled');
				btn.html('Create Account');
				
				var data = $.parseJSON(html);

				if (data.status=='false') {

					if (data.name.length!=0) {

						$('input[name="name"]').focus();
						$('input[name="name"]').addClass('invalid');

						$(' label[for="user-name"]').attr('data-error',data.name);	
					}

					if (data.email.length!=0) {

						$(' label[for="user-email"]').addClass('active');	
						
						$('.fa-envelope').addClass('active');	
						$('input[name="email"]').focus();
						$('input[name="email"]').addClass('invalid');
						$(' label[for="user-email"]').attr('data-error',data.email);	
							
					}
					if (data.phone.length!=0) {
						
				
						$('input[name="phone"]').focus();
						$('input[name="phone"]').addClass('invalid');
						$(' label[for="user-mobile"]').attr('data-error',data.phone);	
							
					}
					if (data.password.length!=0) {

						$('input[name="password"]').focus();
						$('input[name="password"]').addClass('invalid');
						$(' label[for="user-password"]').attr('data-error',data.password);	
						
					}
					if (data.retype.length!=0) {
						
						$('input[name="retype"]').focus();
						$('input[name="retype"]').addClass('invalid');
						$(' label[for="user-retype"]').attr('data-error',data.retype);	
						
					}
					

					
					
					// $('.captcha-error').html(data.captcha);	
					

				} else {

					window.location = ajax_url+'dashboard';
				}

			}
		});
		return false;


	});


	$('.toggle-2fa').on('click',function(){

		var btn = $(this);
		var status = btn.attr('data-status');

		$.ajax({

			url : ajax_url+'security/activate_2fa',
			type: 'POST',
			data : {status:status},
			beforeSend : function() {

				btn.addClass('disabled');
				
			},
			success : function(html) {

				btn.removeClass('disabled');

				var data = $.parseJSON(html);
				console.log(html);

				if (data.status=='success') {

					$('.show-qr img').attr('src',data.qr_code);
					$('.qr-form').slideDown();
					btn.hide();

				} else {

					alert('please try later !');
					
				}

			}
	});

});

	$('.submit-2fa-code').on('click',function(){

		var btn = $(this);

		var code = $('#qr-input').val();

		$.ajax({

			url : ajax_url+'security/two_fa_submit',
			type: 'POST',
			data : {code:code},
			beforeSend : function() {

				btn.addClass('disabled');
				btn.html('Validating...');
				$('.check-error').html('');
				
			},
			success : function(html) {

				btn.removeClass('disabled');
				
				btn.html('Activate 2FA');

				// var data = $.parseJSON(html);
				console.log(html);

				if (html=='success') {

					
					$('.qr-form').slideUp();
					$('.qr-form').remove();
					$('.2fa-title').removeClass('alert-primary');
					$('.2fa-title').addClass('alert-success');
					$('.2fa-title').html('You have enabled Two Factor Authentication');
					$('.2fa-title').show();
					$('.toggle-2fa').removeClass('btn-danger');
					$('.toggle-2fa').addClass('btn-success');
					$('.toggle-2fa').html('2FA Activated !');
					$('.toggle-2fa').show();

				} else {

					$('.check-error').html('Please enter a valid 2FA.');

				}

			}

	});

		return false;

	});



	$('#login-form ').on('click','.check2fa',function(){

		

		var email    = $('#user-email').val();
		var password = $('#user-password').val();
		var code     = $('#twofa-number').val();

		var btn = $(this);

		$.ajax({

			url : ajax_url+'login/twofa_login',
			type: 'POST',
			data : {email:email,password:password,twofa:code},
			beforeSend : function() {

				btn.addClass('disabled');
				btn.html('validating..');
				$('.form-error').hide();
				$('.form-error').html('');
			},
		error : function(jqXHR,exception) {
				console.log(jqXHR.responseText);
				var msg = '';
		        if (jqXHR.status === 0) {
		            msg = 'Not connect.\n Verify Network.';
		        } else if (jqXHR.status == 404) {
		            msg = 'Requested page not found. [404]';
		        } else if (jqXHR.status == 500) {
		            msg = 'Internal Server Error [500].';
		        } else if (exception === 'parsererror') {
		            msg = 'Requested JSON parse failed.';
		        } else if (exception === 'timeout') {
		            msg = 'Time out error.';
		        } else if (exception === 'abort') {
		            msg = 'Ajax request aborted.';
		        } else {
		            msg = 'Uncaught Error.\n' + jqXHR.responseText;
		        }
		        alert(msg);
			},
			success : function(html) {	

				console.log(html);

				btn.removeClass('disabled');
				btn.html('Login');
				var data = $.parseJSON(html);

				if (data.status=='success') {

					window.location = ajax_url+'dashboard';

				}  else {

					$('.form-error').show();

					$('.form-error').html(data.error);
				}
			}

		});


		return false;

	});

get_crypto_rate('bitcoin');
get_crypto_rate('ethereum');
	

});


function get_crypto_rate(coin){

	$.ajax({

		type: 'POST',
		url : ajax_url+'login/home',
		data : {coin:coin},
		success:function(html){
			console.log(html);
			$('.'+coin+'_rate').html(html);
		}

	});

}