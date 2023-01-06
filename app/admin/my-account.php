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
    <title>Exeatlog Admin-Account Settings</title>
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
  width: 100%;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
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
  
  
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
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
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  max-width:auto;
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
    margin-right:216px;
    margin-top:20px;
}

</style>
<script>
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
        <aside style="position:fixed;"  class="left-sidebar">
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Account Settings </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Account Settings</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">
                        <form method="post">
                            <select class="custom-select pull-right" name="session">
                                 <optgroup label="Semester">
                                 <option>semester 1</option>
                                 <option>semester 2</option>
                                 </optgroup>
                                 <optgroup label="Term">
                                 
                                 <option>term 1</option>
                                 <option>term 2</option>
                                 <option>term 3</option>
                                </optgroup>
                                </select>
                        <button style="margin-right:5px;" type="submit" class="btn pull-right hidden-sm-down btn-info" name="start">Start </button>
                        </form>
                        <?php
                        include('config1.php');
                        $subdomain =$_SESSION['subdomain'];
						if(isset($_POST['session'])){
                        $session=$_POST['session'];
                        if(isset($_POST['start'])){
                        $query="UPDATE register SET session='$session' WHERE subdomain='$subdomain'";
                    $query_run =mysqli_query($conn4,$query);
                        
                            if($query_run){
                                echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Session Started!", "success");';
  echo '}, 1000);</script>'; 
                            }
                            else{
                                 echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to start a new session!", "error");';
  echo '}, 1000);</script>'; 
                            }
                                
                            }
                        }
						
						$query="SELECT * FROM register WHERE subdomain='$subdomain'";
                    $query_run =mysqli_query($conn4,$query);
                        if(mysqli_num_rows($query_run)>0){
						while($row=mysqli_fetch_assoc($query_run))
						$session=$row["session"];
					echo'<strong>Current Session: '.$session.'</strong>';
						}
						?>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material"  method="POST">
								 <h4 class="card-title m-t-10">Change Password</h4></br>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Old Password</b></label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="Type in your Current Password*" class="form-control form-control-line" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>New Password</b></label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="Type in your New password*" class="form-control form-control-line" name="new_password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Confirm Password</b></label>
                                        <div class="col-md-12">
                                            <input type="password" placeholder="Confirm your New Password*" class="form-control form-control-line" name="cpassword">
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit" name="submit">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
								<?php
								
								include('acc_set.php');
								?>
								
                            </div>
                        </div>
                    
					
					<div class="card">
                            <div class="card-block">
                                                  
                              <h4 class="card-title m-t-10">Edit School Profile</h4>
                                   <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
    <thead>
     <tr>
         <th width="5%">School Id</th>
      <th width="20%">Name of School</th>
      <th width="15%">School's Address</th>
            <th width="5%">Session</th>
<th width="10%">Max. period of Internal exeats(hours)</th>
      <th width="10%">Email of school</th>
          <th width="5%">Admin's Phone</th>
            <th width="10%">Max period external exeats(days)</th>
        
      <th width="5%">Max no. of exeats</th>
        
     </tr>
    </thead>
    <tbody id="employee_data">
    </tbody>
   </table>
                                </div>
                                   <form method="POST" enctype="multipart/form-data">   
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Upload Logo</b></label>
                                        <div class="col-md-12">
                                            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                              <div class="file-upload">
                                                
                                                   <div class="image-upload-wrap">
                                                 <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="image"/>
                                             <div class="drag-text">
                                                    <h3>Click to change logo</h3>
                                                     </div>
                                                    </div>
                                                      <div class="file-upload-content">
                                                   <img class="file-upload-image" src="#" alt="your image" />
                                                   <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="btn btn-danger">Remove <span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>

                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <center><button class="btn btn-success" type="submit" name="upload">Update</button></center>
                                        </div>
                                    </div>
                                </form>
                                
                                <?php
                                include('logo.php');
                                ?>
                            </div>
                        </div>
					</div>
               
                </div>
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
    <!-- google maps api -->
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="../assets/plugins/gmaps/gmaps.min.js"></script>
    <script src="../assets/plugins/gmaps/jquery.gmaps.js"></script>
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
   url:"fetch1.php",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
    for(var count=0; count<data.length; count++)
    {
    var html_data = '<tr><td>'+data[count].subdomain+'</td>';
     html_data += '<td data-name="name" class="name" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].name+'</td>';
     html_data += '<td data-name="address" class="address" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].address+'</td>';
  html_data += '<td data-name="session" class="session" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].session+'</td>';
     html_data += '<td data-name="maxperiodi" class="maxperiodi" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].maxperiodi+'</td>';
     html_data += '<td data-name="email" class="email" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].email+'</td>';
     html_data += '<td data-name="phone" class="phone" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].phone+'</td>';
     html_data += '<td data-name="maxperiode" class="maxperiode" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].maxperiode+'</td>';
     html_data += '<td data-name="maxexeat" class="maxexeat" data-type="text" data-pk="'+data[count].subdomain+'">'+data[count].maxexeat+'</td></tr>';
 
     
     $('#employee_data').append(html_data);
    }
   }
  })
 }
 
 fetch_employee_data();
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.name',
  url: "update1.php",
  title: 'Name of School',
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
  selector: 'td.address',
  url: "update1.php",
  title: 'School Address',
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
  selector: 'td.maxperiodi',
  url: "update1.php",
  title: 'Max Period of Internal Exeats ',
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
  selector: 'td.maxperiode',
  url: "update1.php",
  title: 'Max Period of Extenal Exeats',
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
  url: "update1.php",
  title: 'Email of School',
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
  selector: 'td.phone',
  url: "update1.php",
  title: 'Admin Phone Number',
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
  selector: 'td.maxexeat',
  url: "update1.php",
  title: 'Max No. of Exeats',
  type: "POST",
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
});
</script>


