	<html>
<head>
  <script src="swal.js"></script>

</head>
<html>
	
	<?php
			$conn = mysqli_connect("localhost","root","","test") or die("Unable to connect");
			
			$query ="SELECT * FROM comments ORDER BY time DESC LIMIT 5";
			$query_run = mysqli_query($conn,$query);
			if(mysqli_num_rows($query_run) > 0){
				while($row = mysqli_fetch_assoc($query_run)){
					$name = $row['name'];
					$comment =$row['comment'];
					$faculty = $row['faculty'];
					$photo  = $row['photo'];
					
						
					echo '<div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url(data:image;base64,'.$photo.')">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>'.$comment.'</p>
                    <p class="name">'.$name.'</p>
                    <span class="position">'.$faculty.'</span>
                  </div>
                </div>
              </div>';
				}
				
			}
			
			?>