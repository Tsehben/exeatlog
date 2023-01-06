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
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-up')" id="defaultOpen">Step 1</button>
					</div>
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Housemaster</button>
					</div>
				</div>
				<form class="form-detail" action="indexp1.php" method="post">
					<div class="tabcontent" id="sign-up">
						<div class="form-row">
							<label class="form-row-inner">
							<span class="label">Payment Option</span>
							</label>							
							<select class="select">
								<option>Economy ($650/month)</option>
								<option>Premium ($750/month)</option>
								</select>
								
		  						
							
						</div></br>
						
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password" class="input-text" required>
								<span class="label">Password</span>
								<span class="border"></span>
							</label>
						</div>
						</br>
						<div class="form-row-last">
							<input type="submit" name="login" class="register" value="Sign In">
						</div>
					</div>
				</form>
				<form class="form-detail" action="indexp.php" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="username" id="full_name_1" class="input-text" required>
								<span class="label">Username</span>
		  						<span class="border"></span>
							</label>
						</div>
						
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="password" id="password_1" class="input-text" required>
								
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
							<input type="submit" name="login1" class="register" value="Sign In">
						</div>
					</div>
				</form>
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