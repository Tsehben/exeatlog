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
    <title>ExeatLog:Master's Dashboard</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="css/design.css">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>

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
                     <ul style="width:auto;"  class="navbar-nav my-lg-0">
                          
                        <li class="nav-item dropdown">
                            <?php echo '<img  class="profile-pic m-r-5" src="data:image;base64,'.$_SESSION['pic'].'">'; ?>
                            <a  onclick="toggleNavPanel('sections_panel')" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?> <span id="navarrow">&#9662;</span></a>
                                       	
									  <ul  style="width:100%;"  role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn" >
				 
	



									   <?php
									   
									   $string =$_SESSION['username'];
									   $firstCharacter =strtoupper($string[0]);
									   
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
                </nav>          <!-- End Sidebar navigation -->
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
                                <div class="form-group">
                                <form  class="form-horizontal form-material" method="post" name="upload_excel" enctype="multipart/form-data" >
                                <button type="submit" class="btn pull-left btn-info"  name="upload" id="submit"> Import Records</button><a style="margin-top:20px; margin-left:10px;" title="download sample records  " href="Exeat records.csv" download> <i class="fa fa-download"></i></a>
                               </br></br>
                                	<div class="form-group">
                                	    <input style="float:left;" type="file" name="file" id="file" accept=".csv" class="input-large" required>
                                 
                                	    </div>
                                
                                </form>
                                <?php
                                include('exeat-import.php');
                                ?>
                                </div>
                                
                               
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
                             				<center><span class="breadcrumb-item active"><b>Weekly Record Feeds</b></span></center></br>
	<div id="swapper-first">
	     <div class="table-responsive m-t-40" >
	           <label class="breadcrumb-item active"><b>Pending Exeats</b></label></br></br>
	    <table>
               <tbody>                    
                                       
	  <form method= "POST">
<?php
include ('config1.php');

$house= $_SESSION['house'];
$subdomain =$_SESSION['subdomain'];

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


?>

</form>
<?php
if(isset($_POST['submit'])&& isset($_POST['name'])){
												$subdomain =$_SESSION['subdomain'];

												
									    foreach ($_POST['name'] as $names){
								
											
										$query ="UPDATE $subdomain SET stat='checked' WHERE name='$names' AND stat='pending' AND house='$house'";
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
                                </div>
</div>
<div id="swapper-other" style="display:none;">
 <div class="table-responsive m-t-40" >
	           <label class="breadcrumb-item active">Incoming Students</label></br></br>
	    <table>
               <tbody>                    
             

</tbody>
</table>
                                </div>
</div>
<p style="text-align:center; font-weight:bold; font-style:italic;">
<a href="javascript:SwapDivsWithClick('swapper-first','swapper-other')"></a>
</p>
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
                         
                         	<script type="text/javascript">
		function openCity(evt, cityName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}

		// Get the element with id="defaultOpen" and click on it
		document.getElementById("defaultOpen").click();
	</script>
	<script>
					$('.none-sq-price').hide();
$('.change-price').on('click',
  function() {
    $('.sq-price, .none-sq-price').toggle(200);
  }
);
					</script>
					
					<script type="text/javascript">
function SwapDivsWithClick(div1,div2)
{
   d1 = document.getElementById(div1);
   d2 = document.getElementById(div2);
   if( d2.style.display == "none" )
   {
      d1.style.display = "none";
      d2.style.display = "block";
   }
   else
   {
      d1.style.display = "block";
      d2.style.display = "none";
   }
}
</script>
<script>
function toggleNavPanel(x){
    var panel = document.getElementById(x), navarrow = document.getElementById("navarrow"), maxH="300px";
    if(panel.style.height == maxH){
        panel.style.height = "0px";
        navarrow.innerHTML = "&#9662;";
    } else {
        panel.style.height = maxH;
        navarrow.innerHTML = "&#9652;";
    }
}
</script>
</body>

</html>
