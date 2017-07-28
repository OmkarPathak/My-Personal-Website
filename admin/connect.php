<?php
	//These are the constants used over the entire website
	/*$DATABASE_HOST = 'localhost';
	$DATABASE_USER = 'root';
	$DATABASE_PASSWORD = '8149omkar';
	$DATABASE_NAME = 'myblog';/*/

	$DATABASE_HOST = 'mysql.hostinger.in';
	$DATABASE_USER = 'u837360009_omkar';
	$DATABASE_PASSWORD = '8149omkar';
	$DATABASE_NAME = 'u837360009_py';

	$PROJECT_TITLE = 'OMKAR PATHAK';

	$SECTION_ONE = 'ABOUT ME';
	$SECTION_ONE_ID = 'about';

	$SECTION_TWO = 'PORTFOLIO';
	$SECTION_TWO_ID = 'portfolio';

	$SECTION_THREE = 'PYTHON TUTORIALS';
	$SECTION_THREE_ID = 'python';

	$PHOTOGRAPGY_IMAGE = 'allopathy.jpg';
	$SKETCHING_IMAGE = 'allopathy.jpg';
	$WORKSHOP_IMAGE = 'allopathy.jpg';

	$JUMBOTRON_DESC = 'These Python tutorials would guide you through the entire Python programming language. The best thing about these tutorials is that you would also get an in-depth knowledge about how the Python internally works rather than just the syntax. Let\'s get started!';

	$JUMBOTRON_SUBHEADING = 'My Blog for Python Tutorials!';

	$PYTHON_DESC = 'Being a Python developer, Python is my favorite language because of its simplicity and robust nature!';

	$PHP_DESC = 'Due to the love for web development it\'s being a great adventure learning PHP.';

	$LINUX_DESC = 'As a die-hard opensource fan, I\'m hugely motivated towards Linux. Kali linux being my favorite distro amongst the linux world.';



	$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASSWORD, $DATABASE_NAME);
	if(!$con){
		echo "Error Connecting to database";
	}
?>