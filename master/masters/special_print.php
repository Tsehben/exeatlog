<! Doctype html>


<head>

 
 <script>
function printContent(exeat){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(exeat).innerHTML;
	document.body.InnerHTML = printcontent;
	window.print();
		document.body.InnerHTML = restorepage;
	
}

</script>
  </head>
  <style>
  
  body{

  margin-left:15%;
	  margin-right :15%;
  }
  .labels{
	  color : #207cca;
	  font-family:Verenda,Tahoma,Calibri;
	  font-style : bold;
  }
  .lab{
	  color : red;
	  font-family:Calibri,Comic Sans,Arial Black;
	  font-size : 20px;
  }
 .header{
	   font-size:25px;
	   font-family:Tahoma,geneva,elephant;
	   text-align : center;
	   margin-right : 170px;
	
   }
   .code{
	   
	   float:right;
   }
   .slip{
	   width:100%;
border:3px solid #207bba;  
border-radius : 10px; 
margin : 10px;
   }
   .footer{
	   
	   	   font-family:Andalus, AngsanaUPC, "Arabic Typesetting";
		   margin-right : 10px;
   }
  .school{
	  font-size:16x;
	   font-family:Tahoma,geneva,elephant,AngsanaUPC;
	   float:left;
	   margin-top : 8px; 
	
	 
  }
  .head1{
	  width : 100%;
	  height : 80px;
	  margin : 8px;
	 
  }
  .body{
	  width : 100%;
	  margin:10px;
  }
  .logo{
	  float: left;
  }
  .print{
	  background:white;
	  border:0px;
	  }
	  .code{
		  font-size:16x;
	   font-family:Tahoma,geneva,elephant,AngsanaUPC;
		  float:right;
		  margin-right : 15px;
		    margin-top : 8px; 
		  
	  }
  
  </style>
  
<body>
<?php
session_start();
$name=$_SESSION['students'];
$reason=$_SESSION['reason'];
$issuedate=$_SESSION['issuedate'];
$period=$_SESSION['period'];
$code=$_SESSION['code'];
$reason =$_SESSION['reason'];
$destination= $_SESSION['destination'];

echo "<div id='exeat' class='slip'><div class='head1'><img class='logo' src='logo.png' width='120px' height='120px'><span class='school'>PRESBYTERIAN BOYS' SECONDARY SCHOOL, LEGON</br>P.O. BOX 98 LG,</br>ACCRA</span> <span class='code'> EXEAT ID:<b>".$code."</b></span></div><div  class='body'><center><p class='header'>EXEAT SLIP</p></center><span class='labels'>Name Of Student:       </span>  ".'<span class="lab">'.$name.'</span>'."</br></br>".
"<span class='labels'>Destination:   </span><img src='location.png' width='25' height='25'/> ".'<span class="lab">'.$destination.'</span>'."</br><br><span class='labels'>Reason for exeat issue:     </span>  ".'<span class="lab">'.$reason .'</span>'."</br><span class=labels>Duration:  </span> ".'<span class="lab">'.$period." days</span></br></br><center><span class='footer'>This exeat was issued on ".$issuedate."</br>The owner of this slip is permitted to leave school campus.</center></span></div></div>";
?>

<button onclick="printContent('exeat')" class="print" >Print</button>
<a href='masters_page.php'>back</a>


</body>



</html>
		 
		 