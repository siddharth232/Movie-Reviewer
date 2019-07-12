<?php include 'config.php';
if (!isset($_SESSION['username'])) {
   	    echo "<script>alert('Access Denied');window.open('index.php','_self');</script>";
   } ?>
<!DOCTYPE html>
<html>
<head>
	<title>Watch favourite movies,series</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Chakra+Petch&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		}
		#content{
			width: 100%;
			height: 542px;
			background-repeat: no-repeat;
			background-size: cover;
			overflow-y: auto;
			background-color: black;
		}
		.title{
			position: absolute;
			color: white;
			font-weight: bold;
			font-size: 50px;
			top: 260px;
			left: 15%;}
			.option{
				position: absolute;
			    top: 320px;
			    left: 14%;

			}
			.option li {
				 color: #2c3e50;
				display: inline-block;
				float: left;
				padding-left:5px;
				padding-right: 5px;
				
			    font-size: 30px;
			    border-right:solid;
			    border-width: 2px;
			    }
			 .option li:hover {
			 	background-color: #2980b9;
			 	border-radius: 5px 5px 5px 5px;
			 	color: white;
			 	cursor: pointer;
			 	border-style: none;
			 }
			    #last{
			    	border-right-style: none;
			    	border-width: 0px;
			    }
			    #movielist{
			    	padding: 0px;
			    	float: right;
			    	width: 50%;
			    	height: 100%;
			    }
			    #title{
			    	float: left;
			    	width: 45%;
			    	height: 100%;
			    }
			    h1{
			margin-left: 70px;
			padding-top:30px; 
			color: white;
		}
			    img{
			    	margin-right: 3px;
			    	margin-top: 3px;
			    	opacity: 0.75;
			    }
			    img:hover{
			    	cursor: pointer;
			    	opacity: 1;
			    	border-style: black;
			    	border-width: 1px;
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
	     #search{
	    	position: absolute; 
	    	width: 285px;
	    	right: 200px;
	    	top: 35px;
	    }
	    #searche{
	    	 position:absolute;
	    	   top:38px;
            right:120px; }
            #logout{
            	 position:absolute;
	    	   top:38px;
            right:15px;
            }
            .button{
            	border-color: black;
            width:72px;
            background-color: black;
            font-family: arial;
            color: white;
            height: 40px;
            position:relative;
            font-size:15px;
            border-radius: 3px 3px 3px 3px;
            border-width:1px;
            font-weight:bold;
            letter-spacing: -1px;
            cursor: pointer;
            }
            #wl{
            	top:-75px;
            	right: -13.5px;

            }
            #favrt{
            	margin-top: 5px;
            	letter-spacing: 0px;
            	top:-75px;
            	right:-908px;
            }
	     .butt{
	     	border-color: black;
            width:70px;
            background-color: black;
            font-family: arial;
            color: white;
            height: 40px;
            position:absolute;
            font-size:15px;
            border-radius: 3px 3px 3px 3px;
            border-width:1px;
            top:41.5px;
            right:20px;
            font-weight:bold;
            letter-spacing: -1px;
            cursor: pointer;
           }  
           iframe{
			    	margin-left: 35%;
			    	margin-top: 40px;
			    }
			   p{
			   	color: white;
			   	margin-top: 2px;
			   	margin-left: 5px;
			   	font-size: 30px;
			   	font-style: italic;
			   }
			   #info{
		 	width:100%;
			   	border-color: green;
			   	border-width: 2px;
			   	background-color: #6ab04c;
			   	border-radius: 5px 5px 5px 5px;
			   	margin: 0 auto;
			   	color: white;
			   }
			   #first{
			   	border-left-style: none;
			   	border-left-width: 0px;
			   	
			   }
			   .options{
			   	position: absolute;
			   	right: 300px;
			   	top:35px;
			   }
              .options li:hover{
              	background-color: #2980b9;
              	cursor: pointer;
              	border-left-style: none;
              	border-radius: 5px 5px 5px 5px;
              }
			   .options li{
			   	 margin-left: 5px;
                 display: inline-block;
                 float: left;
                 color: white;
                 padding-left: 7px;
                 font-size:30px;
                 text-decoration: none;
                 border-left-style: solid;
                 border-color: white;
                 border-width: 2px;
			   }
			   .options li a {
			   	text-decoration: none;
			   	color: white;
			   }
			   a{
			   	text-decoration: none;
			   	color: white;
			   }
			   tr td{
			   	width: 100%;
			   	border-bottom-color:white;
			   	border-bottom-style: solid;
			   	padding: 0px;
			   	border-radius: 5px 5px 5px 5px;
                border-width: 2px;
			   	font-size: 20px;
			   	margin: 10 auto;
			   }
			   tr{
			   	cursor: pointer;
			   	padding-bottom: 15px;
			   	margin: 5px;
			   }
			   table{
			   	width: 80%;
			   	
			   	border-radius: 5px 5px 5px 5px;
			   	overflow-y:auto; 
                margin: 0 auto;
                padding: 0px;
			   }
			   table tr td a{
			   	margin-bottom: 10px;
			   	padding: 0px;
			   	font-size: 30px;
			   }
			   tr :hover{
			   	background-color: #2980b9;
			   }
			   #content div{
                  width: 100%;
                  overflow-y: auto;
			   }
			   #friendsusername{
			   	position: absolute;
			   	padding: 10px;
			   	width: 300px;
			   	height: 30px;
			   	top: 140px;
			   	left: 400px;
			   	font-size: 20px;
			   	border-radius: 5px 5px 5px 5px;
			   }
			   #searchbutt{
			   	cursor: pointer;
			   	height: 30px;
			   	position: absolute;
			   	top: 140px;
			   	width: 50px;
			   	left: 720px;
			   	border-radius: 5px 5px 5px 5px;
			   	color: black;
			   	background-color: white;
			   }
           #result{
           	margin-top: 80px;
           	padding: 30px;
           }
           p{
           	margin-top: 20px;
           }

	</style>

</head>
<body>
 <div id="head">
 	<h1>Movie Buff-Movies,Series</h1>
 	<ul class="options"><li id="first"><a href="Home.php">Home</a></li><li><a href="WatchLaterlist.php">WatchLater</a></li><li><a href="favourite.php">Favourite</a></li><li><a href="friends.php">Friends</a></li></ul>
 	
 	
 	<input type="submit" name="logout" placeholder="search" value="LogOut" class="butt" id="logout">
 </div>
 <div id="content">
 	<div id='friendssearch'>
 		<input type="text" name="friends" placeholder="Friend's Username" id="friendsusername">
 		<input type="submit" value="Search" id="searchbutt" onclick="result()">
 	</div>
 	<div id='result'></div>
 </div>
 <script type="text/javascript">
 	function result(){
 		var value=document.getElementById('friendsusername').value;
 		var http=new XMLHttpRequest();
 		http.onreadystatechange=function(){
 			if (this.readyState==4&&this.status==200) {
 				document.getElementById('result').innerHTML=this.response;
 			}
 		}
        http.open("GET","friendsdetails.php?name="+value,true);
        http.send();
 	}
 </script>
</body>
</html>
