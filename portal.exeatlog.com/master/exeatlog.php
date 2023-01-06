



<?php
include ('config1.php');
$house=$_SESSION['house'];
$subdomain =$_SESSION['subdomain'];
$query="SELECT* FROM $subdomain where house='$house' AND status ='valid' ORDER BY id DESC ";
if($result=mysqli_query($conn2,$query)){
	while($row=mysqli_fetch_assoc($result))
	{
		$string = $row["name"];
 
//Get the first character.
$firstCharacter = $string[0];
		echo
		'<tr>
                                                <td style="width:50px;"><form method="post"><button class="fa fa-plus-square" width=5px" height="5px" style="background:none;" name="printinfo" value="'.$row["code"].'"></button></form><span class="round" >'.$firstCharacter.'</span> </td>
                                                <td>
												
                                                    <h4>'.$row["name"].'</h4><small class="text-muted">'.$row["form"].'</br>'.$row["session"].'</small></td>
                                                <td>'.$row["reason"].'</br><small class="text-muted"> ID:<b>'.$row["code"].'</b></br>'.$row["type"].' exeat</small></td>
                                                <td class="text-muted"><h7>'.$row["issuedate"].'</h7></br><i class="fa fa-map-marker"></i> '.$row["destination"].'</br>'.$row["period"].'<i class="fa fa-clock-o"></i>       <a style="float:right;" class="fa fa-print" href="printexeat2.php">Print</a></td>
                                           </tr>';
                                           
    
	}}
					         
	                                         if(isset($_POST['printinfo'])){
                                               $id =$_POST['printinfo'];
                                               
                                           $query="SELECT* FROM $subdomain where house='$house' AND status='valid' and code='$id' ";
if($result=mysqli_query($conn2,$query)){
	while($row=mysqli_fetch_assoc($result))
	{    
                                               
                                           
	
$_SESSION['students'] = $row["name"];
$_SESSION['reason']= $row["reason"];
$_SESSION['issuedate']= $row["issuedate"];
$_SESSION['period']= $row["period"];
$_SESSION['code']= $row["code"];

 $_SESSION['destination']= $row["destination"];

}}
			
				$query="SELECT *FROM register WHERE subdomain ='$subdomain'";
					
					$query_run=mysqli_query($conn4,$query);
					
					if(mysqli_num_rows($query_run)>0){
					    while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['address'] =$row["address"];
					        $_SESSION['schoolname'] =$row["name"];
					         $_SESSION['logo'] =$row["logo"];
					         $_SESSION['email'] =$row["email"];
				$query="SELECT* FROM $subdomain where house='`$house`' AND status ='valid' AND code='$id'";
                                               
                                        if($result=mysqli_query($conn2,$query)){
	while($row=mysqli_fetch_assoc($result))
	{
	
	$name=$row["name"];  
	
	$query="SELECT* FROM `$subdomain$house` where name='$name'";
                                               
                                        if($result=mysqli_query($conn1,$query)){
	while($row=mysqli_fetch_assoc($result))
	{
	
	$_SESSION["photo"]=$row["photo"];  
	
	}}
	
	}}   
					        
						}
						 
					    }

					    
					    
					         
	    
	
	}  
	


 ?>




