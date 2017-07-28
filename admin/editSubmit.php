<?php
	include('connect.php');
	session_start();
	if (!isset($_SESSION['userID'])) {
		header("Location:login.php");
	}
	if (isset($_POST['Submit'])) {
		$postTitle =  $_POST['postTitle'];
		$postid =  $_POST['postID'];
		$postDesc = $_POST['postDesc'];
		$postContent = $_POST['postContent'];
		//echo json_encode($post);

		$query = 'SELECT * FROM posts WHERE postID = "' . $_POST['postID'] . '"';
		$result = $con->query($query);
		if(mysqli_num_rows($result) != 0){
			$query2 = "UPDATE posts SET postContent='" . $postContent . "' WHERE postID = '" . $postid . "'";
			$query3 = "UPDATE posts SET postTitle='" . $postTitle . "' WHERE postID = '" . $postid . "'";
			$query4 = "UPDATE posts SET postDesc='" . $postDesc . "' WHERE postID = '" . $postid . "'";
			$result2 = $con->query($query2);

			$result3 = $con->query($query3);

			$result4 = $con->query($query4);
			echo "Updated Successfuly!!";
		}


	}
?>