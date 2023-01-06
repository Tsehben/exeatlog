



<?php
include ('config1.php');

$subdomain =$_SESSION['subdomain'];
$maxexeat = null;
$session=null;
$periodi=null;
$periode=null;

$query ="SELECT * FROM register WHERE  subdomain='$subdomain' AND maxexeat='$maxexeat' OR subdomain='$subdomain' AND session='$session' OR subdomain='$subdomain' AND maxperiodi='$periodi' OR subdomain='$subdomain' AND maxperiode='$periode'  ";
$query_run = mysqli_query($conn4,$query);
if(mysqli_num_rows($query_run)>0){
	
	echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Attention!", "Please make sure all details are provided accurately at Settings page.", "info");';
  echo '}, 1000);</script>';

}
if(isset($_POST['house'])){
$house= $_POST['house'];

if(isset($_POST['view'])){
$query="SELECT* FROM $subdomain WHERE house='$house' AND status='valid' ORDER BY id DESC LIMIT 10";
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
												
                                                    <h4>'.$row["name"].'</h4><small class="text-muted">'.$row["form"].'</br>'.$row["session"].'</small></td>
                                                <td>'.$row["reason"].'</br><small class="text-muted"> ID:<b>'.$row["code"].'</b><br>'.$row["type"].' exeat</small></td>
                                                <td class="text-muted"><h7>'.$row["issuedate"].'</h7></br><i class="fa fa-map-marker"></i> '.$row["destination"].'</br>'.$row["period"].' <i class="fa fa-clock-o"></i> <small class="text-muted">     Issued by: <b>'.$row["author"].'</b></small></td>
                                            </tr>';
	}	
}
}
}
 ?>








