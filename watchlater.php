<?php
   include 'config.php';
   if (isset($_GET['id'])&&isset($_GET['name'])) {
   	$id=$_GET['id'];
   	$name=$_GET['name'];
   	$username=$_SESSION['username'];
    //$username='sid';
    $sql="SELECT * FROM watchlater WHERE name='$name' AND username='$username'";
    $result=$conn->query($sql);
    if ($result) {
    	if ($result->num_rows>0) {
    		echo "You already added this video";
    	}
    	else{
    		  $sql="INSERT INTO watchlater(name,video_id,username) VALUES('$name','$id','$username')";
    
    if ($conn->query($sql)==true) {
       	echo "You Added This video To watch later";
       	
     

       }
       else{
       	echo "Some Error:".$conn->error;

       }   
    	}
    }
  
}
?>