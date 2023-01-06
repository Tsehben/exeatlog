<?php
include('config1.php');
$subdomain =$_SESSION['subdomain'];
$username =$_SESSION['username'];

if(isset($_POST['changen'])){
    
    
$name =mysqli_real_escape_string($conn4,$_POST['schoolname']);
$query="UPDATE register SET name='$name' WHERE username='$username' AND subdomain ='$subdomain'";
$query_run=mysqli_query($conn4,$query);
if($query_run){
    
 echo 'Changes Saved';   
}
else{
    
    echo 'Error';
}
}

if(isset($_POST['changea'])){
    
    
$address =mysqli_real_escape_string($conn4,$_POST['address']);
$query="UPDATE register SET address='$address' WHERE username='$username' AND subdomain ='$subdomain'";
$query_run=mysqli_query($conn4,$query);
if($query_run){
    
 echo 'Changes Saved';   
}
else{
    
    echo 'Error';
}
}

if(isset($_POST['changel'])){
    
    
$limit =$_POST['limit'];
$query="UPDATE register SET maxexeat='$limit' WHERE username='$username' AND subdomain ='$subdomain'";
$query_run=mysqli_query($conn4,$query);
if($query_run){
    
 echo 'Changes Saved';   
}
else{
    
    echo 'Error';
}
}
if(isset($_POST['changei'])){
    
    
$iperiod =$_POST['maxperiodi'];
$query="UPDATE register SET maxperiodi='$iperiod' WHERE username='$username' AND subdomain ='$subdomain'";
$query_run=mysqli_query($conn4,$query);
if($query_run){
    
 echo 'Changes Saved';   
}
else{
    
    echo 'Error';
}
}

if(isset($_POST['changee'])){
    
    
$eperiod =$_POST['maxperiode'];
$query="UPDATE register SET maxperiode='$eperiod' WHERE username='$username' AND subdomain ='$subdomain'";
$query_run=mysqli_query($conn4,$query);
if($query_run){
    
 echo 'Changes Saved';   
}
else{
    
    echo 'Error';
}
}

if(isset($_POST['changep'])){
    
    
$phone =$_POST['phone'];
$query="UPDATE register SET phone='$phone' WHERE username='$username' AND subdomain ='$subdomain'";
$query_run=mysqli_query($conn4,$query);
if($query_run){
    
 echo 'Changes Saved';   
}
else{
    
    echo 'Error';
}
}


?>