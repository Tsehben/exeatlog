
<!DOCTYPE html>
<html lang="en">


<head>
<?php
session_start();
?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>ExeatLog: Admin Add House</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>
body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #55ce63;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
   width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);

}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
   width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
       
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}

.notification{
position: absolute;
    background-color: #DC143C;
    text-align: center;
    border-radius: 10px;
    min-width: 17px;
    height: 17px;
    font-size: 10px;
    color: #fff;
    font-weight: 300;
    line-height: 17px;
    top: 3px;
    right: 3px;
    letter-spacing: -1px;
    margin-right:218px;
    margin-top:20px;
}

<style>
  
  body{

  margin-left:15%;
	  margin-right :15%;
  }
  .labels{
	  color : #207cca;
	  font-family:Verenda,Tahoma,Calibri;
	  font-style : bold;
	  font-size : 14px;
  }
  .lab{
	  color : red;
	  font-family:Calibri,Comic Sans,Arial Black;
	  font-size : 12px;
  }
 .header{
	   font-size:18px;
	   font-family:Tahoma,geneva,elephant;
	   text-align : center;
	   margin-right : 100px;
	
   }
   .code{
	   
	   float:right;
   }
   .slip{
       
	   width:100%;
border:3px solid #207bba;  
border-radius : 10px; 
margin : 10px;
   }
   .slipfooter{
    
	   background:none;
	font-size : 12px;
	font-family:Andalus, AngsanaUPC, elephant;
	margin-bottom : 25px;  
		
   }
  .school{
	  font-size:12px;
	   font-family:Tahoma,geneva,elephant,AngsanaUPC;
	   float:left;
	   margin-top : 8px; 
	
	 
  }
  .head1{
	  width : 100%;
	  height : 80px;
	  margin : 8px;
	 
  }
  .body{
	  width : 100%;
	  margin:10px;
  }
  .logo{
	  float: left;
	  width : 60px;
	  height: 60px;
  }
  .print{
	  background:white;
	  border:0px;
	  }
	  .code{
		  font-size:12px;
	   font-family:Tahoma,geneva,elephant,AngsanaUPC;
		  float:right;
		  margin-right : 10px;
		    margin-top : 8px; 
		  
	  }
	  .exeat{
           
	    
	    
	      
	  }
	 .pic{
	       
	        float :right;
	        
	     
	 }
	  
	  .photo{
	      margin-right : 50px;
	      margin-bottom : 50px;
	       float :right;
	      border-radius:40%;
		  border:5px ash;
	      height:170px;
	      width:170px;
	  }
	  .bottom{
		  backgroud:none;
		  
	  }
	  
	   @media print
{
#noprint {display:none;}
}
@media print {
  @page { margin: 0; }
  body { margin: 1.6cm; }
}
@media print {
        div.foot {
            position: fixed;
            top: 0;
           
        }
        .foot{
             font-family:Andalus, AngsanaUPC, "Arabic Typesetting";
             float:right;
            
        }
  

</style>
<script>

function printContent(exeat){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(exeat).innerHTML;
	document.body.InnerHTML = printcontent;
	window.print();
		document.body.InnerHTML = restorepage;
	
}

function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});
</script>

</head>

<body class="fix-header card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light" >
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header" id="noprint">
                    <a style="height : 90px;" class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span>
                            <!-- dark Logo text -->
                            <img style="width:170px; height:62px; margin-top:4px;"src="../assets/images/text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse" id="noprint">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                       <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="exeat-log.php"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20"   method="POST">
                                <input type="text" class="form-control" placeholder="Search for..." name="search"> <a class="srh-btn" ><button type="submit"style="background:none; border:none;" name="searchIt" class="ti-search" ></button></a>
                            </form>
                        </li>
                    </ul>
                     <?php
                include('config1.php');
               $subdomain =$_SESSION['subdomain'];

     
   
                    $query="SELECT* FROM $subdomain WHERE status='request'";
                    $result=mysqli_query($conn2,$query);
                    $count= mysqli_num_rows($result);
                
                    
          echo' <a href="approve.php"><i style="margin-top:26px; margin-right:15px;" class="fa fa-bell o"></i><span class="notification">'.$count.'</span><a>';
           ?>
                    <ul class="navbar-nav my-lg-0">
                        <li style="width:100%;" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo '<img style="width:50px; height:50px; border-radius:0px;" class="profile-pic m-r-5" src="data:image;base64,'.$_SESSION['pic'].'">'; ?><?php echo 'Administrator'?> <i class="fa fa-angle-down edu-icon edu-down-arrow"> </i></a>
                                       	
									   <ul style="width:100%;"  role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" >
									   <?php
									   
									   $string =$_SESSION['subdomain'];
									   $firstCharacter =strtoupper($string[0]);
									   
									   echo '<span class="round" style="width:50px; height:50px; font-size:20px;">'.$firstCharacter.'</span><b>  '.strtoupper($_SESSION['subdomain']).'</b></br><small class="text-muted">'.$_SESSION['email'].'</small>';
									   ?>
                                                        </br></br><li><center><form method="post" action="logout.php"><input  type="submit" class="btn btn-success" name="logout" value="Logout"></form>
                                                       </center> </li>
                                                    </ul>
						</li>
						
                                                  
                                                
                                                
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" id="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
           <nav class="sidebar-nav" id="noprint">
                              
                     <ul id="sidebarnav">
                        <li>
                            <a href="exeat-log.php" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Exeats Records</a>
                        </li>
                        <li>
                            <a href="add-house.php" class="waves-effect"><i class="fa fa-bank" aria-hidden="true"></i>Manage Houses</a>
                        </li>
						 <li>
                            <a href="exeatslip.php" class="waves-effect"><i class="fa fa-address-card" aria-hidden="true"></i>Exeat Slips</a>
                        </li>
                        <li>
                            <a href="secure.php" class="waves-effect"><i class="fa fa-users" aria-hidden="true"></i>Security Personnel</a>
                        </li>
                        
                        
                        <li>
                         <a href="my-account.php" class="waves-effect"><i class="fa fa-gears" aria-hidden="true"></i>Settings</a>                        </li>
						<li>
                            <a href="issue-exeat.php" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Issue An exeat</a>
                        </li>
                          <?php
                include('config1.php');
               $subdomain =$_SESSION['subdomain'];

     
   
                    $query="SELECT* FROM $subdomain WHERE status='request'";
                    $result=mysqli_query($conn2,$query);
                    $count= mysqli_num_rows($result);
                
                       echo '<li>
                            <a href="approve.php" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Exeat approvals ('.$count.') </a>
                            
                        </li>';
                        ?>
                        <li>
                            <a href="#" class="waves-effect"><i class="fa fa-info-circle m-r-10" aria-hidden="true"></i>Help</a>
                        </li>
                    
						
					</ul>
                   
                      <center> <a href="Exeatlog.apk" download><i class="fa fa-download"></i>Download <br>the Android App Version</a></center>
                
                </nav>
         
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles" id="noprint">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Add A House</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Manage Houses</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5" id="noprint">
                        
<form method="POST" enctype="multipart/form-data">               
<div class="row text-center justify-content-md-center">
 <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script></br>
<div class="file-upload">
  <button class="file-upload-btn" type="submit" name="upload">Add Image</button></br></br>
<center>
  <div class="image-upload-wrap">
    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="image"/>
<center class="m-t-30"> <img src="master.png" class="img-circle" width="150" />
  </div>
 
  <div class="file-upload-content">
    <img class="file-upload-image" src="#" alt="your image" />
    <div class="image-title-wrap">
      <button type="button" onclick="removeUpload()" class="remove-image">Remove Image</span></button>
   
   </div>
  </div><br />
    <div class="form-group">
<form class="app-search p-l-20"   method="POST">
                                         <b><label class="col-sm-6"><b>Select A Student</b></label></b>
                                <div class="col-sm-12">
											<select class="custom-select pull-right" name="house">
											<?php
												include('select.php');
												?>
											</select><button class="fa fa-eye" type="submit" name="view" style="float:right; background:none; border:none;"></button><br></br>
                                            <select multiple  class="form-control form-control-line" name="student">
                                               <?php
											   include('studlist.php');

                                            ?>
											
											</select>
											
											
											
                                        </div>
							<button style="margin-top : 5px;" type="submit" id="submit" name="print" class="btn btn-info" data-loading-text="Loading...">Generate Exeat Slip</button>
							
                            </form>
               
                                    </div>
  </center>

</div>
</form>
                            
                    </div>
					</div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
							<?php
							if(isset($_POST['print']) && isset($_POST['student'])){
									 $name =$_POST['student'];
									 $house = $_SESSION['house'];
		$query="SELECT *FROM register WHERE subdomain ='$subdomain'";
					
					$query_run=mysqli_query($conn4,$query);
					
					if(mysqli_num_rows($query_run)>0){
					    while($row =mysqli_fetch_assoc($query_run)){
					        $_SESSION['address'] =$row["address"];
					        $_SESSION['schoolname'] =$row["name"];
					         $_SESSION['logo'] =$row["logo"];
					         $_SESSION['email'] =$row["email"];
					         
					         $query="SELECT * FROM `$subdomain$house` WHERE name ='$name'";
					
					$query_run=mysqli_query($conn1,$query);
						if(mysqli_num_rows($query_run)>0){
						while($row =mysqli_fetch_assoc($query_run)){
						    $photo  = $row["photo"];
						    if($photo == null){
			 echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Please set the the student\'s photo.
</div>';
						    }
						    else{
					        $_SESSION['photo'] =$row["photo"];
					          $_SESSION['name'] =$row["name"];
					          
					          $name=$_SESSION['name'];

$schname=$_SESSION['schoolname'];
$schoolname=strtoupper($schname);
$add=$_SESSION['address'];
$address=strtoupper($add);
$logo=$_SESSION['logo'];
$email = $_SESSION['email'];
$photo =$_SESSION['photo'];
$house =$_SESSION['house'];

echo "<div id='exeat' class='slip'><div class='head1'><img class='logo' src='data:image;base64,".$logo."'><span class='school'>$schoolname</br>$address</br>$email</span> <span class='code'> EXEAT ID:...........................<b></span></div><div  class='body'><center><p class='header'>EXEAT SLIP</p></center> <img class='photo' src='data:image;base64,".$photo."'><div class='exeat'><span class='labels'>Name Of Student:  ".$name."</span></br></br><span class='labels'>House: </span>".$house."</br></br><span class='labels'>Destination: <img src='location.png' width='25' height='25'/> ...............................</span>".'<span class="lab"></br><br><span class="labels">Reason for exeat : ................................................................</span></br></br><span class=labels>Duration: <img src="clock.png" width="25" height="25"/>  ............</span> </div></div><br/><br/><center><span class="slipfooter">This exeat was issued on..........................................</br>The owner of this slip is permitted to leave school campus.</span></center></div>';
		
						
						    }
						}
					    }
					}
	 }
					
							}
			
					?>
					<?php
							 if(isset($_POST['upload']) && isset($_POST['student'])){
	
    
	$house =$_SESSION['house'];

$id = $_POST['student'];

	$query= "SELECT *FROM `$subdomain$house` WHERE name='$id'";
		 
		 $query_run= mysqli_query($conn1,$query);
		 if(mysqli_num_rows($query_run)==0) {
			 // there is already auser with the same user name
			
echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> The student does not exist.
</div>';
		 }
		 else
		 
			 if(getimagesize($_FILES['image']['tmp_name']) == FALSE ){
			 
			 echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Please select an image.
</div>';
			 }
			 else 
				 if($_FILES['image']['size'] > 800000){
				 
				  echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Image is too large.Please make sure your image is less than 800KB. 
</div>';
			 }
			 else{
				 $image=addslashes($_FILES['image']['tmp_name']);
				 $name=addslashes($_FILES['image']['name']);
			     $image=file_get_contents($image);
			    $image=base64_encode($image);
				
				
	
		$query ="UPDATE `$subdomain$house` SET  photo ='$image' WHERE name='$id' ";
		$query_run= mysqli_query($conn1,$query);
		if ($query_run){
	echo '<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Uploaded.
    </div>';
		}
		else{
		echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> Unable to Upload Image.
</div>';
		
		}
		
			 }
							 }
							?>
							<button onclick="printContent('exeat')" id="noprint" class="fa fa-print" >Print</button>


<div style="float:right;" class="foot">Powered by Jabensoft</div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                        </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center" id="noprint">
                ExeatLog © 2022 </br>Powered by DomiTech
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
 
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 function fetch_employee_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
    for(var count=0; count<data.length; count++)
    {
     var html_data = '<tr><td>'+data[count].id+'</td>';
     html_data += '<td data-name="name" class="name" data-type="text" data-pk="'+data[count].id+'">'+data[count].name+'</td>';
     html_data += '<td data-name="password" class="password" data-type="text" data-pk="'+data[count].id+'">'+data[count].password+'</td>';
     html_data += '<td data-name="house" class="house" data-type="text" data-pk="'+data[count].id+'">'+data[count].house+'</td>';
     html_data += '<td data-name="email" class="email" data-type="text" data-pk="'+data[count].id+'">'+data[count].email+'</td>';
     html_data += '<td data-name="phone" class="phone" data-type="text" data-pk="'+data[count].id+'">'+data[count].phone+'</td></tr>';
     $('#employee_data').append(html_data);
    }
   }
  })
 }
 
 fetch_employee_data();
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.name',
  url: "update.php",
  title: 'Name of Housemaster',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.password',
  url: "update.php",
  title: 'Password',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 

 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.email',
  url: "update.php",
  title: ' Email of Housemaster',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  
  }
 });
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.phone',
  url: "update.php",
  title: ' Phone Number',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  
  }
 });
 
 
 
});
</script>
