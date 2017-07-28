<?php
	include('connect.php');
	session_start();
	if (!isset($_SESSION['userID'])) {
		header("Location:login.php");
	}
	if (isset($_POST['Submit'])) {
		$postTitle =  mysqli_real_escape_string($con, $_POST['postTitle']);
		$postid =  mysqli_real_escape_string($con, $_POST['postID']);
		$postDesc = mysqli_real_escape_string($con, $_POST['postDesc']);
		$postContent = mysqli_real_escape_string($con, $_POST['postContent']);
		//echo json_encode($post);

		$query = 'SELECT * FROM posts WHERE postID = "' . $_POST['postID'] . '"';
		$result = $con->query($query);
		if(mysqli_num_rows($result) == 0){
			$query1 = 'INSERT INTO posts(postTitle, postDesc, postContent) VALUES ("'.$postTitle.'","'.$postDesc.'","'.$postContent.'")';
			$result1 = $con->query($query1);
			echo "Successful!";
		}
		else{
			$query2 = "UPDATE posts SET postContent='" . $postContent . "' WHERE postID = '" . $postid . "'";
			$query3 = "UPDATE posts SET postTitle='" . $postTitle . "' WHERE postID = '" . $postid . "'";
			$query4 = "UPDATE posts SET postDesc='" . $postDesc . "' WHERE postID = '" . $postid . "'";
			$result2 = $con->query($query2);

			$result3 = $con->query($query3);

			$result4 = $con->query($query4);
			echo "Updated Successfully!!";
		}


	}
?>