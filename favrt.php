<?php
   include 'config.php';
   if (isset($_GET['id'])&&isset($_GET['name'])) {
   	$id=$_GET['id'];
   	$name=$_GET['name'];
   	$username=$_SESSION['username'];
    //$username='sid';
    $sql="SELECT * FROM favrt WHERE name='$name' AND username='$username'";
    $result=$conn->query($sql);
    if ($result) {
    	if ($result->num_rows>0) {
    		echo "You already Liked this video";
    	}
    	else{
    		  $sql="INSERT INTO favrt(name,videoid,username) VALUES('$name','$id','$username')";
    
    if ($conn->query($sql)==true) {
       	echo "You Liked This video";
       	
     

       }
       else{
       	echo "Some Error:".$conn->error;

       }   
    	}
    }
  
}
?>