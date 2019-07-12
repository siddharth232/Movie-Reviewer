<?php 
include 'config.php';
if (isset($_GET['name'])) {
  $name=$_GET['name'];
 // $uname=$_SESSION['username'];
 
  $sql="SELECT * FROM accinfo WHERE username='$name'";
  $result=$conn->query($sql);
  if ($result) {
  	$row=$result->fetch_assoc();
  	if ($row['privacy']=='Private') {
  		echo"<p>Your Friend has private account</p>";
  	}else{
       echo "<p>Name:".$name."</p>";
  echo "<p>Favourites:</p>";
  $sql="SELECT * FROM favrt WHERE username='$name'";
  $result=$conn->query($sql);
  echo $conn->error;
  if ($result) {
  	while ($row=$result->fetch_assoc()) {
        echo "<p># ".$row['name']."</p>";
  	}
  }
  echo "<p>Watch Later List:</p>";
  $sql="SELECT * FROM watchlater WHERE username='$name'";

$result=$conn->query($sql);
  if ($result) {
  	while ($row=$result->fetch_assoc()) {
        echo "<p># ".$row['name']."</p>";
  	}
  }
	}
  	}
  }
 

?>