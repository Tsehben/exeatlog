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
      <th width="10%">ID</th>
      <th width="40%">Name</th>
      <th width="10%">Gender</th>
      <th width="30%">Designation</th>
      <th width="10%">Age</th>
     </tr>
    </thead>
    <tbody id="employee_data">
    </tbody>
   </table>
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
     html_data += '<td data-name="gender" class="gender" data-type="select" data-pk="'+data[count].id+'">'+data[count].gender+'</td>';
     html_data += '<td data-name="designation" class="designation" data-type="text" data-pk="'+data[count].id+'">'+data[count].designation+'</td>';
     html_data += '<td data-name="age" class="age" data-type="text" data-pk="'+data[count].id+'">'+data[count].age+'</td></tr>';
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
  title: 'Employee Name',
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
  selector: 'td.gender',
  url: "update.php",
  title: 'Gender',
  type: "POST",
  dataType: 'json',
  source: [{value: "Male", text: "Male"}, {value: "Female", text: "Female"}],
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#employee_data').editable({
  container: 'body',
  selector: 'td.designation',
  url: "update.php",
  title: 'Designation',
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
  selector: 'td.age',
  url: "update.php",
  title: 'Age',
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
