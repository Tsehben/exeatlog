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
	background-color:#207cca;
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
height : 260px;
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
	  background:blue;
   color:white;
float:left;
padding:10px 16px;	
   }


   .set_button{
padding:10px 16px;	 
font-size:25.5px;

   color:white;
     background : #207cca;
   }

   .link{
	   float:right;
	   
   }

   .header{
	   
	   font-family:Tahoma,geneva,elephant;
	   font-size:20px;
   }
   label{
	   
	   font-family:Calibri,Geneva,Tahoma;
   }
   input{
	   
	      font-family:Calibri,Geneva,Tahoma;
   }
   .tmark{
			 font-size:50px;
			    font-family :   Andalus, AngsanaUPC, "Arabic Typesetting";  
		 }
		 
		 #add{
			 float:left;
			 width:60%;
		 }
		  #students{
			
		 }
		 .students{
			  height:150px;
				 width:220px;
				 

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
			 .set{
				bottom : 5px;
				margin-left : 8px;
				margin-top : 10px;
				font-size : 25px;
			 }
			 #submit_btn{
				 background-color:#207cca;
				 font-size:16px;
	color:white;
	font-family:Calibri,Geneva,Tahoma;
			 }
			 .drops{
				 margin: 10px;
				 font-size : 18px;
				 	   font-family:Andalus, AngsanaUPC, "Arabic Typesetting";
				 
			 }
			 .add_stud{
				 margin-right : 100px;
				 
				 float : right;
			 }			  
			 .subm{
				 background-color:#207cca;
				 float : right;
				 margin-right : 198px;
				 font-size:16px;
				 margin-top : 2px;
	color:white;
	font-family:Calibri,Geneva,Tahoma;
				 
			 }

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<title><?php echo $_SESSION['username'].' Page ';?> </title>
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


<div id ="add">
<center><p class="header">Please enter the students details:</p></center><span class='add_stud'><img src="add_stud.png" width="130" height="130"/></span>
<form action="house_mem.php" method="post">
<label><b> Name of house member:</b></label><br />
<input id="textbox" name="name" type="text" class="inputvalues" placeholder="Type your fullname" /><br>
<label><b> Parent/Guardian's number:</b></label></ br>
<input name='number' type='text' placeholder='e.g. 233561489683'> </br>
 </br>

<select name="form">
<option>form 1</option>
<option>form 2</option>
<option>form 3</option>

</select>


</br></br>

	<input id="submit_btn" name="submit_btn" type="submit" value="Add Student"/>
</div>
<div id="students">
<a href="house_edit.php" class="link">Edit House Members' List</a></br></br>
<select multiple="2" name="students" class ="students" >
<?php 

$house= $_SESSION['house'];
$form = $_POST['form'];


$query="SELECT* FROM $house WHERE form='$form'";
if($result=mysqli_query($conn1,$query)){
	while($row=mysqli_fetch_row($result))
	{
		echo '<option>'.$row[0].'</option>';
		
	}	
}
?>
</select></br></br>
<input class="submit"id="submit_btn" name="submit" type="submit" value="View List of House Members"/><input class="submit"id="submit_btn" name="delete" type="submit" value="delete"/><input class="subm" name="deleteall" type="submit" value="delete all"/></br>

</div>



</form>
</div>
	
	 
	 
<?php
    

if(isset($_POST['submit_btn']))
{
	//echo '<script type="text/javascript"> alert("Sign Up button Clicked") </script>';
    
    $name = $_POST['name'];
	$form = $_POST['form'];
	$house =$_SESSION['house'];
	 $number =$_POST['number'];	

    
	$query= "SELECT *FROM $house WHERE name='$name' AND form ='$form'";
		 
		 $query_run= mysqli_query($conn1,$query);
		 if(mysqli_num_rows($query_run)>0) {
			 // there is already auser with the same user name
			
			 echo '<script type="text/javascript"> alert("Student already exists.. sign up another student") </script>';
		 }




        else{
				 			  
			 $query ="insert into $house values('$name','$form','$number')";
			 $query_run = mysqli_query($conn1,$query);
	
		}
		
 if($query_run)
				 {
			 echo '<script type="text/javascript"> alert("Student Registered.. ") </script>';
				 }
				 			
				else{
					echo '<script type="text/javascript"> alert("Error.. ") </script>';

					}

	
         }		 
				
					 				
				 if(isset($_POST['delete'])){
					 if(isset($_POST['students'])){

					 $name=$_POST['students'];
				$form =$_POST['form']; 
				 $house=$_SESSION['house'];
				 
				 $query="DELETE FROM $house WHERE name='$name' AND form='$form'";
				 $query_run =mysqli_query($conn1,$query);
				 
				
				if($query_run && $_POST['students']){
				
			 echo '<script type="text/javascript"> alert("Student Removed.. ") </script>';
				 
				 	}
else{
				 echo '<script type="text/javascript"> alert("Error.. ") </script>';
			}			

				 }
				 }
				
				
				 elseif(isset($_POST['deleteall'])){
				
				$form =$_POST['form']; 
				 $house=$_SESSION['house'];
				 
				 $query="DELETE FROM $house WHERE form='$form'";
				 $query_run =mysqli_query($conn1,$query);
				 
				
				if($query_run){
				
			 echo '<script type="text/javascript"> alert("Students Removed.. ") </script>';
				 
				 	} 
 			else{
				 echo '<script type="text/javascript"> alert("Error.. ") </script>';
			}
				 }
		
 ?>
<footer>
	<p>Copyright©2018 ExeatLog 1.0 All Rights Reserved</p>
	<p id="credit">Powered by JabenSoft®</p>
	</footer>
    </ul>
	

</div> 
    
	
	

	
</body>
</html>