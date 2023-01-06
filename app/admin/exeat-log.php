<!DOCTYPE html>
<html lang="en">

<head>
 <script src="swal.js"></script>
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
    <title>ExeatLog:Admin's Dashboard</title>
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
</style>
</head>

<body class="fix-header fix-sidebar card-no-border">
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
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a style="height : 80px;" class="navbar-brand" href="#">
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
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20" method="POST">
                                <input type="text" class="form-control" placeholder="Search for..." name="search"> <button class="ti-search" style="background:none; border:none;" name="searchIt"></button>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                       <?php
                include('config1.php');
               $subdomain =$_SESSION['subdomain'];

     
   
                    $query="SELECT* FROM $subdomain WHERE status='request'";
                    $result=mysqli_query($conn2,$query);
                    $count= mysqli_num_rows($result);
                
                    
          echo' <a href="approve.php"><i style="margin-top:26px; margin-right:15px;" class="fa fa-bell o"></i><span style="color:white;" class="notification">'.$count.'</span><a>';
           ?>
           <ul class="navbar-nav my-lg-0">
                        <li style="width:100%;" class="nav-item dropdown">
  <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo '<img style="width:50px; height:50px; border-radius:0px;" class="profile-pic m-r-5" src="data:image;base64,'.$_SESSION['pic'].'">'; ?><?php echo 'Administrator';?> <i class="fa fa-angle-down edu-icon edu-down-arrow"> </i></a>
                                       	
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
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
           <nav class="sidebar-nav">
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
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Exeat Records</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Exeat logs</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="issue-exeat.php" class="btn pull-right hidden-sm-down btn-success"> Issue An Exeat</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <!-- Row -->
                <!-- Row -->
                <div class="row">
                    <div class="col-sm-9">
                        <div class="card">
                            <div class="card-block">
                                
                                <form  class="form-horizontal form-material" method="post" name="upload_excel" enctype="multipart/form-data" >
                                <button type="submit" class="btn pull-left btn-info"  name="upload" id="submit"> Import Records</button>
                                <a style="margin-top:20px; margin-left:10px;" title="download sample records  " href="Exeatlog records.csv" download> <i class="fa fa-download"></i></a>
                               </br></br>
                                	<div class="form-group">
                                	    <input style="float:left;" type="file" name="file" id="file" accept=".csv" class="input-large" required>
                                 
                                	    </div>
                                
                                </form>
                                <?php
                                include('exeat-import.php');
                                ?>
                        
                                
                               
                                <form method="POST" >
								<select class="custom-select pull-right" name="house">
                                  <?php include('select.php');?>
                                </select></br></br>
								<button class="fa fa-eye" type="submit" name="view" style="float:right; background:none; border:none;"></button>
								</form></br>
                                <div class="table-responsive m-t-40" style="background:#f2f7f8;">
                                    <table class="table stylish-table">
                                        
                                        <tbody>
										
                                            <?php
											include('search.php');
											
											?>
                                            
                                        </tbody>
                                    </table>
                                </div>
								
                                <div class="table-responsive m-t-40">
                                    <table class="table stylish-table">
                                        
                                        <tbody>
						
                                            <?php
											echo 'Exeats Issued' ;
											include('exeatlog.php');
											
											?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                       <div class="col-sm-3">
                        <div class="card">
                            <div class="card-block">
                                <form method="POST" >
                                    <center><span class="breadcrumb-item active"><b>Weekly Record Feeds</b></span></center></br>
								<select class="custom-select pull-right" name="group">
                                  <?php include('select.php');?>
                                </select></br></br>
								<button class="fa fa-eye" type="submit" name="view1" style="float:right; background:none; border:none;"></button>
								</form></br>
                           
                              	
	<div id="swapper-first">
	     <div class="table-responsive m-t-40" >
	           <label class="breadcrumb-item active"><b>Pending Exeats</b></label></br></br>
	    <table>
               <tbody>                    
                                       
	  <form method= "POST">
<?php
include ('config1.php');
if(isset($_POST['group'])){
$house= $_POST['group'];
$subdomain =$_SESSION['subdomain'];
if(isset($_POST['view1'])){
$query="SELECT* FROM $subdomain WHERE stat='pending' AND house='$house'";

if($result=mysqli_query($conn2,$query)){
    if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result))
	{

		echo
		'<tr style="">
                                            
                                                
												
                                                   <h5> <input type="checkbox" value="'.$row["name"].'" name="name[]"/> ' .$row["name"].'</h5><small class="text-muted">'.$row["form"].'</small></br><small> Arrival Date : </small><small class="text-muted">'.$row["arrival"].'</small>
                                                    
                                                
                                               </tr><hr>';
	}
	echo '<input class="btn btn-success" type="submit" name="submit" value="Check In"/>';
    }
}
}
}
?>

</form>
<?php
if(isset($_POST['submit'])&& isset($_POST['name'])){
												$subdomain =$_SESSION['subdomain'];

												
									    foreach ($_POST['name'] as $names){
								
											
										
												$query ="UPDATE $subdomain SET stat='checked' WHERE name='$names' AND stat='pending'";
												$query_run = mysqli_query($conn2,$query);
										
												
												
												}
												if ($query_run){
													echo 'Success';
													
												}
												else{
													echo 'Error!';
												
												}
												
											
											}
											
?>
</tbody>
</table>
</div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
                <!-- Row -->
                    </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
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
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/flot-data.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
