<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
include ('config1.php');
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>ExeatLog Admin  -Manage School Security </title>
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
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
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
        <aside style="position :fixed;" class="left-sidebar">
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
                        <h3 class="text-themecolor m-b-0 m-t-0">School Security</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Manage Security</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Security Personnel List</h4>
                                
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Name of Personnel</th>
                                                
                                                <th>Mobile Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <form  method="POST">
											<?php
									include ('view-secure.php');
											?>
											<input class="btn btn-success" type="submit" name="submit" value="Activate"/>
											
											<?php
											include ('security.php');
											?>
											</tbody>
                                    </table>
									
									<button  type="submit" style="float:right" name="delete"><i class="fa fa-trash-o"></i></button>
									</form>
									<?php
									include('delete.php');
									
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
 <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-block">
                                
                                    <h4 class="card-title m-t-10">Active Security</h4>
                                
								<form method="POST" >	
                                    <?php
					include('active-secure.php');										
									?>
                                		</br>	</br>	<input class="btn btn-success" type="submit" name="deactivate" value="Deactivate"/></form>				
                            </div>
							
                        </div>
						
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material" method="POST">
								 <h4 class="card-title m-t-10">Add a Security Personnel</h4></br>
                                    <div class="form-group">
                                        <label class="col-md-12">Name of Personnel</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Baba Yasifu" class="form-control form-control-line" name="name">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-12">Security's Phone</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="+233 435 4567" class="form-control form-control-line" name="number">
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" name="submit_btn">Add Security</button>
                                        </div>
                                    </div>
                                </form>
								<?php
								include('securea.php');
								?>
                            </div>
                        </div>
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
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
