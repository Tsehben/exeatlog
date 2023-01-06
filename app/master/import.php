<html>
<head>
  <script src="swal.js"></script>
  
  
</head>
</html>

<?php

include ('config1.php');
if(isset($_POST["Import"]) ){
		$subdomain =$_SESSION['subdomain'];
         $house =$_SESSION['house'];
         $photo =null;

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
		  	$flag =true;
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	          //It wiil insert a row to our subject table from our csv file`
	           if($flag){$flag=false; continue;}
	           $sql = "INSERT INTO `$subdomain$house`(`name`, `form`, `number`, `house`,`track`,`photo`) 
	            	VALUES('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$photo')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query($conn1, $sql);
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
			mysqli_close($conn); 
				
		 	
			
		 }
	}	 
?>		 