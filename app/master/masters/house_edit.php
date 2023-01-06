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
	background-color:#111;
	text-align : center ;
	color : white ;
	 	background : #207cca;

    
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
	text-decoration: underline;
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
background : #111;
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
  .set_buton{
	font-size : 25.5px;
padding:10px 16px;	 
margin-bottom : 10px;
   color:white;

   }

.set_button{
padding:10px 16px;	 

   color:white;
     background : #207cca;
   }

   .link{
	   float:right;
	   
   }
.list{
	
	font-family:Calibri,Geneva,Tahoma;
}
.tmark{
			 font-size:50px;
			    font-family :   Andalus, AngsanaUPC, "Arabic Typesetting";  
		 }

 	.set{
		
		bottom : 5px;
				margin-left : 2px;
				margin-top : 10px;
				font-size : 25px;
			
	}
    
	
	
					 
		 
			
			 
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<title><?php echo $_SESSION['username'].' Page ';?> </title>
	<body>
	<div id="page">
	<ul>
<span class="tmark"><img src="tmark.png" width="300" height="90"></span>
	 

</br>
<li><a class="set_buton" href="masters_page.php">Exeat Log</a></li>
<li><a class="set_button" href="house_mem.php"><img src="settings.png" width="25" height="25"><span class='set'> Settings</span> </a></li>
</br>
</br>
</br>
</br>
	<div id="Main_wrapper">

<center><form action="house_edit.php" method="post">
Change from:</br>
<select name="form">
<option>form 1</option>
<option>form 2</option>
<option>form 3</option>
</select></br></br>
Change form to:</br>
<select name="new_form">
<option>form 1</option>
<option>form 2</option>
<option>form 3</option>
</select></br></br>
<input type="submit"  name="submit1" value="Change Form"/>
</br></br>
</form>
</center>
<?php
if(isset($_POST['submit1'])){
$new_form=$_POST['new_form'];	
$form =$_POST['form'];
$house=$_SESSION['house'];




$query="UPDATE $house SET form='$new_form' where form='$form'";
$query_run=mysqli_query($conn1,$query);


if($query_run){
	
	echo '<script type="text/javascript"> alert("Changes Saved...")</script>';
	
}

else{
	echo '<script type="text/javascript"> alert("Error...")</script>';
	
	
}

	

}

?>
</div>
	
	 
	 <footer>
<p>Copyright©2018 ExeatLog 1.0 All Rights Reserved</p>
	<p id="credit">Powered by JabenSoft®</p>
	</footer>

				
					 				
				 
</ul>
    

</div> 
    
	
	
	

	
</body>
</html>