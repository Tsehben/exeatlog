<html>
<head>
  <script src="swal.js"></script>

</head>
<html>

<?php
			  $conn = mysqli_connect("localhost","root","","test") or die("Unable to connect");
			 
			 
			  if(isset($_POST['post'])){
				  $name = $_POST['studentname'];
			  $faculty = $_POST['faculty'];
			  $comment = $_POST['comment'];
			  $time = mktime();
			  $photo=null;
					$query ="INSERT INTO comments VALUES('$name','$faculty','$time','$comment','$photo')";
					$query_run= mysqli_query($conn,$query);
					if ($query_run){
						if(getimagesize($_FILES['image']['tmp_name']) == TRUE ){
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
				
				
	
		$query ="UPDATE comments SET  photo ='$image' WHERE time='$time' ";
		$query_run= mysqli_query($conn,$query);
		if ($query_run){
			echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Comment Added!", "success");';
  echo '}, 1000);</script>'; 
		}
		else{
			echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to add Comment...", "error");';
  echo '}, 1000);</script>'; 
		
		}
		
			 }
					}
					else{
						echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Success!", "Comment Added!", "success");';
  echo '}, 1000);</script>';
					}
					}
					else{
						echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("Error!", "Unable to add Comment...", "error");';
  echo '}, 1000);</script>'; 
		 
					}	
			  }					
			  ?>