

	<?php
	
	
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

include('config1.php');

$sname=array();

$query=mysqli_query($conn1,"select * from `exeats ");
while($row=mysqli_fetch_array($query)){
	$sname[]=$row['name'];

	
	}

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($sname as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint =$name;
				$query="select * from `exeats where name='$hint'" ;
while($row=mysqli_fetch_array($query)){
	
			echo '<div name ="log" class="log">'
		.'<b>'.$row['name'].'</b>'.'<span class="date"><b>'.$row['form']. "</b>-".$row[1].'</span></br></br>'.'<span class="reason">'.$row['reason'].'</span></br>'.'<span class="period"> Valid for '.$row[5].' days</span>'.
		'<span class ="date">'.$row[4].'</span></br></div>';
	
	}
			}
	else {
				echo $hint === "" ? "no suggestion" :$hint ;
				
                
            }
			
        }
    }
}

echo $hint === "" ? "no suggestion" :$hint ;
		
		
			
?>
