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
    <title>ExeatLog: Master Add Student</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <script src="swal.js"></script>
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
#import{
    height: 50px;
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
        <header  class="topbar">
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
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="exeat-log.php"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item hidden-sm-down">
                            <form class="app-search p-l-20">
                                <input type="text" class="form-control" placeholder="Search for..."> <a class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <li style="width:auto;" class="nav-item dropdown">
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
        <aside  class="left-sidebar">
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Add A Student</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="exeat-log.php">Home</a></li>
                            <li class="breadcrumb-item active">Manage Students</li>
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
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        
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
                                <input type="text" class="form-control" placeholder="Search for..." style="width:inherit;" name="search"> <button class="ti-search" style="background:none; border:none;" name="searchIt"></button>
                             <b><label class="col-sm-6"><b>Select A Student</b></label></b>
                                <div class="col-sm-12">
                                            <select multiple  class="form-control form-control-line" name="student">
                                               <?php
											   include('image.php');

                                            ?>
											
											</select>
											
											
											
                                        </div>
							<button style="margin-top : 5px;" type="submit" id="submit" name="print" class="btn btn-info" data-loading-text="Loading...">Generate Exeat Slip</button>
							<a style="float:right; padding-top:20px;" class="fa fa-print" href="printslip.php">Print</a>
                            </form>
               
                                    </div>
  </center>

</div>
</form>


										</div>
						   
                                    
                                </center>
                    </div><br />
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <form class="form-horizontal form-material"  method="POST" >
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Name of Student</b></label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Tseh Ebenezer" class="form-control form-control-line" name="name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12"><b>Form of Student</b></label>
                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="form" required>
                                      <option>Form 1</option> 
									 <option>Form 2</option>
									<option>Form 3</option>									 
									  </select>
										</div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Parent/ Gaurdian's Phone</label>
                                        <div class="col-md-12">
                                            <input type="phone" minlength="13" maxlength="13" placeholder="+233243545678" class="form-control form-control-line" name="number" required>
                                        </div>
                                    </div>
 <div class="form-group">
                                        <label class="col-md-12"><b>Track</b></label>
                                        <div class="col-md-12">
                                            <select class="form-control form-control-line" name="track" required>
                                      <option>None</option> 
									 <option>Green</option>
									<option>Gold</option>									 
									  </select>
										</div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input class="btn btn-success" type="submit" name="submit_btn" value="Add Student">
                                        </div>
                                    </div>
                                </form> </br> 
                                <?php
								include('house_mem.php');
								?>
								<form class="form-horizontal form-material" method="post" name="upload_excel" enctype="multipart/form-data">
				
						<legend>Import CSV/Excel file</legend>
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="form-group">
								<input type="file" name="file" id="file" accept=".csv" class="input-large" required>
							<button style="margin-top : 5px;" type="submit" id="submit" name="Import" class="btn btn-info" data-loading-text="Loading...">Upload</button>

							 <a style="margin-top : 5px; float:right;" title="download sample Spreadsheet file  " class="btn btn-info" href="Student's_records.csv" download> Download</a>

						
							</div> 
						</div>
						
						
							
							
							
							
						
				
				</form>
				<?php
		        include ('import.php');
			
   ?>
                            </div>
                        </div>
                    

		
		
		
				
                       
             </div>
                    <!-- Column -->
                </div><br/>
				 <div class="card">
                            <div class="card-block">
                                
                              <h4 class="card-title m-t-10">Edit Student's Profile</h4>
                                   
                                   <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
    <thead>
     <tr>
      <th width="1%"></th>
      <th width="25%">Name</th>
      
      <th width="5%">Form</th>
	   <th width="5%">Track</th>
      <th width="15%">Phone</th>
     
	  
     </tr>
    </thead>
    <tbody id="employee_data">
        
    </tbody>
	
   </table>
   <a href="full-list.php"><label class='breadcrumb-item' style="float:right;"> View full list</label></a>
   	</div>
<form method="POST">
    <div class="form-group">
<select  name="class"  class="form-control form-control-line" style="float:right;">
                                    <option>Form 1</option>
                                    <option >Form 2</option>
                                    <option >Form 3</option>
                                    
                                </select>
    <button type="submit" name="deleteall" style="float:right; margin-top: 5px; margin-bottom: 10px;" >Delete All</button>
                                </div>
	
	</form>    
	
		<?php
	if(isset($_POST['deleteall']) && isset($_POST['class'])){
	    include('config1.php');
		$class =$_POST['class'];
		$subdomain =$_SESSION['subdomain'];
		$house =$_SESSION['house'];
		
	
		 
		
		$query="DELETE FROM `$subdomain$house` WHERE form='$class'";
		$query_run =mysqli_query($conn1,$query);
		if($query_run){
		    echo 'Success';
		}
		else{
		    echo 'Error';
		}
		
		}
		       
	
		
		
	
	?>
	

<form method="POST">
	
	<div class="form-group">
<label style="margin-top:20px;">Change From</label>
<select class="form-control form-control-line" name="class" >
                                    <option>Form 1</option>
                                    <option >Form 2</option>
                                    <option >Form 3</option>
                                    
                                </select>
                                </div>
								<label>To:    </label>
								<div class="form-group">
<select class="form-control form-control-line" name="class_new" >
                                    <option>Form 1</option>
                                    <option >Form 2</option>
                                    <option >Form 3</option>
                                    
                                </select>
                                	<button type="submit" name="change" style="float:right; margin-top:5px;" >Change</button>
                                </div>

	</form>    
	<?php
	if(isset($_POST['change'])){
		$class =$_POST['class'];
		$class_new =$_POST['class_new'];
		$subdomain =$_SESSION['subdomain'];
		$house =$_SESSION['house'];
		$query="UPDATE $subdomain$house SET form='$class_new' WHERE form ='$class'";
		$query_run =mysqli_query($conn1,$query);
		if ($query_run){
			
			echo '<b>Changes Saved</b>';
		}
		else{
			echo '<b>Enable to save changes</b>';
		}
	}
	?>

                                    </div>
                                </center>
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
    <!-- Modal -->
<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" aria-hidden = "true">
   
   <div class = "modal-dialog">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <h4 class = "modal-title">
               Customer Detail
            </h4>

            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
               ×
            </button>
         </div>
         
         <div id = "modal-body">
            Press ESC button to exit.
         </div>
         
         <div class = "modal-footer">
            <button type = "button" class = "btn btn-default" data-dismiss = "modal">
               OK
            </button>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
   
</div><!-- /.modal -->
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
		
     var html_data = '<tr><td><form method="post"><button class="fa fa-window-close-o" type="submit" style="background:none; border:none; " value="'+data[count].name+'" name="remove"></button></form></td>';
     html_data += '<td data-name="name" class="name" data-type="text" data-pk="'+data[count].name+'">'+data[count].name+'</td>';
     html_data += '<td data-name="form" class="form" data-type="text" data-pk="'+data[count].name+'">'+data[count].form+'</td>';
      html_data += '<td data-name="track" class="track" data-type="text" data-pk="'+data[count].name+'">'+data[count].track+'</td>';
     html_data += '<td data-name="number" class="number" data-type="text" data-pk="'+data[count].name+'">'+data[count].number+'</td></tr>';
    
	  
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
  title: 'Name of Student',
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
  selector: 'td.form',
  url: "update.php",
  title: 'Form',
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
  selector: 'td.track',
  url: "update.php",
  title: 'Track',
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
  selector: 'td.number',
  url: "update.php",
  title: 'Parent Number',
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
	<?php
	if(isset($_POST['remove'])){
	    include('config1.php');
		$name=$_POST['remove'];
		$subdomain =$_SESSION['subdomain'];
		$house =$_SESSION['house'];
		
	
		 
		
		$query="DELETE FROM `$subdomain$house` WHERE name='$name'";
		$query_run =mysqli_query($conn1,$query);
		if($query_run){
		    echo 'Success';
		}
		else{
		    echo 'Error';
		}
		
		}
		       
	
		
		
	
	?>