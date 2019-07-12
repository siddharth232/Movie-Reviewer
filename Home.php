<?php include 'config.php';
   if (!isset($_SESSION['username'])) {
   	    echo "<script>alert('Access Denied');window.open('index.php','_self');</script>";
   }
 ?>
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
			margin-left: 40px;
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
			   	right: 500px;
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
                 font-size: 25px;
                 text-decoration: none;
                 border-left-style: solid;
                 border-color: white;
                 border-width: 2px;
			   }
			   .options li a {
			   	text-decoration: none;
			   	color: white;
			   }
			    #postbutt{
			   	border-radius: 5px 5px 5px 5px;
			   	background-color: black;
			   	color: white;
			   	border-color: black;
			   }
			   textarea{
			   	border-radius: 5px 5px 5px 5px;
			   }

	</style>

</head>
<body>
 <div id="head">
 	<h1>Movie Buff-Movies,Series</h1>
 	<ul class="options"><li id="first"><a href="Home.php">Home</a></li><li><a href="WatchLaterlist.php">WatchLater</a></li><li><a href="favourite.php">Favourite</a></li><li><a href="friends.php">Friends</a></li></ul>
 	<input type="text" name="search" placeholder="Search By ImdbId or Movie Title" class="inputtextfield" id="search" required >
 	<input type="submit" name="search" placeholder="search" value="Search" class="butt" id="searche" onclick="search()">
 	<input type="submit" name="logout" placeholder="search" value="LogOut" class="butt" id="logout">
 </div>
 <div id="info"></div>
 <div id="content">
 	
<div id="title"></div>
<div id='movielist'></div>
 </div>
	<script type="text/javascript">
		var detailobj;
		var Trailerdetails;
		var value;
		var trailertitle;
		function search(){
             value=document.getElementById('search').value;
             console.log(value);
             var http=new XMLHttpRequest();
             
             http.onreadystatechange=function(){if(this.readyState== 4&this.status==200){
			 detailobj=JSON.parse(this.responseText);
			console.log(detailobj);
			console.log(url);
			if (detailobj.Response=='False') {
			    alternate(value);
			//	console.log(detailobj.Response);
            //    console.log('no');
			}
			else{
		    var regex="/"+detailobj.Title+"/";
			var search=detailobj.Title+"The Official Trailer";
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if (this.readyState==4&&this.status==200) {
					Trailerdetails=JSON.parse(this.responseText);
					console.log(Trailerdetails);
					for(var i=0;i<Trailerdetails.items;i++){
						var ttitle=Trailerdetails.items[i].snippet.title;
                       if(regex.test(ttitle)){
                       	trailertitle=Trailerdetails.items[i].id.videoId;
                       	break;
                       }
					}
					document.getElementById('content').innerHTML='<iframe width="420" height="315"src="https://www.youtube.com/embed/'+trailertitle+'"></iframe>';
					for(x in detailobj){
						if (x!='Poster'&&x!='Ratings'&&x!='Response') {
						document.getElementById('content').innerHTML+='<p>'+x+":"+detailobj[x]+"</p><br>";}
					}
				}
			}
            var trailerurl='https://www.googleapis.com/youtube/v3/search?key=AIzaSyDW-ybe16FSLpplo9bJEXrhBkObE0GgfOE&part=snippet&field=items&q='+search;
            xhttp.open("GET",trailerurl,true);
            xhttp.send();
			}
	 	} } 
      var url='http://www.omdbapi.com/?apikey=870d13d2&i='+value;
	http.open("GET",url,true);
	http.send();
	
	}
	function alternate(obj){
       var regex="/"+detailobj.Title+"/";
     var req=new XMLHttpRequest();
     req.onreadystatechange=function(){
     	if (this.readyState==4&&this.status==200) {
     		titleobject=JSON.parse(this.responseText);
     		console.log(titleobject);
     		if (titleobject.Response=="False") {
     			alert('No Movie Found!!.');
     		}else{
     			//document.getElementById('content').style.backgroundcolor=black;
              var search=titleobject.Title+"The Official Trailer";
			var xhttp=new XMLHttpRequest();
			xhttp.onreadystatechange=function(){
				if (this.readyState==4&&this.status==200) {
					Trailerdetails=JSON.parse(this.responseText);
					console.log(Trailerdetails);
				//	console.log(Trailerdetails.items)
						for(var i=0;i<Trailerdetails.items.length;i++){
						var ttitle=Trailerdetails.items[i].snippet.title;
						var reg="/"+titleobject.Title+"/i";
						var tt=new RegExp(reg);
						console.log('as');
                       if(ttitle.search(tt)){
                       	trailertitle=Trailerdetails.items[i].id.videoId;
                       	console.log(trailertitle+"Df");
                       	break;
                       }
					}
					document.getElementById('content').innerHTML='<iframe width="420" height="315"src="https://www.youtube.com/embed/'+trailertitle+'"></iframe><button onclick="watchlater(\''+titleobject.Title+'\',\''+trailertitle+'\')" class="button" id="wl">WatchLater</button><br><button onclick="favrt(\''+titleobject.Title+'\',\''+trailertitle+'\')" class="button" id="favrt">like</button><div style="position:fixed;bottom:0;right:0;overflow-y:auto;font-size:10px;background-color:#95afc0;color:black;height:20%;width:35%;border-radius:5px 5px 5px 5px;" onload="homeinsert()" id="comment"><textarea id="comment" placeholder="Comment Here"></textarea><input type="submit" value="post" onclick="insertcomment()" id="postbutt"><br></div>';
					for(x in titleobject){
						if (x!='Poster'&&x!='Ratings'&&x!='Response') {
						document.getElementById('content').innerHTML+='<p>'+x+":"+titleobject[x]+"</p><br>";}
					}
					document.getElementById('content').style.backgroundColor="black";
				}
			} 
            var trailerurl='https://www.googleapis.com/youtube/v3/search?key=AIzaSyDW-ybe16FSLpplo9bJEXrhBkObE0GgfOE&part=snippet&field=items&q='+search;
            xhttp.open("GET",trailerurl,true);
            xhttp.send();
			}
     		} 
     	}
     
     var url='http://www.omdbapi.com/?apikey=870d13d2&t='+obj;
     req.open("GET",url,true);
     req.send();
	}
	function homeinsert(){
		var http=new XMLHttpRequest();
		http.onreadystatechange=function(){
			if(this.readyState==4&&this.status==200){
				document.getElementById('comment').innerHTML+=this.responseText;
			}
		}
		http.open("GET","homeinsert.php?name="+titleobject.Title,true);
		http.send();
	}
  function insertcomment(){
          var value=document.getElementById('comment').value;
          var http=new XMLHttpRequest();
          http.onreadystatechange=function(){
          	if(this.readyState==4&&this.status==200){
          		document.getElementById('info').innerHTML=this.responseText;
          	}
          }
          http.open('GET','insertcomment.php?mname='+titleobject.Title+'&comment='+value,true);
          http.send(); 
          setTimeout(dis,5000);
          function dis(){
			document.getElementById('info').innerHTML='';
			document.location.reload();
		} }

 		var backgrd=[
{"name":"Black Panther",
 			    "src":"blackpanther.jpg",
 			    "id":"xjDjIWPwcPU",},
{"name":"X-men Dark Pheonix",
 			    "src":"xmen.jpg",
 			    "id":"1-q8C_c-nlM",},
{"name":"Jurrasic World",
 			    "src":"jw.jpg",
 			    "id":"RFinNxS5KN4",},
{  "name":"Inception",
 			    "src":"inception.jpg",
 			    "id":"YoHD9XEInc0",},
{ "name":"Iron man-3",
 			    "src":"ironman.jpg",
 			    "id":"Ke1Y3P9D0Bc",},
{"name":"The Lion King",
 			    "src":"thelionking.jpg",
 			    "id":"7TavVZMewpY",},
{  "name":"Man of steel",
 			    "src":"superman.jpg",
 			    "id":"T6DJcgm3wNY",}

 		]
 		function homewatch(x){
 			window.location.assign('Play.php?id='+x);
 		}
 		  function change(x){
     document.getElementById('content').style.backgroundImage='url('+backgrd[x].src+')';
 	
 		document.getElementById('title').innerHTML='<h class="title">'+backgrd[x].name+'</h><ul class="option" ><li value='+backgrd[x].id+' onclick="homewatch(\''+backgrd[x].name+'\',\''+backgrd[x].id+'\')">Watch</li><li name='+backgrd[x].id+' onclick="watchlater(\''+backgrd[x].name+'\',\''+backgrd[x].id+'\')">Watch Later</li><li id="last" name='+backgrd[x].id+' onclick="favrt(\''+backgrd[x].name+'\',\''+backgrd[x].id+'\')">Like</li></ul>';
 		document.getElementById('movielist').innerHTML="";
 		 for(var i=0;i<backgrd.length;i++){
 	  	if (i!=x) {
 	  		document.getElementById('movielist').innerHTML+='<img src="'+backgrd[i].src+'" width="32%" height="200" onclick="change('+i+')">';
 	  	}
 	  } 
 	  }
var x=Math.floor(Math.random()*7);

 	console.log(x);
 	window.onload=function(){
 		     console.log(x);
 			
 			if(x=1){x=x-1;}
 		document.getElementById('content').style.backgroundImage='url('+backgrd[x].src+')';
 	
 		document.getElementById('title').innerHTML+='<h class="title">'+backgrd[x].name+'</h><ul class="option" ><li value='+backgrd[x].id+' onclick="homewatch(\''+backgrd[x].id+'\')">Watch</li><li name='+backgrd[x].id+' onclick="watchlater(\''+backgrd[x].name+'\',\''+backgrd[x].id+'\')">Watch Later</li><li id="last" name='+backgrd[x].id+' onclick="favrt(\''+backgrd[x].name+'\',\''+backgrd[x].id+'\')">Like</li></ul>';
 	  for(var i=0;i<backgrd.length;i++){
 	  	if (i!=x) {
 	  		document.getElementById('movielist').innerHTML+='<img src="'+backgrd[i].src+'" width="32%" height="200" onclick="change('+i+')">';
 	  	}
 	  } 
 	
 	}
 	function watchlater(x,y){
 	//	console.log('itsinside');
        var http=new XMLHttpRequest();
        http.onreadystatechange=function(){
        	if (this.readyState==4&&this.status==200) {
        		console.log('its deep inside');
        		document.getElementById('info').innerHTML=this.responseText;
        		console.log(this.responseText);
        		setTimeout(info,3000);
        	}
        }
        http.open("GET",'watchlater.php?name='+x+'&id='+y,true);
        http.send();
 	}
 	function favrt(x,y){
       var http=new XMLHttpRequest();
        http.onreadystatechange=function(){
        	if (this.readyState==4&&this.status==200) {
        		console.log('its deep inside');
        		document.getElementById('info').innerHTML=this.responseText;
        		console.log(this.responseText);
        		setTimeout(info,3000);
        	}
        }
        http.open("GET",'favrt.php?name='+x+'&id='+y,true);
        http.send();
 	}
 	function info(){
 		document.getElementById('info').innerHTML="";
 	}
 	</script>
</body>
</html>