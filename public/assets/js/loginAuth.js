// Musical Feeds
// Biak Sang
// Login Form Validation

(function() {

	var emailValid 		= true,
		passwordValid 	= true
	;

	var email 			= $('#username'),
		password 		= $('#password')
	;

	console.log(email);
	var regForm 		= $('#loginForm'),
		loginBtn		= $('#login');

	var emailPattern 	= /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,
		passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/
	;

	// Validation Icons
	var crossIcon 		= "url('img/cross.png')",
		checkIcon 		= "url('img/check.png')",
		iconPosition 	= 'right center',
		passBorderColor = '#a3e036',
		failedBorder	= '#ffbbb0',
		iconRepeat		= 'no-repeat'
	;

	email.focusout(function() {
			validateLoginForm.emailValidate();
		}),

		password.focusout(function() {
			validateLoginForm.passwordValidate();
		})
	;
	var validateLoginForm = {

		'emailValidate' 	: function() {
			var pass = emailPattern.test(email.val());
			if(!pass) {
				email.css({
					'backgroundImage'   : crossIcon,
					'backgroundRepeat'  : iconRepeat,
					'backgrousndPosition': iconPosition,
					'border-color' 		: failedBorder
				});
			} else {
				email.css ({
					'backgroundImage'   : checkIcon,
					'backgroundRepeat'  : iconRepeat,
					'backgroundPosition': iconPosition,
					'border-color'		: passBorderColor
				});
			}
		},

		'passwordValidate' 	: function() {
			var pass = passwordPattern.test(password.val());
			if(!pass) {
				password.css({
					'backgroundImage'   : crossIcon,
					'backgroundRepeat'  : iconRepeat,
					'backgroundPosition': iconPosition,
					'border-color' 		: failedBorder
				});
			} else {
				password.css ({
					'backgroundImage'   : checkIcon,
					'backgroundRepeat'  : iconRepeat,
					'backgroundPosition': iconPosition,
					'border-color'		: passBorderColor
				});
			}
		} 

	};


	loginBtn.click(function(e) {
		emailValid 		= validateLoginForm.emailValidate();
		passwordValid 	= validateLoginForm.passwordValidate();

		if(email.val() == true && password.val() == true) {
			email.val() 	= '';
			password.val() 	= '';
		} else {
			console.log("Failed");
		}
	})

})();