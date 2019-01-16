<html>
 <head>
 
  <title>Birthday App</title>
 </head>
 <body>
 
 <?php 
 
 $birthday = date_create("1970-07-24");
 $todaysdate =  date_create(date(" l, Y/m/d"));
 $diff = date_diff($birthday,$todaysdate);

 
 echo $diff->format("%a");
 
 echo  $birthday;
 
 echo  $todaysdate; 
 
 
 
 
 ?>
 
 </body>
 
 </html>
