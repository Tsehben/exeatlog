<?php
require 'config/config.php';
$query="SELECT* FROM housemasters ";
if($result=mysqli_query($conn,$query)){
	while($row=mysqli_fetch_row($result))
	{
		echo '<option>'.$row[2].'</option>';
		
	}	
}
?>