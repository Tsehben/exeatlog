<?php
include('config1.php');
if(isset($_POST['searchIt'])){
	
	$search=mysqli_real_escape_string($conn2,$_POST['search']);

$subdomain=$_SESSION['subdomain'];


		$results=mysqli_query($conn2,"SELECT* FROM $subdomain WHERE name LIKE '%$search%' OR  form LIKE '%$search%'  OR issuedate LIKE '%$search%' OR period LIKE '%$search%' OR destination LIKE '%$search%' OR reason LIKE '%$search%'");
		
		$queryResult= mysqli_num_rows($results);
		if ($queryResult==1){
		echo "<h4>There is only 1 result</h4>";
		}
		else{
			echo "<h4>There are ".$queryResult." results</h4>";
			
		}
		if ($queryResult>0){
			
		echo'Search Results ';
			while($row= mysqli_fetch_assoc($results)){
				$string = $row["name"];
 
//Get the first character.
$firstCharacter = $string[0];
	echo
		'<tr>
                                                <td style="width:50px;"><span class="round">'.$firstCharacter.'</span></td>
                                                <td>
												
                                                    <h4>'.$row["name"].'</h4><small class="text-muted">'.$row["form"].'</small></td>
                                                <td>'.$row["reason"].'</br><small class="text-muted"> ID:<b>'.$row["code"].'</b></small></td>
                                                <td class="text-muted"><h7>'.$row["issuedate"].'</h7></br>'.$row["destination"].'</br>'.$row["period"].' days</td>
                                            </tr>';
				
	}
			}
			
			else{
				echo "<option type='label'>No Search Results!</option>";
				
			}
	}

?>