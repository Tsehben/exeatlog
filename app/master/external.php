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
    <title>Exeatlog - Issue an Exeat</title>
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
                         </span> </a>
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
                            <form class="app-search p-l-20"   method="POST">
                                <input type="text" class="form-control" placeholder="Search for..." name="search"> <button class="ti-search" style="background:none; border:none;" name="searchIt"></button>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul style="width:auto;" class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo '<img  class="profile-pic m-r-5" src="data:image;base64,'.$_SESSION['pic'].'">'; ?><?php echo $_SESSION['username'];?> <i class="fa fa-angle-down edu-icon edu-down-arrow"> </i></a>
                                       	
									   <ul style="width:100%;"  role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" >
									   <?php
									   
									   $string =$_SESSION['username'];
									   $firstCharacter =$string[0];
									   
									   echo '<span class="round" style="width:50px; height:50px; font-size:20px;">'.$firstCharacter.'</span><b>  '.$_SESSION['username'].'</b></br><small class="text-muted">'.$_SESSION['email'].'</small>';
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
        <aside style="position:fixed;"class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
                    <ul id="sidebarnav">
					  <li>
                            <a href="exeat-log.php" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Exeats Records</a>
                        </li>
					
                        <li>
                            <a href="add-house.php" class="waves-effect"><i class="fa fa-bank" aria-hidden="true"></i>Manage House</a>
                        </li>
                        
                           <li>
                            <a href="issue-exeat.php" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Internal exeat</a>
                        </li>
                      <li>
                            <a href="external.php" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>External exeat</a>
                        </li>
                        
                    <li>
<a href="my-account.php" class="waves-effect"><i class="fa fa-gears" aria-hidden="true"></i>Settings</a>  </li>
						
                        <li>
                            <a href="#" class="waves-effect"><i class="fa fa-bullhorn m-r-10" aria-hidden="true"></i>Alerts</a>
                        </li>
						<li>
                            <a href="#" class="waves-effect"><i class="fa fa-info-circle m-r-10" aria-hidden="true"></i>Help</a>
                        </li>
						
                    
					</ul><br><br>
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Send A Request</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">External Exeat</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <a href="exeat-log.php" class="btn pull-right hidden-sm-down btn-success"> View Exeat Log</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
				<div class="row">
				
                    <div class="col-sm-9">
					
                        <div class="card">

                            
                        
                            
                            <div class="card-block">
                            
  <div class="form-group">
                                      
							<form class="form-horizontal form-material" method="POST">
<select class="custom-select pull-right" name='form'>
                                    <option >Form 1</option>
                                    <option >Form 2</option>
                                    <option >Form 3</option>
                            
                                </select>
								</br></br></br>
	                               <div class="form-group">
                                        
                                    </div><div class="form-group">
                                        <b><label class="col-sm-6"><b>Select A Student</b></label></b>
                                        <div class="col-sm-12">
                                            <select multiple size="8" class="form-control form-control-line" name="students">
                                               <?php
											   include('view.php');

                                            ?>
											
											</select>
											
											<input type="submit" style="float:right;" class="btn btn-success" name="view" value="View"/>
											
                                        </div>
                                    </div>
                            							 
							 <label class="col-md-12"><b>Type of Exeat</b></label></b>
                                        <div class="col-md-12">
                                           <input type="radio" placeholder="10" class="radio" name="type" value="normal" selected>  <label class="">  Normal </label>
                                        <input type="radio" placeholder="10" class="radio" name="type" value="special">  <label class=""> Special </label>
										</div>
                                    </div>
							                    <div class="form-group">
                                        <b><label class="col-md-12"><b>Reason</b></label></b>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" name="reason"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Period of Exeat( days )</b></label></b>
                                        <div class="col-md-12">
                                            <?php
                                            include('config1.php');
                                            $subdomain=$_SESSION['subdomain'];
                                            $sql="SELECT * FROM register WHERE subdomain='$subdomain'";
					
					$sql_run=mysqli_query($conn4,$sql);
						if(mysqli_num_rows($sql_run)>0){
						$row =mysqli_fetch_assoc($sql_run);
					        $maxperiod =$row["maxperiode"];
					        
                                            
                                           echo' <input type="number" name="period" min="1" max="'.$maxperiod.'" step="1" value="1">';
						}
                                            ?>
                                        </div>
                                    </div>
                                    
									<div class="form-group">
                                        <b><label class="col-md-12"><b>Destination:</b></label></b>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Koforidua" class="form-control form-control-line" name="destination">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button style="float:right;" class="btn btn-success"type="submit" name="submit">Send Request</button>
                                                          
								</div>
                                								</div>
                                </form>
								
							<?php
							 include ('view-list1.php'); 
							
							?>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
					
                        <div class="card">

                            
                        
                            
                            <div class="card-block">
                                
                            <form  action="issue.php" method ="post">          
	  
<?php

include ('config1.php');

$house= $_SESSION['house'];
$subdomain =$_SESSION['subdomain'];

echo ' <label class="col-md-12"><b>Approved Requests</b></label></b></br>';
		
		$query="SELECT* FROM $subdomain WHERE status='approved' AND house='$house'";
if($result=mysqli_query($conn2,$query)){
    if(mysqli_num_rows($result)>0){
        	
	while($row=mysqli_fetch_assoc($result))
	{

		echo
		'<tr style="">
                                            
                                                
												
                                                   <h5> <input type="checkbox" value="'.$row["name"].'" name="name"/> ' .$row["name"].'</h5><small class="text-muted">'.$row["form"].'</small></br><small> Approval Date : </small><small class="text-muted">'.$row["issuedate"].'</small>
                                                    
                                                
                                               </br><input class="btn btn-success" type="submit" value="Issue" name="issue"/></tr><hr>';
                                               
	}
	
    }
    else{
        echo '<center>No approved requests found</center>';
    }
}

?>
</form>
<form method="POST">
<?php
$query="SELECT* FROM $subdomain WHERE status='disapproved' AND house='$house'";
$result=mysqli_query($conn2,$query);


    if(mysqli_num_rows($result)>0){
        	echo ' <label class="col-md-12"><b>Disapproved Requests</b></label></b>';
	while($row=mysqli_fetch_assoc($result))
	{

		echo
		'<tr style="">
                                            
                                                
												
                                                   <h5> <input type="checkbox" value="'.$row["name"].'" name="name[]"/> ' .$row["name"].'</h5><small class="text-muted">'.$row["form"].'</small>
                                                    
                                                
                                               </tr><hr>';
	}
	echo '<input class="btn btn-danger" type="submit" name="delete" value="Delete"/>';
    }
    

	    
	

?>
  
  </form>                                    
							
					<?php
					include ('issue.php');
					?>		
                        </div>
                    </div>
                </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
			 <?php
if(isset($_POST['logout']))
	
	{
		session_unset();
		session_destroy();
		header('location:index.php');
	}

?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
               ExeatLog © 2019 </br>Powered by Jabensoft Corporation
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
