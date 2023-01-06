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
            
        }
  
  </style>
  
<body>

<?php
session_start();
$name=$_SESSION['name'];

$schname=$_SESSION['schoolname'];
$schoolname=strtoupper($schname);
$add=$_SESSION['address'];
$address=strtoupper($add);
$logo=$_SESSION['logo'];
$email = $_SESSION['email'];
$photo =$_SESSION['photo'];


echo "<div id='exeat' class='slip'><div class='head1'><img class='logo' src='data:image;base64,".$logo."'><span class='school'>$schoolname</br>$address</br>$email</span> <span class='code'> EXEAT ID:...........................<b></span></div><div  class='body'><center><p class='header'>EXEAT SLIP</p></center> <img class='photo' src='data:image;base64,".$photo."'><div class='exeat'><span class='labels'>Name Of Student: ................................................       </span></br></br><span class='labels'>Destination:  ...............................</span><img src='location.png' width='25' height='25'/> ".'<span class="lab"></br><br><span class="labels">Reason for exeat : ................................................................</span></br></br><span class=labels>Duration:</span> <img src="clock.png" width="25" height="25"/> </div></div><br/><br/><center><div class="bottom"><span class="footer">This exeat was issued on..........................................</br>The owner of this slip is permitted to leave school campus.</span></div></center></div>';


?>

<button onclick="printContent('exeat')" class="noprint" >Print</button>
<a class="noprint" href="add-house.php">Back</a>

<div style="float:right;" class="foot">Powered by Jabensoft</div>
</body>



</html>
		 
		 