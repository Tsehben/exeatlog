<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Exeatlog:Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/sourcesanspro-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
<link rel='stylesheet prefetch' href='https://raubarrera.neocities.org/cdpn/style.css'>

      <link rel="stylesheet" href="css/style1.css">
</head>
<body class="form-v8">
	<div class="page-content">
	<div class="form-v8-content">
			<div class="form-left">
				<img src="images/form-v8.jpg" alt="form">
			</div>
			<div class="form-right">

				<div class="tab">
					
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Change Password</button>
				
				</div>
				<form class="form-detail" method="post" action="forgotp.php">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="code" id="full_name" class="input-text" required>
								<span class="label">Enter Code</span>
		  						<span class="border"></span>
							</label 
						</div>
						
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">New Password</span>
								<span class="border"></span>
							</label>
						</div>
						
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="cpassword" id="password" class="input-text" required>
								<span class="label">Confirm New Password</span>
								<span class="border"></span>
							</label>
						</div>
						</br>
						<div class="form-row-last">
							<input type="submit" name="change" class="register" value="Save Changes">
							
						</div>
						
					</div>
				</form>
				
				<?php
				include ('indexp.php');
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