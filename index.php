<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Movie,Series-Movie Buff</title>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Chakra+Petch&display=swap" rel="stylesheet">
	<meta name="description" descriptions="review,trailers">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
			box-sizing: border-box;
			font-family: 'Chakra Petch', sans-serif;
		}
		#head{
			width: 100%;
			height: 115px;
			background-color:#2f3640;
			color: white;
			font-size: 20.5px;
		}
		#content{
			width: 100%;
			height: 542px;
		    background: linear-gradient(to left, rgba(255,255,255,0) 50%,
              rgba(255,255,255,1)), url(wallpaper.jpg);
		}
		h1{
			margin-left: 70px;
			padding-top:30px; 
		}
		.inputtextfield{
            height: 44px;
            border-radius: 5px 5px 5px 5px;
            border-style: solid;
            border-width: 1px;
            border-color: black;
            overflow: hidden;
            font-size: 18px;
            padding: 10px;
            
	    }
        #privacy{
            margin-left: 110px;
            margin-top: 10px;
            width: 200px;
        }
	    #umail{
	    	position: absolute; 
	    	width: 275px;
	    	right: 380px;
	    	top: 39px;
	    }
	    #upass{
	    	position: absolute; 
	    	width: 275px;
	    	top: 39px;
	    	right: 100px;
	    }
	    #butt{
            width:70px;
            background-color: black;
            font-family: arial;
            color: white;
            height: 40px;
            position:absolute;
            font-size:15px;
            border-color: #29487D;
            border-width:1px;
            top:41.5px;
            right:20px;
            font-weight:bold;
            letter-spacing: -1px;
            cursor: pointer;
           }  
            #content input{
           	margin-left: 110px;
           	margin-top:20px;
           	width: 475px;
           }
           #button{
           	  border-radius: 5px 5px 5px 5px;
            color:white;
            background-color: black;
            font-weight: bold;
            width:100px;
            height:40px;
            top:500px;
            position: absolute;
            border-color: #3B6E22;
            border-width: 1px;
            box-sizing: border-box;
            font-size: 20px;
            font-family: Helvetica;
            cursor: pointer;
           }
           p{
           	text-decoration: underline;
           	cursor: pointer;
           	font-size: 30px;
           	margin-top: 190px;
           	margin-left: 140px;
           }
	</style>
</head>
<body>
<div id="head">
	<h1>Movie Buff-Movies,Series</h1>
	<form action="index.php" method="post">
     <input type="text" name="umail" class="inputtextfield" placeholder="Enter Username..." id="umail">
     <input type="password" name="upass" class="inputtextfield" placeholder="Enter Password..." id="upass">
     <input type="submit" name="login" value="LogIn" id="butt">
    </form>
</div>
<div id="content">
	<h1>Sign Up & Stream Your Favourite!!</h1>
	  <form action="index.php" method="post">
	 <input type="text" name="uname" placeholder="UserName" class="inputtextfield" id='name' required><br>
	 <input type="text" name="Email" placeholder="Email" class="inputtextfield" id='email' required><br>
     <select name="privacy" class="inputtextfield" id="privacy">
         <option value="Public">Public</option>
         <option value="Private">Private</option>
     </select><br>
	 <input type="password" name="pass" placeholder="Password" class="inputtextfield" id="password" required><br>
	 <input type="password" name="cpass" placeholder="Confirm Password" class="inputtextfield" id="cpassword" required><br>
	 <input type="submit" name="signup" value="SignUp" id="button">
	</form>
	 <?php 
         if (isset($_POST['signup'])) {
         	$name=$_POST['uname'];
         	$email=$_POST['Email'];
         	$pass=$_POST['pass'];
         	$cpass=$_POST['cpass'];
            $privacy=$_POST['privacy'];
         	if ($pass==$cpass) {
         		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
         		$sql="SELECT * FROM accinfo WHERE username='$name'";
         		$result=$conn->query($sql);
         	//	echo "<script>alert('".$conn->error."');</script>";
         		if ($result) {
         			if ($result->num_rows>0) {
         			echo "<script>alert('Username Already Exist !!');</script>";
         		}else{
         			$sql="INSERT INTO accinfo(username,email,password,privacy) 	VALUES('$name','$email','$pass','$privacy')";
         			if ($conn->query($sql)==true) {
         				echo "<script>alert('You successfully Signed Up .Login in to continue');</script>";
         			}
         		}
         		}
         		
         		}else{
         			echo "<script>alert('Invalid Email Format');</script>";
         		}
         	}
         	else{
         		echo "<script>alert('Passwords are not matching');</script>";
         	}
         }
    ?>
   <?php 
    if (isset($_POST['login'])) {
    	$email=$_POST['umail'];
    	$pass=$_POST['upass'];
    	$sql="SELECT * FROM accinfo WHERE name='$email' AND password='$pass'";
    	$result=$conn->query($sql);
    //	echo "<script>alert('".$conn->error."')</script>";
    	if ($result->num_rows>0) {
    		$_SESSION['username']=$email;
    	//	echo "<script>window.open('home.php','_self');</script>";
    	}else{
    		echo "<script>alert('Invalid User');</script>";
    	}
    }
   ?> 
</div>
</body>
</html>