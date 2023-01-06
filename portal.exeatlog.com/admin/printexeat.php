<! Doctype html>


<head>
    <link rel="icon" type="image/png" sizes="16x16" href="favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
 <script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
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
       text-align : center;

	   	   font-family:Andalus, AngsanaUPC, "Arabic Typesetting";
		  
		
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
	  width : 150px;
	  height: 150px;
  }
  
	  .code{
		  font-size:16x;
	   font-family:Tahoma,geneva,elephant,AngsanaUPC;
		  float:right;
		  margin-right : 15px;
		    margin-top : 8px; 
		  
	  }
	  .exeat{
           
	    
	    
	      
	  }
	 .pic{
	       
	        float :right;
	        
	     
	 }
	  
	  .photo{
	      margin-right : 50px;
	      margin-bottom : 50px;
	       float :right;
	      
	      height:200px;
	      width:190px;
	  }
	  @media print
{
.noprint {display:none;}
}
  @media print {
  @page { margin: 0; }
  body { margin: 1.6cm; }
}
@media print {
        div.foot {
            position: fixed;
            top: 0;
           
        }
        .foot{
             font-family:Andalus, AngsanaUPC, "Arabic Typesetting";
             float:right;
             text-decoration:italic;
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
$schname=$_SESSION['schoolname'];
$schoolname=strtoupper($schname);
$add=$_SESSION['address'];
$address=strtoupper($add);
$logo=$_SESSION['logo'];
$email = $_SESSION['email'];
$photo =$_SESSION['photo'];
$house = $_SESSION['house'];
echo "<div id='exeat' class='slip'><div class='head1'><img class='logo' src='data:image;base64,".$logo."'><span class='school'>$schoolname</br>$address</br>$email</span> <span class='code'> EXEAT ID:<b>".$code."</b></span></div><div  class='body'><center><p class='header'>EXEAT SLIP</p></center> <img class='photo' src='data:image;base64,".$photo."'><div class='exeat'><span class='labels'>Name Of Student:       </span>  ".'<span class="lab">'.$name.'</span>'."</br></br>".
"<span class='labels'>Destination:   </span><img src='location.png' width='25' height='25'/><span class='lab'>".$destination."</span></br><br><span class='labels'>House:   </span><span class='lab'>".$house."</span><br><br><span class='labels'>Reason for exeat :     </span>  ".'<span class="lab">'.$reason .'</span>'."</br><span class=labels>Duration:</span> <img src='clock.png' width='25' height='25'/>   ".'<span class="lab">'.$period." hour(s)</span></div></div><br/><br/><center><div class='bottom'><span class='footer'>This exeat was issued on ".$issuedate."</br>The owner of this slip is permitted to leave school campus.</span></div></center></div>";
echo'<div style="float:right;" class="foot">Powered by Jabensoft</div>';

?>

<button onclick="printContent('exeat')" class="noprint">Print</button>
<a class="noprint" href='issue-exeat.php'>Back</a>



</body>



</html>
		