
<html>
 <head>
  <title>Live Inline Update data using X-editable with PHP and Mysql</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script> 
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
  
 </head>
 <body>
  <div class="container">
   <h1 align="center">Live Inline Update data using X-editable with PHP and Mysql</h1>
   <br />
   <table class="table table-bordered table-striped">
    <thead>
     <tr>
      <th width="5%">ID</th>
      <th width="40%">Name</th>
      <th width="25%">Password</th>
      <th width="20%">House</th>
      <th width="10%">Phone</th>
     </tr>
    </thead>
    <tbody id="employee_data">
    </tbody>
   </table>
   </div>
 </body>
</html>



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
     var html_data = '<tr><td>'+data[count].id+'</td>';
     html_data += '<td data-name="name" class="name" data-type="text" data-pk="'+data[count].id+'">'+data[count].name+'</td>';
     html_data += '<td data-name="password" class="password" data-type="text" data-pk="'+data[count].id+'">'+data[count].password+'</td>';
     html_data += '<td data-name="house" class="house" data-type="text" data-pk="'+data[count].id+'">'+data[count].house+'</td>';
     html_data += '<td data-name="phone" class="phone" data-type="text" data-pk="'+data[count].id+'">'+data[count].phone+'</td></tr>';
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
  title: 'Name of Housemaster',
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
  selector: 'td.password',
  url: "update.php",
  title: 'Password',
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
  selector: 'td.house',
  url: "update.php",
  title: 'House',
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
  selector: 'td.phone',
  url: "update.php",
  title: ' Phone Number',
  type: "POST",
  dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
   var regex = /^[0-9]+$/;
   if(! expression.test(value))
   {
    return 'Numbers only!';
   }
  }
 });
 
 
 
});
</script>
