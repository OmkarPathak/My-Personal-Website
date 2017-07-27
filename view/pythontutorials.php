<?php
	include('../includes/header.php');
?>
<?php if(!isset($_GET['id'])){
		$query = "SELECT * FROM posts WHERE postID = 1"; 
		$result = $con->query($query);
		$row = $result->fetch_assoc();
		$date = strtotime($row['postDate']);
		$sqldate = date('d/m/Y', $date);
		$row['date'] = $sqldate;

		$query1 = 'SELECT * FROM users WHERE userID = ' . $row['userID']; 
		$result1 = $con->query($query1);
		$row1 = $result1->fetch_assoc();
		$row['postAuthor'] = 'BY: '.$row1['fullName'];
?>
<ul class="breadcrumb">
   <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
   <li class="breadcrumb-item">Tutorials</li>
</ul>
<div id="postMeta" class="text-center">
	<h3 class="text-center" id="postTitle"><?php echo $row['postTitle']; ?></h3>
	<h4 class="text-muted"><p id="postAuthor"  style="text-transform: uppercase;"><?php echo $row['postAuthor']; ?> ON <?php echo $row['date']; ?></p></h4>
	<br>
	<div id="postContent" class="text-justify"><?php echo $row['postContent']; ?></div>
</div>
<?php	
}
?>

<?php 
	if(isset($_GET['id'])){
		$query = 'SELECT * FROM posts WHERE postID = ' . $_GET['id'] ; 
		$result = $con->query($query);
		$row = $result->fetch_assoc();
		$date = strtotime($row['postDate']);
		$sqldate = date('d/m/Y', $date);
		$row['date'] = $sqldate;

		$query1 = 'SELECT * FROM users WHERE userID = ' . $row['userID']; 
		$result1 = $con->query($query1);
		$row1 = $result1->fetch_assoc();
		$row['postAuthor'] = 'BY: '.$row1['fullName'];
?>
<ul class="breadcrumb">
   <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
   <li class="breadcrumb-item">Tutorials</li>
</ul>
<div id="postMeta" class="text-center">
	<h3 class="text-center" id="postTitle"><?php echo $row['postTitle']; ?></h3>
	<h4 class="text-muted"><p id="postAuthor"  style="text-transform: uppercase;"><?php echo $row['postAuthor']; ?> ON <?php echo $row['date']; ?></p></h4>
	<br>
	<div id="postContent" class="text-justify"><?php echo $row['postContent']; ?></div>
</div>
<?php	
}
?>

<div id="postMeta" class="text-center">
	<h3 class="text-center" id="postTitle"></h3>
	<h4 class="text-muted"><p id="postAuthor"  style="text-transform: uppercase;"></p></h4>
	<br>
	<div id="postContent" class="text-justify"></div>
</div>

<?php include('../includes/footer.php');?>