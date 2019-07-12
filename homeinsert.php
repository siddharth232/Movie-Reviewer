<?php 
if (isset($_GET['name'])) {
	$moviename=$_GET['name'];
	 $sql="SELECT * FROM comments WHERE moviename='$moviename'";
     $result=$conn->query($sql);
     if ($result) {
     	while($row=$result->fetch_assoc()){
     		echo "<p style='margin-top:0;color:white;font-size:15px;'>".$row['username'].":".$row['comments']."</p>";
     	}
     }
}

?>