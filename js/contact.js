$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions
	$("#contact-form").submit(function(){
		}).validate({
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
	
	var name = $("input#name").val(),
	    email = $("input#email").val(),
	    subject = $("input#subject").val(),
	    message = $("textarea#message").val();
	
	var dataString = 'name=' + name + '&email=' + email + '&subject=' + subject + '&message=' + message;
	//alert (dataString);return false;
	
		$.ajax({
			beforeSend: function(){
				return $("#contact-form").validate().form();
			},
			type: "POST",
			url: "functions/process.php",
			data: dataString,
			success: function() {
				//alert (dataString);return false;
				$('#contact').html("<div id='message' class='alert alert-info'></div>");
				$('#message').html("<h3 id='contact-header'>Message Successfully Sent!</h3>")
				.append("<p>We&rsquo;ll be in touch with you soon.</p>")
				.hide()
				$('#message').fadeIn(1500);
				}
			});
			return false;
		});
	  
}); // end document.ready