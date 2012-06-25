<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Girard Tarps Inc.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body id="home">

	<div id="header">
      	<div id="nav-container">
	        <div class="navbar navbar-fixed-top">
	          <div class="navbar-inner">
	            <div class="container">
	              <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </a>
	              <div class="nav-collapse">
	                <ul class="nav">
	                  <li><a href="#home">Home</a></li>
	                  <li><a href="#employee-profile">Employee Profile</a></li>
	                  <li><a href="#contact-form">Contact</a></li>
	                </ul>
	              </div><!--/.nav-collapse -->
	            </div>
	          </div>
	        </div>
        </div>
	
	
    	<!-- Hero Unit -->
		<div id="hero">
	  		<div class="container">
		        <div class="row" id="hero">
		          <!-- <div class="span4">
		            <h1>Girard Tarps Inc.</h1>
		            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
		            <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
		          </div> -->
		          <div class="span12">
		            <img id="logo" src="img/logo.png">
		          </div>
		        </div>
	  		</div>
		</div>
	</div>

    <!-- Start Content -->
    <div class="container" id="employee-profile">
    	<div class="row">
	        <div class="span4">
	          <img class="thumbnail" src="http://placehold.it/360x400">
	        </div>
	        <div class="span8">
	          <h2>Employee Profile</h2>
	           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
	          <p><a class="btn" href="#">View details &raquo;</a></p>
	        </div>
    	</div>
    </div> <!-- /container -->

    <!-- Start Footer -->
    <footer class="container">
        <div class="row">
          <div class="span4">
            <h2>Heading 1</h2>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
          </div>
          <div class="span4">
            <h2>Heading 2</h2>
             <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn" href="#">View details &raquo;</a></p>
         </div>
          <div class="span4">
            <h2>Contact Us</h2>
            <form action="" id="contact-form" class="form-horizontal">
              <fieldset>
                  <div class="control-group">
                    <label class="control-label" for="name">Your Name</label>
                    <div class="controls">
                      <input type="text" class="input-large" name="name" id="name">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="email">Email Address</label>
                    <div class="controls">
                      <input type="text" class="input-large" name="email" id="email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="subject">Subject</label>
                    <div class="controls">
                      <input type="text" class="input-large" name="subject" id="subject">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="message">Your Message</label>
                    <div class="controls">
                      <textarea class="input-large" name="message" id="message" rows="3"></textarea>
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary btn-large">Submit Message</button>
                  </div>
                </fieldset>
            </form>
          </div>
        </div>

        <p>&copy; Copyright <?php echo date('Y'); ?> Girard Tarps Inc. | Web Services by <a href="http://cktwebservices.net">Craw-Kan Telephone Cooperative Inc.</a></p>
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/custom.js"></script>
    
    <script>
    $(document).ready(function() {
    $("#logo").animate( {marginLeft: 25}, 1000 );
    });
    </script>


    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
