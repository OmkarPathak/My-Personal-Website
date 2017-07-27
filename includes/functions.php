<?php
	function getCount(){
		include('connect.php');
		$query = 'SELECT * FROM count';
		$result = $con->query($query);
		$row = $result->fetch_assoc();
		$row['pageviews'] = $row['pageviews'] + 1;
		$query2 = 'UPDATE count SET pageviews = '.$row['pageviews'].' WHERE countID = 1';
		$result = $con->query($query2);
		$con->close();
		return $row['pageviews'];
	}

	function getNavBrand($tablename){
		include('connect.php');
		$query = 'SELECT * FROM '. $tablename .' WHERE '. $tablename .'ID = 1';
		$result = $con->query($query);
		$row = $result->fetch_assoc();
		echo $row['navbarBrand'];

		$con->close();
	}

	function getMenu($tablename){
		include('connect.php');
		$query = 'SELECT * FROM ' . $tablename;
		$result = $con->query($query);
		while($row = $result->fetch_assoc()){
			echo '<li><a href="'.$row["navbarHrefLink"].'">'.$row["navbarLinkName"].'</a></li>';
	 	}//while

	 	$con->close();
	}

	function getPosts($tablename){
		include('connect.php');
		$query1 = 'SELECT * FROM ' . $tablename . ' ORDER BY postID ASC';
		$result1 = $con->query($query1);
		if (!$result1){
			echo 'Error';
		}
		while ($row1 = $result1->fetch_assoc()) 
		{
	?>
		<div class="panel panel-default">
			<div  class="panel-heading">
				<h4>
					<a href="#<?php echo $row1['postID'];?>" data-toggle="collapse" data-parent="#posts"><?php echo $row1['postTitle'];?></a>
				</h4>
			</div><!-- ./panel-heading -->
			<div class="panel-collapse collapse" id="<?php echo $row1['postID'];?>"  style="border: 1px solid #FF7F50;"> 
				<div class="panel-body">
					<p><?php echo $row1['postDesc'];?></p>
				</div>
			</div><!-- ./panel-body -->
		</div><!-- ./panel-default -->
<?php 
		}//while

		$con->close();
	}//function posts


	function getPostsSidebar($tablename){
		include('connect.php');
		$query1 = 'SELECT * FROM ' . $tablename . ' ORDER BY postID ASC';
		$result1 = $con->query($query1);
		if (!$result1){
			echo 'Error';
		}
		while ($row1 = $result1->fetch_assoc()) 
		{
	?>
	<div  class="panel-heading">
		<h4>
			<a href="#<?php echo $row1['postID'];?>" data-toggle="collapse" data-parent="#posts"  onclick="Javascript: link(<?php echo $row1['postID'];?>)"><?php echo $row1['postTitle'];?></a>
		</h4>
	</div><!-- ./panel-heading -->
<?php 
		}//while

		$con->close();
	}//function posts
?>