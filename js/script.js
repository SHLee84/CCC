//
//	jQuery Validate example script
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

	$.validator.addMethod(
		"regex",
		function(value, element, regexp) {
			var re = new RegExp(regexp);
			return this.optional(element) || re.test(value);
		},
		"Please check your input."
	);
	$('#signup-form').validate({
		rules: {
			user_id: {
				minlength: 6,
				required: true
			},
			f_name: {
				minlength: 3,
				required: true
			},
			l_name: {
				minlength: 2,
				required: true
			},
			email: {
				required: true,
				email: true
			},
			phone: {
				required: true,
				number: true,
				rangelength: [7,12]
			},
			pw: {
				required: true,
				minlength: 8
			},
			cpw: {
				required: true,
				minlength: 8,
				equalTo: "#pw"
			}
		},
		messages: {
			user_id: {
				minlength: "Your user ID should contain at least 6 letters. (Alphanumeric and underscore only)"
			},
			f_name: {
				required: "Your first name cannot be empty.",
				minlength: "First name should be at least 3 characters long."
				},
			l_name: {
				required: "Your last name cannot be empty."
			},
			email: {
				email: "Please enter a valid email address."
			},
			phone: {
			},
			pw: {
			},
			cpw: {
			}
	    },
		highlight: function(element) {
			$(element).closest('.form-group').addClass('has-error');
		},
		success: function(element) {
			$(element).closest('.form-group').removeClass('has-error');
		},
		errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.form-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
	});
}); // end document.ready