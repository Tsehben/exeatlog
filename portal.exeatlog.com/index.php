<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Exeatlog:Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" >
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">

	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
<link rel='stylesheet prefetch' href='https://raubarrera.neocities.org/cdpn/style.css'>

      <link rel="stylesheet" href="css/style1.css">
</head>
<body class="form-v8">
	<div class="page-content"  >
	<div  class="form-v8-content" height="100%" width="100%">
			<div class="form-left">
				<img style="width:100%; height:100%;" src="images/leftback.jpg"  />
			</div>
			<div class="form-right">

				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Admin  </button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Housemaster</button>
					</div>
				</div>
				<form class="form-detail"  method="post">
				    <center><img style="border-radius:100%;"src="images/logo.jpg" alt="form" width="40%" height="40%"/> </br><img  style="width:200px;" src="images/trademark.png" /></center>
				 
				    </br></br>
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="full_name" class="input-text" >
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" >
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						</br>
						<div class="form-row-last">
							<input type="submit" name="login" class="register" value="Sign In">
							<button type="submit" style="background:none; color:white; border:none;" name="forget">I forgot my password?</button>
						</div>
						
					</div>
				</form>
				<?php
				include('indexp1.php');
				?>
				<form class="form-detail" method="post">
				      
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="full_name_1" class="input-text" >
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password_1" class="input-text" >
								
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
	<div class="form-row">
	
	<div class="center-on-page">
  
  
  
</div>
  
  
	
	
	</div>
	
  					</br>
						<div class="form-row-last">
							<input type="submit" name="login1" class="register" value="Sign In"/>
							<button type="submit" style="background:none; color:white; border:none;" name="forget1"> I forgot my password?</button>
							

						</div>
					</div>
				</form>
				<?php
				include('indexp.php');
				?>
			</div>
		</div>
	</div>


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
</body>
</html>