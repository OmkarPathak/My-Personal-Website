<?php
	include('connect.php');
	session_start();
	if (!isset($_SESSION['userID'])) {
		header("Location:login.php");
	}
	if (isset($_POST['Delete'])) {
		$query12 = 'DELETE FROM  posts WHERE postID = '. mysqli_real_escape_string($con, $_POST['postid']);
		$result12 = $con->query($query12);
		header("Location:editPost.php");
	}
	if (isset($_POST['Edit'])) {
		$query3 = 'SELECT * FROM posts WHERE postID = "'. mysqli_real_escape_string($con, $_POST['postid']) .'"';
          		$result3 = $con->query($query3);
          		$row3 = $result3->fetch_assoc();
	}
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
		          <a class="navbar-brand" href="#main">
		          				<?php 
			          				$query = 'SELECT * FROM menu WHERE menuID = 1';
			          				$result = $con->query($query);
			          				$row = $result->fetch_assoc();
			          				echo $row['navbarBrand'];
			          			?>       		
			   </a>
		        </div><!-- ./navbar-header-->
		        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav" id="navbar-links">
			            		<li>
			            			<a href="index.php">CREATE</a>
			            		</li>
			            		<li>
			            			<a href="editPost.php">EDIT</a>
			            		</li>
			            		<li>
			            			<a href="logout.php">LOGOUT</a>
			            		</li>
			          </ul>
		        </div><!--/.nav-collapse -->
	      </div><!-- ./container-->
	    </nav>

	    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 60px;">
	    <h1 class="text-center">Edit Posts</h1>
	    	<form class="form-group" id="myForm" method="POST">
	    		<label>Post Title</label>
	    		<input type="text" class="form-control" name="postTitle" value="<?php if(isset($row3['postTitle'])){ echo $row3['postTitle'];}?>">
	    		<br>
	    		<label>Post Desc</label>
	    		<input type="text" class="form-control" name="postDesc" value="<?php if(isset($row3['postDesc'])){ echo $row3['postDesc'];}?>">
	    		<br>
	    		<label>Post Content</label>
	    		<textarea class="ckeditor" id="postContent" name="postContent"><?php  echo $row3['postContent']; ?></textarea>
	    		<br>
	    		<input type="hidden" name="postID" value="<?php if(isset($row3['postID'])){ echo $row3['postID'];}?>"/>
	    		<button class="btn btn-primary" name="Submit">Submit</button> 
	    	</form>
	    </div>


	    	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    	<script src="js/jquery.min.js"></script>
	    	<!-- Include all compiled plugins (below), or include individual files as needed -->
	    	<script src="js/bootstrap.min.js"></script>
	    	<script src="ckeditor/ckeditor.js"></script>
	    	<script src="js/bootstrap-notify.js"></script>
	    	<script type="text/javascript">
	    		$(document).ready(function() { 
	    		    $("body").click(function(event) {
	    		            // only do this if navigation is visible, otherwise you see jump in navigation while collapse() is called 
	    		             if ($(".navbar-collapse").is(":visible") && $(".navbar-toggle").is(":visible") ) {
	    		                $('.navbar-collapse').collapse('toggle');
	    		            }
	    		      });
	    		});

	    		$('form').on('submit', function(){

	    			for ( instance in CKEDITOR.instances ) {
	    			        CKEDITOR.instances[instance].updateElement();
	    			}
	    			
	    			data = {};
	    			var that = $(this);

	    			that.find('[name]').each(function(index, value){
	    				var that = $(this),
	    				      name = that.attr('name'),
	    				      value = that.val();

	    				data[name] = value;
	    			});

	    			$.ajax({
	    				url: 'submit.php',
	    				method: 'POST',
	    				data:data,
	    				success: function(data){
	    					//console.log(data);
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
	    	</script>
	    	</body>
	    </html>