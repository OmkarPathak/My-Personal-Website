<?php
	 include('../includes/connect.php');

	if(isset($_POST['id'])){
                                $query = 'SELECT * FROM posts WHERE postID = ' . $_POST['id'] ; 
                                $result = $con->query($query);
                                $row = $result->fetch_assoc();
                                $uid = $row['userID'];
                                $date = strtotime($row['postDate']);
                                $sqldate = date('d/m/Y', $date);

                                $query1 = 'SELECT * FROM users WHERE userID = ' . $uid; 
                                $result1 = $con->query($query1);
                                $row1 = $result1->fetch_assoc();
                                $row['postAuthor'] = 'BY:  ' . $row1['fullName']  . ' ON ' . $sqldate ;
                                echo json_encode($row);
	}

?>