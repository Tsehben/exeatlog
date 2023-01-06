



<?php
include ('config1.php');
$house=$_SESSION['house'];
$subdomain =$_SESSION['subdomain'];
$query="SELECT* FROM $subdomain where house='$house' ";
if($result=mysqli_query($conn2,$query)){
	while($row=mysqli_fetch_assoc($result))
	{
		$string = $row["name"];
 
//Get the first character.
$firstCharacter = $string[0];
		echo
		'<tr>
                                                <td style="width:50px;"><span class="round">'.$firstCharacter.'</span></td>
                                                <td>
												
                                                    <h4>'.$row["name"].'</h4><small class="text-muted">'.$row["form"].'</small></td>
                                                <td>'.$row["reason"].'</br><small class="text-muted"> ID:<b>'.$row["code"].'</b></small></td>
                                                <td class="text-muted"><h7>'.$row["issuedate"].'</h7></br><i class="fa fa-map-marker"></i> '.$row["destination"].'</br>'.$row["period"].' day(s) <i class="fa fa-clock-o"></i></td>
                                            </tr>';
	}	
}
 
 ?>




