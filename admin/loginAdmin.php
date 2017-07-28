<?php
	include('connect.php');
	session_start();

	if(isset($_POST['Login'])){
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		$result = $con->query("SELECT  * FROM users WHERE userName = '$username' AND userPassword='$password'");
		if (mysqli_num_rows($result) != 0) {
			$row = $result->fetch_assoc();
			$_SESSION['fullName'] = $row['fullName'];
			$_SESSION['userID'] = $row['userID'];
			$_SESSION['error'] = '';
			header("Location:index.php");
		}
		else{
			$_SESSION['error'] = 'INCORRECT USERNAME OR PASSWORD';
			header("Location:login.php");
		}
	}
?>