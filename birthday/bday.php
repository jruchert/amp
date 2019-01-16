<html>
 <head>
 
  <title>Birthday App</title>
 </head>
 <body>
 
 <?php 
 
 $birthday = "1970-07-24";
 $todaysdate =  date("l, Y/m/d");
 $diff = date_diff($mybday, $today);

 echo "<b>Jeremy was born on: </b>" .  $birthday;
 
 echo " <br> <b>It is: </b>" .  $todaysdate; 
 
 echo $diff->format("%a");
 
 
 ?>
 
 </body>
 
 </html>
