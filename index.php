<?php
	include('includes/connect.php');
	include('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?php echo $PROJECT_TITLE;?></title>
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<!-- For Languages logos-->
		<link rel="stylesheet" href="css/devicon.css">
		<!-- If you want colored versions -->
		<link rel="stylesheet" href="css/devicon-colors.css">
		<!-- Font Awesome -->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Google Captcha API-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="10">
	<div id="main">
	<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
		        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				            <span class="sr-only">Toggle navigation</span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
				            <span class="icon-bar"></span>
			          </button>
		          <a class="navbar-brand" href="#home">
		          				<?php
			          				getNavBrand('menu');
			          			?>
		         </a>
		        </div><!-- ./navbar-header-->
		        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav" id="navbar-links">
			          		<?php
			          			getMenu('menu');
			          		 ?>
			          </ul>
		        </div><!--/.nav-collapse -->
	      </div><!-- ./container-->
	    </nav>

	    <div class="header text-center" id="home">
	    		<!-- <h1><span class="element"></span></h1><span class="typed-cursor"></span> -->
	    		<h1>Omkar Pathak<span></span></h1>
	    		<p><i><?php echo $JUMBOTRON_SUBHEADING; ?></i></p>
	    		<br>
	    		<div class="container text-justify">
	    			<p><?php echo $JUMBOTRON_DESC; ?></p>
	    		</div>
	    		<div class="container">
	    			<h4>GITHUB Repository for my collection of Python Programs</h4>
	    			<br>
	    			<h4><a href="https://github.com/OmkarPathak/Python-Programs/" style="text-decoration: none; color: black;"><button class="btn btn-lg" id="jumbotron-button" style="border-radius:0;">Repository Link</button></a></h4>
	    		</div>
	    		<br>
	    		<div id="check"></div>
	    </div>

	    <section id="<?php  echo $SECTION_ONE_ID; ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container">
	        <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center slideanim">
                      <h2 class="section-heading"><?php  echo $SECTION_ONE; ?></h2>
                      <hr style="max-width:50px;border-top: 2px solid #9868C6;">
                      <!--<h4 class="section-subheading text-muted">Currently just Studying</h4>--><br>
                  </div><!-- ./column -->
            </div><!-- ./row -->
	    	<div class="row text-center">
	    		<div>
	    			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 add-space-bottom slideanim">
	    				<i class="devicon-python-plain-wordmark glyphicon-huge"></i>
	    				<h4 class="text-justify"><?php echo $PYTHON_DESC; ?></h4>
	    			</div><!-- ./column -->
	    			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 add-space-bottom slideanim">
	    				<i class="devicon-php-plain glyphicon-huge"></i>
	    				<h4 class="text-justify"><?php echo $PHP_DESC; ?></h4>
	    			</div><!-- ./column -->
	    			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 add-space-bottom slideanim">
	    				<i class="devicon-linux-plain glyphicon-huge"></i>
	    				<h4 class="text-justify"><?php echo $LINUX_DESC; ?></h4>
	    			</div><!-- ./column -->
	    		</div><!-- ./container -->
	    	</div><!-- ./row-->

	    	<div class="row">
	    		<a href="view/aboutMe.php"><button id="know" class="col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-4 btn btn-lg">Know More About Me</button></a>
	    	</div><!-- ./row -->
	    </section><!-- ./section-about -->

	    <section id="<?php  echo $SECTION_TWO_ID; ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container">
	    	<div class="row">
	    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center slideanim">
	    			<h2 class="section-heading"><?php  echo $SECTION_TWO; ?></h2>
	    			<hr style="max-width:50px;border-top: 2px solid #9868C6;">
	    		</div><!-- ./column -->
	    	</div><!-- ./row-->
	    	<div style="padding-top: 3%;"></div>
	    	 <div class="row text-center">

		    	    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 slideanim">
		    	    		<div class="panel panel-default text-center">
		    	    		        <div class="panel-heading">
		    	    		          	<p><h3>PHOTOGRAPHY</h3></p>
		    	    		        </div><!-- ./panel-heading-->
		    	    		        <div class="panel-body">
		    	    		          		<img class="img-responsive fixed-image" src="images/<?php echo $PHOTOGRAPGY_IMAGE; ?>" alt="Photography">
		    	    		        </div><!-- ./panel-body -->
		    	    		        <div class="panel-footer">
		    	    		          <a href="view/imageGallery-photography.php"><button class="btn btn-lg" style="border-radius:0;">View</button></a>
		    	    		        </div><!-- ./panel-footer -->
		    	    		 </div> <!-- ./panel -->
		    	    </div><!-- ./column -->

		    	    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 slideanim">
		    	    		<div class="panel panel-default text-center">
		    	    		        <div class="panel-heading">
		    	    		          	<p><h3>SKETCHING</h3></p>
		    	    		        </div><!-- ./panel-heading-->
		    	    		        <div class="panel-body">
		    	    		          		<img class="img-responsive fixed-image" src="images/<?php echo $SKETCHING_IMAGE; ?>" alt="Sketching">
		    	    		        </div><!-- ./panel-body -->
		    	    		        <div class="panel-footer">
		    	    		          <a href="view/imageGallery-sketches.php"><button class="btn btn-lg" style="border-radius:0;">View</button></a>
		    	    		        </div><!-- ./panel-footer -->
		    	    		 </div> <!-- ./panel -->
		    	    </div><!-- ./column -->

		    	    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 slideanim">
		    	    		<div class="panel panel-default text-center">
		    	    		        <div class="panel-heading">
		    	    		          	<p><h3>PROJECTS</h3></p>
		    	    		        </div><!-- ./panel-heading-->
		    	    		        <div class="panel-body">
		    	    		          		<img class="img-responsive fixed-image" src="images/<?php echo $WORKSHOP_IMAGE; ?>" alt="Workshops">
		    	    		        </div><!-- ./panel-body -->
		    	    		        <div class="panel-footer">
		    	    		          <a href="view/aboutMe.php#projects"><button class="btn btn-lg" style="border-radius:0;">View</button></a>
		    	    		        </div><!-- ./panel-footer -->
		    	    		 </div> <!-- ./panel -->
		    	    </div><!-- ./column -->
	    	</div><!-- ./row-->
	    </section><!-- ./section-portfolio-->

	    <!-- <section id="<?php  echo $SECTION_THREE_ID; ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container">
	    	<div class="row">
	    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
	    			<h2 class="section-heading"><?php  echo $SECTION_THREE; ?></h2>
	    			<hr style="max-width:50px;border-top: 2px solid #9868C6;">
	    		</div> --><!-- ./column -->
	    	<!-- </div> --><!-- ./row-->
	    	<!-- <div class="row slideanim">
	    		<div class="col-md-2 col-lg-2"></div>
	    		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
	    			<div class="panel-group">
	    			<?php
	    				// getPosts('posts');
	    			 ?>
	    			</div> --><!-- ./panel-group -->
	    		<!-- </div> --><!-- ./column -->
	    	<!-- </div> --><!-- ./row-->
	    <!-- </section> --><!-- ./section-contact-->

	    <section id="<?php  echo $SECTION_FOUR_ID; ?>" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container">
	    	<div class="row">
	    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center slideanim">
	    			<h2 class="section-heading"><?php  echo $SECTION_FOUR; ?></h2>
	    			<hr style="max-width:50px;border-top: 2px solid #9868C6;">
	    		</div><!-- ./column -->
	    		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center slideanim">
	    			<i class="fa fa-code" style="font-size:40px;"></i>
	    			<h4 class="text-justify">Need help in any code? Or don't know where to start? Just contact me and I'll make sure to ping you back with your solution.</h4>
	    		</div>

	    		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center slideanim">
	    			<i class="fa fa-terminal" style="font-size:40px;"></i>
	    			<h4 class="text-justify">Beginner? Don't have enough problem statements to pratice? Try competitive programming, it will boost your programming skills to a whole other level.</h4>
	    		</div>
	    	</div><!-- ./row-->
	    	<div style="padding-top: 3%;"></div>
	    	<div class="row slideanim">
	    		    <div class="col-md-1 col-xs-12 col-sm-12"></div>
		    	    <div class="col-md-4 col-xs-12 col-sm-12">
			    	      <p><span class="glyphicon glyphicon-map-marker"></span> Pune, Maharashtra, India</p>
			    	      <p><span class="glyphicon glyphicon-phone"></span> +91 8087996634</p>
			    	      <p><span class="glyphicon glyphicon-envelope"></span> omkarpathak27@gmail.com</p>
			    	      <label>Follow Me:</label>
			    	      <div class="col-md-12 col-lg-12" style="margin: 0; padding: 0">
				    	      <span class="input-group">
				    	      	<a class="col-md-2 col-xs-2" href="https://www.facebook.com/omkarpathak27" style="padding-left: 0;"><p><i class="	fa fa-facebook-square" style="font-size:40px;"></i></p></a>
				    	      	<a class="col-md-2 col-xs-2" href="https://www.instagram.com/omkarpathak27/" style="padding-left: 0;"><p><i class="fa fa-instagram" style="font-size:40px;"></i></p></a>
				    	      	<a class="col-md-2 col-xs-2" href="https://github.com/OmkarPathak" style="padding-left: 0;"><p><i class="fa fa-github" style="font-size:40px;"></i></p></a>
				    	      	<a class="col-md-2 col-xs-2" href="https://www.quora.com/profile/Omkar-Pathak-18" style="padding-left: 0;"><p><i class="fa fa-quora" style="font-size:40px;"></i></p></a>
				    	      	<a class="col-md-2 col-xs-2" href="https://www.linkedin.com/in/omkar-pathak-94473811b/" style="padding-left: 0;"><p><i class="fa fa-linkedin-square" style="font-size:40px;"></i></p></a>
				    	      </span>
			    	      </div>
			    	      <p><a href="privacypolicy.htm">Privacy Policy</a></p>
			    	      <?php
				    	      $counterVal = getCount();
				    	      echo "<p>Page Views: $counterVal</p>";
			    	      ?>
		    	    </div><!-- ./column -->
		    	    <div class="col-md-6 container col-xs-12 col-sm-12">
		    	    	<form id="myForm" method="POST">
			    	      <div class="row">
				    	        <div class="col-sm-6 form-group">
				    	          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
				    	        </div>
				    	        <div class="col-sm-6 form-group">
				    	          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
				    	        </div>
				      </div><!-- ./row-->
				      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                      <div class="g-recaptcha" data-sitekey="6Lf8WjIUAAAAAB1ZeXRRfAQ4fy6II2g-z2oB4X6a"></div><br>
				       <div class="row">
				    	        <div class="col-sm-12 form-group">
				    	          <button name="Submit" class="btn btn-primary btn-lg pull-right" type="submit">Send</button>
				    	        </div>
			    	      </div><!-- ./row-->
			    	 </form>
		    	    </div><!-- ./column -->
		 </div><!-- ./row-->
	    </section><!--  ./contact -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
	<script src="js/bootstrap-notify.js"></script>
	<script src="js/typed.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		  // Add smooth scrolling to all links in navbar + footer link
		  $(".navbar a, footer a[href='#myPage'], #home a[href='#python']").on('click', function(event) {

		   // Make sure this.hash has a value before overriding default behavior
		  if (this.hash !== "") {

		    // Prevent default anchor click behavior
		    event.preventDefault();

		    // Store hash
		    var hash = this.hash;

		    // Using jQuery's animate() method to add smooth page scroll
		    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
		    $('html, body').animate({
		      scrollTop: $(hash).offset().top
		    }, 900, function(){

		      // Add hash (#) to URL when done scrolling (default click behavior)
		      window.location.hash = hash;
		      });
		    } // End if
		  });
		})

		$(document).ready(function() {
		    $("body").click(function(event) {
		            // only do this if navigation is visible, otherwise you see jump in navigation while collapse() is called
		             if ($(".navbar-collapse").is(":visible") && $(".navbar-toggle").is(":visible") ) {
		                $('.navbar-collapse').collapse('toggle');
		            }
		      });
		});

		$(window).scroll(function() {
			if ($(document).scrollTop() > 400) {
			$('.navbar').addClass('shrink');
			}
			else {
			$('.navbar').removeClass('shrink'); }
		});

		$(window).scroll(function() {
		  $(".slideanim").each(function(){
		    var pos = $(this).offset().top;

		    var winTop = $(window).scrollTop();
		    if (pos < winTop + 600) {
		      $(this).addClass("slide");
		    }
		  });
		});

		$('#myForm').on('submit', function(){
			data = {};
			var that = $(this);

			that.find('[name]').each(function(index, value){
				var that = $(this),
				      name = that.attr('name'),
				      value = that.val();

				data[name] = value;
			});

			$.ajax({
				url: "includes/mail.php",
				method: 'POST',
				data:data,
				success: function(data){
				               //alert(data); // show response from the php script

			               	$.notify({
			                   	message: data

				                   },{
				                       type: 'info',
				                       timer: 2000
				                   });
				}
			});

			return false;
		});

		$(document).ready(function(){
		   var scroll_start = 0;
		   var startchange = $('#check');
		   var offset = startchange.offset();
		    if (startchange.length){
			   $(document).scroll(function() {
			      scroll_start = $(this).scrollTop();
			      if(scroll_start > offset.top) {
			          $(".navbar-default").css('background-color', '#f0f0f0');
			          $(".navbar-default .navbar-nav li a").css('color', 'black');
			          $(".navbar-default .navbar-brand").css('color', 'black');
			       } else {
			          $('.navbar-default').css('background-color', 'transparent');
			          $('.navbar-default .navbar-nav li a').css('color', 'white');
			          $(".navbar-default .navbar-brand").css('color', 'white');
			          $(".collapsed").css('color', 'black');
			       }
			   });
		    }
		});

		// var typed3 = new Typed('.element', {
		//    strings: ['Omkar Pathak'],
		//    typeSpeed: 30,
		//    backSpeed: 0,
		//    smartBackspace: true, // this is a default
		//    // loop: true,
		//  });
	</script>
	</body>
</html>
