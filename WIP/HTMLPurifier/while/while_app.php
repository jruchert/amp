
<?php
	
@$num=$_GET['num'];
	
$sum=0;
	
$rem=0;
	
$len=0;
	
while((int)$num!=0)
	 
{
	   
$len++;
	   
$rem=$num%10;
	  
$sum=$sum+$rem;
	  
 $num=$num/10;
	   
}	
	
echo "Length of given digit= " . $len."<br/>";
	
echo "Sum of given digit= " . $sum;
  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Digits</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
        <h1>Digits</h1>
        <form action="while_app.php" method="post">
   
	<label>Enter Your digit</label> 
  <input type="text" name="num"><br/>
	  
 <input type="submit" value="find the sum">
	
</form>	
            
    </main>
</body>

