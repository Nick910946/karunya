jQuery("#contact_form").validate({
		rules: {
			name: {
			required: true
			},
            email: {
			required: true
			},			
			description: {
			required: true
			},
			phoneno: {
      required: true,
      minlength: 10,
      maxlength: 12,
      digits: true
    },
	
			
		},
			messages: {
			username: "This field is required.",
			
			},
			submitHandler: function(form) {
			var data = jQuery('#contact_form').serialize();
                jQuery.ajax({
                    method: "POST",
                    url: "userdata.php",
                     data: jQuery('#contact_form').serialize(),
                    success: function(data) {   
                    jQuery('#contact-message').html(data);
					setTimeout(function(){ jQuery('#contact-message').hide();
                      jQuery('#contact_form')[0].reset();
					}, 9000);
                    },
                    error: function (error) {
                         console.log(error);
                    }
                });
                return false; // Will stop the submission of the form
            }

			});
			
			
/************************** News letter Form *********************/
jQuery("#footer_form").validate({
		rules: {
            email: {
			required: true
			},			
			
	
			
		},
			messages: {
			username: "This field is required.",
			
			},
			submitHandler: function(form) {
			var data = jQuery('#footer_form').serialize();
			    jQuery.ajax({
                    method: "POST",
                    url: "userinfo.php",
                     data: jQuery('#footer_form').serialize(),
                    success: function(data) {   
                    jQuery('#contact-response').html(data);
					setTimeout(function(){ jQuery('#contact-response').hide();
                      jQuery('#footer_form')[0].reset();
					}, 9000);
                    },
                    error: function (error) {
                         console.log(error);
                    }
                });
                return false; // Will stop the submission of the form
            }

			});
			
			
/************************** Popup form *********************/
jQuery("#enquiry_post").validate({
		rules: {
			name: {
			required: true
			},
            email: {
			required: true
			},			
			phoneno: {
      required: true,
      minlength: 10,
      maxlength: 12,
      digits: true
    },
	
			
		},
			messages: {
			username: "This field is required.",
			
			},

			});
			
			
			
			
/******************************************************/
/************************** Popup form *********************/
jQuery("#popup-id").validate({
		rules: {
			name: {
			required: true
			},
            email: {
			required: true
			},			
			phoneno: {
      required: true,
      minlength: 10,
      maxlength: 12,
      digits: true
    },
	
			
		},
			messages: {
			username: "This field is required.",
			
			},

			});