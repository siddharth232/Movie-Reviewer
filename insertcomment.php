<?php 
  include 'config.php';
  if (isset($_GET['mname'])) {
  	$moviename=$_GET['mname'];
  	//$username='sid';
  	$username=$_SESSION['username'];
  	$comment=$_GET['comment'];
  	$sql="INSERT INTO comments(username,moviename,comments) VALUES('$username','$moviename','$comment')";
  	if ($conn->query($sql)==true) {
  		echo" You Posted comments";

  	}else{
  		echo $conn->error;
  	}
  }
  

  ?>
