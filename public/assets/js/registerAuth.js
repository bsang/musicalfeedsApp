// Musical Feeds
// Biak Sang
// Register Form Validation

(function(){

	var fNameValid         = true,
		lNameValid           = true,
		usernameOrEmailValid = true,
		passwordValid        = true,
		confirmPassValid     = true
	;

	var regForm = $('#registerForm'),
		submit  = $('#registerBtn')
	;

	// User Inputs
	var firstName       = regForm.find('#fname'),
		lastName        = regForm.find("#lname"),
		email           = regForm.find("#email"),
		password        = regForm.find("#registerPassword"),
		confirmPassword = regForm.find("#confirmPassword")
	;

	// Validation Icons
	var crossIcon 		= "url('img/cross.png')",
		checkIcon 		= "url('img/check.png')",
		iconPosition 	= 'right center',
		failedBorder	= '#ffbbb0',
		iconRepeat		= 'no-repeat'
	;

	// Patterns or Regex
	var namePattern 	= /^[a-zA-Z ]+(([\'\,\.\-][a-zA-Z ])?[a-zA-Z ]*)*$/,
		emailPattern	= /^([0-9a-zA-Z]([-.\w]*[0-9a-zA-Z])*@([0-9a-zA-Z][-\w]*[0-9a-zA-Z]\.)+[a-zA-Z]{2,9})$/,
		passwordPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}$/
	;

	firstName.focusout(function() {
			firstNameValidate();
		}),

		lastName.focusout(function() {
			lastNameValidate();
		}),

		email.focusout(function() {
			emailValidate();
		}),

		password.focusout(function() {
			passwordValidate();
		}),

		confirmPassword.focusout(function() {
			confirmPassValidate();
		})
	;

	var firstNameValidate = function() {
		var pass = namePattern.test(firstName.val());
		if(!pass) {
			firstName.css({
				'backgroundImage'   : crossIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition,
				'border-color' 			: failedBorder
			});
			return false;
		} else {
			firstName.css({
				'backgroundImage'   : checkIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition
			});

			return true;
		}
	}

	var lastNameValidate = function() {
		var pass = namePattern.test(lastName.val());
		if(!pass) {
			lastName.css({
				'backgroundImage'   : crossIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition,
				'border-color' 		: failedBorder
			});
			return false;
		} else {
			lastName.css({
				'backgroundImage'   : checkIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition
			});

			return true;
		}
	}

	var emailValidate = function() {
		var pass = emailPattern.test(email.val());
		if(!pass) {
			email.css({
				'backgroundImage'   : crossIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition,
				'border-color' 		: failedBorder
			});
			return false;
		} else {
			email.css({
				'backgroundImage'   : checkIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition
			});

			return true;
		}
	}

	var passwordValidate = function() {
		var pass = passwordPattern.test(password.val());
		if(!pass) {
			password.css({
				'backgroundImage'   : crossIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition,
				'border-color' 		: failedBorder
			});
			return false;
		} else {
			password.css({
				'backgroundImage'   : checkIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition
			});

			return true;
		}
	}

	var confirmPassValidate = function() {
		
		if(password.val() != confirmPassword.val() || confirmPassword.val() == '') {
			confirmPassword.css({
				'backgroundImage'   : crossIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition,
				'border-color' 		: failedBorder
			});
			return false;
		} else {
			confirmPassword.css({
				'backgroundImage'   : checkIcon,
				'backgroundRepeat'  : iconRepeat,
				'backgroundPosition': iconPosition
			});

			return true;
		}
	}

	submit.click(function(e) {
		fNameValid 				= firstNameValidate(),
			lNameValid 			= lastNameValidate(),
			emailValid 			= emailValidate(),
			passwordValid 		= passwordValidate(),
			confirmPassValid 	= confirmPassValidate()
		;

		if(fNameValid 			== true 
			&& lNameValid 		== true 
			&& emailValid 		== true 
			&& passwordValid 	== true 
			&& confirmPassValid == true) 
		{
			firstName.val() 	= '';
			lastName.val()  	= '';
			email.val() 		= '';
			password.val() 		= '';
			confirmPassword.val() 	= '';

			
		} else {
			console.log("Failed");
		}

		return false;
	});

	requiredFilledIn();

})();