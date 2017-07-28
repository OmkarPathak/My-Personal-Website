<?php
	include('connect.php');
	session_start();
	if (!isset($_SESSION['userID'])) {
		header("Location:login.php");
	}
	else{
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
    		<table class="table table-striped table-bordered table-hover text-center">
    			<thead>
		    		<tr>     
                                        <th>Post ID</th>
		    			<th>Post Title</th>
		    			<th>Edit</th>
		    			<th>Delete</th>
		    		</tr>
		    	</thead>
		    	<tbody>
		    		 <?php 
	          				$query = 'SELECT * FROM posts';
	          				$result = $con->query($query);
	          				while ($row = $result->fetch_assoc()) {
	          			?>       
				<tr>
                                        <td>
						<?php echo $row['postID'];?>
					</td>
					<td>
						<?php echo $row['postTitle'];?>
					</td>
					<td>
						<form class="form-group" action="editPostData.php" id="myForm" method="POST">
							<input type="hidden" name="postid" value="<?php echo $row['postID']; ?>">
							<input type="submit" name="Edit" class="btn btn-primary" value="Edit">
						</form>
					</td>
					<td>
						<form class="form-group" action="editPostData.php" id="myForm" method="POST">
							<input type="hidden" name="postid" value="<?php echo $row['postID']; ?>">
							<input type="submit" name="Delete" class="btn btn-danger" value="Delete">
						</form>
					</td>
				</tr>
          				
          				<?php } ?>
          			</tbody>
      		</table>
	    </div>

	</div><!-- ./main -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript">
		$(document).ready(function() { 
		    $("body").click(function(event) {
		            // only do this if navigation is visible, otherwise you see jump in navigation while collapse() is called 
		             if ($(".navbar-collapse").is(":visible") && $(".navbar-toggle").is(":visible") ) {
		                $('.navbar-collapse').collapse('toggle');
		            }
		      });
		});
	</script>
	</body>
</html>
<?php } ?>