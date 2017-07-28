<?php

	include('connect.php');

	if (isset($_POST['Submit'])) {
		$name = mysqli_real_escape_string($con, $_POST['name']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$comment = mysqli_real_escape_string($con, $_POST['comments']);

		mail("omkarpathak.comp@mmcoe.edu.in","New Message from: " . $name . "(". $email ." )" ,$comment);

		echo 'Thank You for contacting me! I\'ll be reaching to you shortly.';
	}
?>