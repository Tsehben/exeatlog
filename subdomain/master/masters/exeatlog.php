
<div class="searchresults">
<?php
if(isset($_POST['searchIt'])){
	$search=mysqli_real_escape_string($conn1,$_POST['search']);



		$results=mysqli_query($conn1,"SELECT* FROM exeats WHERE name LIKE '%$search%' OR  form LIKE '%$search%' OR house LIKE '%$search%' OR destination LIKE '%$search%'  OR issuedate LIKE '%$search%'    ");
		
		$queryResult= mysqli_num_rows($results);
		if ($queryResult==1){
		echo "<h4>There is only 1 result</h4>";
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
				echo "<option type='label'>No Search Results!</option>";
				
			}
	}

?>
</div>
<?php

$house=$_SESSION['house'];

$query="SELECT* FROM exeats where house='$house' ";
if($result=mysqli_query($conn1,$query)){
	while($row=mysqli_fetch_row($result))
	{
		echo
		'<div class="log">'
		.'<b>'.$row[0].'</b>'.'<span class="date"><b>'.$row[6]. "</b>-".$row[1].'</span></br></br>'.'<span class="reason">'.$row[3].'</span></br>'.'<span class="period"> Valid for '.$row[5].' days</span>'.'<span class="destination">  <img src="location.png"  height="20" width="20"/>'.$row[7].' </span>'.
		'<span class ="date">'.$row[4].'</span></br></div>';
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