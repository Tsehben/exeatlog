 <html>
<head>
  <script src="swal.js"></script>
  
  
</head>
</html>

<?php

include ('config1.php');
if(isset($_POST["upload"]) ){
		$subdomain =$_SESSION['subdomain'];
          $session =$_SESSION['session'];

		 $filename=$_FILES["file"]["tmp_name"];
	

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
		  	$flag =true;
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	          //It wiil insert a row to our subject table from our csv file`
	           if($flag){$flag=false; continue;}
	          $status="valid";
	           $stat="pending";
	           $author="Admin";
	           $code = null;
	           $sql = "INSERT into $subdomain (`name`,`form`,`house`,`reason`,`issuedate`,`period`,`code`,`destination`,`type`,`status`,`arrival`,`stat`,`author`,`session`) 
	            	values('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$code','$emapData[6]','$emapData[7]','$status','$emapData[8]','$stat','$author','$session')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query(  $conn2, $sql);
				if(! $result )
				{
						echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to Import Spreadsheet", "error");';
  echo '}, 1000);</script>'; 
		
				
				}
				elseif($result)
{
    
    echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Spreadsheet Imported Successfully", "success");';
  echo '}, 1000);</script>'; 
}
	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
 	 
 
			 //close of connection
			mysqli_close($conn2); 
				
		 	
			
		 }
	}	 
?>		 