<html>
<head>
<?php
require 'config1.php';
session_start();
?>
<style>
	body{
		
margin-top:0px;	
margin-left:20%;
	}
	#page{
		width :80%;
		
	}
	
	

	li{
	float : left;
	
	}
	
	#navmenu{
                    text-decoration:none;	
	display:block;
	color:white;

     font-family:Calibri,Gothic,Comic Sans;             
	}
    
#navmenu:hover{
background-color:#111;
color:blue;
font-family:Calibri,Comic Sans,Arial Black;
 font-size:20px;
}

}
	
	label{
	color:black;
	font-family:Verenda,Tahoma,Arial;
	font-size:12px;
	}
	
#PageTop{
	height:90px;
	width:100%;
	
	}
	

	 p{
	font-size:15px;
	font-family:Verenda,Tahoma,Calibri;
	text-decoration: none;
	}
	
	 #PageRest{
     float :right ;
	width:100%;
	height:100%;
	}
	
	 #Form_side{

	}
	
	footer {
	left : 0px;
	bottom : 0px;
	height:10%;
	width : 100% ;
		background : #207cca;
	text-align : center ;
	color : white ;
    
	}
	
	
	#navmenu.active{
	background-color:#207cca;
	
	}
	.style1 {
	font-family: Andalus, AngsanaUPC, "Arabic Typesetting";
	color: #207cca;
}
.style7 {font-family: Georgia, "Times New Roman", Times, serif}
.style8 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #000000;
}
.style9 {font-family: Geneva, Arial, Helvetica, sans-serif}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
	background-color : #207cca;
}
a:active {
	text-decoration: none;
}

.logout{
	margin-right:100px;
	float:right;
	font-size:16px;
	color:white;
	font-family:Calibri,Geneva,Tahoma;
	}
	.logout1{
		background-color:#207cca;
		display:absolute;
	}
#Main_wrapper{
background : #ffffff;
margin : 1px auto;
width : 80%;
border-radius : 0px;
height:290px;
padding : 10px 20px;
line-height : 50x;
}
ul{
	list-style-type : none;
	overflow : hidden;
	margin : 0px auto;
	padding : 0px;
background : rgb(13,182,238);
    display:block;
    
    margin-top : 0px ;


	}


 li{
float : left;

 
 }
 
 .active,.set_buton,.set_button, .rtab {
display : block;
	color : white;
    font-size : 18px;
    font-family : Tahoma,geneva,elephant;
	text-decoration : none;
	
   }
   
    .active {
	   background : #207cca;
	   padding:10px 16px;
	   
	   
   }
  
   
    
a:hover{
background : #207cca;
color:white;
text-decoration : none;

 
}

  .tab{
float : left ;
	  
	  
  } 
   
  .rtab{
padding:10px 16px;

	  
	  
  } 
  label {
line-height: 25px;
	  
	  
  }
  .set_button:hover {
	  background : #333;
  }
  
	 .set_button{
padding:10px 16px;	 
font-size : 25.5px;
margin-bottom : 10px;
   color:white;
     background : #207cca;
   }
   

  
.set_button{
padding:10px 16px;	 

   color:white;
     background : #207cca;
   }
.text_box{
width : 400px;
	border : 1px solid #207cca;
	margin-top : 4px;
	padding : 8px 0px;
	 background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 35px;
  line-height: 30px;
	
}
   .header{
	   font-size:20px;
	   font-family:Tahoma,geneva,elephant;
   }

   .tmark{
			 font-size:50px;
			    font-family :   Andalus, AngsanaUPC, "Arabic Typesetting";  
		 }
		 
		 			 
			 .dropdown .dropbtn{
				 font-size:16px;
				 border:none;
				 outline:none;
				 color:white;
				 padding:10px 16px;
				 background-color:inherit;
				 font-family:Tahoma,geneva,elephant;
				 margin:0;
			 }
			 .content{
				 display:none;
				 position:absolute;
				 background-color:#207cca;
                  min-width:160px;
				  box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
				  z-index:1;
				 
				 }
				 .content a{
				font-size:14px;
				float:none;
					 color:black;
					 padding :10px 14px;
					 text-decoration:none;
					 display:block;
					 text-align:left;
				background-color:#ffffff;
				}
				.content a:hover{
					 
				background-color:#207cca;
				}
				
			 .dropdown:hover .content{
				 display:block;
background-color:#333;				 
			 }
			 .dropbtn:hover{
			 background-color:#333;	
			 }			 
			 .dropbtn{					 

  
			 }
			 
				.set{
				bottom : 5px;
				margin-left : 8px;
				margin-top : 10px;
				font-size : 25px;
			
			 }
			
			 
			 .drops{
				 margin: 10px;
				 font-size : 18px;
				 font-family :   Andalus, AngsanaUPC, "Arabic Typesetting";  
			 }
			 .form_area{
				 float:left;
				 
			 }
			 .pic_area{
				 
				 
			 }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<title><?php echo $_SESSION['username'].' Page ';?></title>
	<body>
	<div id="page">
	<ul>
<span class="tmark"><img src="tmark.png" width="300" height="90"></span>
	 

</br>
<li><a href="masters_page.php" class="set_button">Exeat Log</a><li>
<li>

<div class="dropdown"><button class="dropbtn"><img src="settings.png" width="25" height="25"><span class='set'>Settings</span>
<i class= "fa fa-caret-down"></i>
</button>
<div class="content">
<a href="house_mem.php"><img src="mem.png" width="20" height="20"><label class='drops'>House Details</label></a>
<a href= "acc_set.php"><img src="master_pic.png" width="20" height="20"><label class='drops'>My Account</label></a>
</div>
</div>
</li>
</br>
</br>
</br>
</br>
	<div id="Main_wrapper">
<div class="form_area">
<form action="acc_set.php" method="post" >
<center><p class="header">Change Current Password</p></center>
</br>
<input type="password" name="password" placeholder="Old password" class="text_box" required/>

</br></br>
<input type="password" name="new_password"class="text_box" placeholder="Type in the new password" required/>
</br></br>
<input type="password" name="cpassword" class="text_box" placeholder="Confirm new password" required/>
</br></br>
<input type="submit" name="submit" value="Change">
</div>
<div class="pic_area"></br></br><center><img src="profile.png" width="200" height="200"/></center></div>
<?php
if(isset($_POST['submit'])){
$cpassword=$_POST['cpassword'];	
$password =$_POST['password'];
$new_password = $_POST['new_password'];
$username=$_SESSION['username'];

if($new_password==$cpassword){
$query="SELECT *FROM housemasters where password='$password' AND username='$username'";
$query_run =mysqli_query($conn,$query);

if(mysqli_num_rows($query_run)>0){
$query="UPDATE housemasters SET password='$new_password' WHERE username='$username'";
$query_run=mysqli_query($conn,$query);
}
else{
	
	echo '<script type="text/javascript"> alert("The old password entered is incorrect ...")</script>';
}
if($query_run){
	
	echo '<script type="text/javascript"> alert("Changes Saved...")</script>';
	
}

else{
	echo '<script type="text/javascript"> alert("Error...")</script>';
	
	
}

	
	

	
	
}

else{
echo '<script type="text/javascript"> alert("New Password and Confirm Password do not match")</script>';
	
	
}

}


?>
</div>
<footer>
<p>Copyright©2018 ExeatLog 1.0 All Rights Reserved</p>
	<p id="credit">Powered by JabenSoft®</p>
	</footer>
   
 
</ul>    

	
</body>
</html>