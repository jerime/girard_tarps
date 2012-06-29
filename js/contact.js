$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions
	
		$('#contact-form').validate({
	    rules: {
	      name: {
	        minlength: 2,
	        required: true
	      },
	      email: {
	        required: true,
	        email: true
	      },
	      subject: {
	      	minlength: 2,
	        required: true
	      },
	      message: {
	        minlength: 2,
	        required: true
	      }
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	  });
	  

	
	$("button#submit").click(function(){
	
	var name = $("input#name").val();
	var email = $("input#email").val();
	var subject = $("input#subject").val();
	var message = $("textarea#message").val();
	
	var dataString = 'name=' + name + '&email' + email + '&subject' + subject + '&message' + message;
	//alert (dataString);return false;
	
		$.ajax({
			type: "POST",
			url: "bin/process.php",
			data: dataString,
			success: function() {
				$('#contact').html("<div id='message' class='alert alert-info'></div>");
				$('#message').html("<p><strong>Message Successfully Sent!</strong></p>")
				.append("<p>Thank you for using our contact form. Your email was successfully sent and we&rsquo;ll be in touch with you soon.</p>")
				.hide()
				$('#message').fadeIn(1500);
				}
			});
			return false;
		});
	  
}); // end document.ready