<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<?php



?>
</head>
<title><?php echo $_SESSION['username'].' Page ';?></title>
	<body>
	<div id="page">
	<ul>
		<span class="tmark"><img src="tmark.png" width="300" height="90"></span>

   <form class="logout" action="http://localhost" method="post">
	 <span class="name">Welcome, <?php echo $_SESSION['username'];?></span> <img class='pic' src="master_pic.png"  width="70" height="70"/>
	</br>
	</br>
	<input type="submit" name="logout"  class="logout1"value="Log Out">
	</form>
</br>
</br>
</br>
</br>
<li><a href="admin_page.php" class="set_button" >Exeat Log</a><li>
<li>

<div class="dropdown"><button class="dropbtn"><img src="settings.png" width="25" height="25"><span class='set'>Settings</span>
<i class= "fa fa-caret-down"></i>
</button>
<div class="content">
<a href="admin_set.php"><img src="mem.png" width="25" height="25"><label class='drops'>Manage Houses</label></a>
<a href= "acc_set.php"><img src="master_pic.png" width="25" height="25"><label class='drops'>My Account</label></a>
<a href= "security.php"><img src="master_pic.png" width="25" height="25"><label class='drops'>Manage Security </label></a>

</div>
</div>
</li>
</br>
</br>
</br>	
</br>

<div id="Main_wrapper">

<a class="linke" href="admin_exeat.php">Issue  An Exeat Now</a></br>

<div>
<form action="admin_page.php" method="POST">
<input type="text" name="search" placeholder="Enter name or form..."/>
<button type="submit" name="searchIt" value="Search">Search</button>
</form></div>


<div class="searchresults">
<?php
function search(){ 
if(isset($_POST['searchIt'])){
	$search=mysqli_real_escape_string($conn1,$_POST['search']);



		$results=mysqli_query($conn1,"SELECT* FROM exeats WHERE name LIKE '%$search%' OR  form LIKE '%$search%' OR house LIKE '%$search%' OR destination LIKE '%$search%'  OR issuedate LIKE '%$search%'   ");
		
		$queryResult= mysqli_num_rows($results);
		if ($queryResult==1){
		echo "<h4>There is only 1 results</h4>";
		}
		else{
			echo "<h4>There are ".$queryResult." results</h4>";
			
		}
		if ($queryResult>0){
			while($row= mysqli_fetch_assoc($results)){
	echo
		'<div class="log">'
		.'<b>'.$row["name"].'</b>'.'<span class="date"><b>'.$row["code"]. "</b>-".$row["form"].'</span></br></br>'.'<span class="reason">'.$row["reason"].'</span></br>'.'<span class="period"> Valid for '.$row["period"].' days</span>'.'<span class="destination">  <img src="location.png"  height="20" width="20"/>'.$row["destination"].' </span>'.
		'<span class ="date">'.$row["issuedate"].'</span></br></div>';			
				
	}
			}
			
			else{
				echo "No Search Results!";
				
			}
	}
}
?>
</div>
<?php



$query="SELECT* FROM exeats  ";
if($result=mysqli_query($conn1,$query)){
	while($row=mysqli_fetch_row($result))
	{
		echo
		'<div class="log">'
		.'<b>'.$row[0].'</b>(<b>'.$row[2].' </b>house)<span class="date"><b>'.$row[6]. "</b>-".$row[1].'</span></br></br>'.'<span class="reason">'.$row[3].'</span></br>'.'<span class="period"> Valid for '.$row[5].' days</span>'.'<span class="destination">  <img src="location.png"  height="20" width="20"/><b>'.$row[7].
		'</b><span class ="date">'.$row[4].'</span></br></div>';
	}	
}
 
 ?>




</div> 

<?php

if(isset($_POST['logout']))
	
	{
		session_unset();
		session_destroy();
		header('location:index.php');
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