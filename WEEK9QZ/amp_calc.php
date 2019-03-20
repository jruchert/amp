<?php
 
 $number_1 = filter_input(INPUT_POST, 'number_1', 
            FILTER_VALIDATE_INT);
 $number_2 = filter_input(INPUT_POST, 'number_2', 
            FILTER_VALIDATE_INT);
   if(!is_numeric($number_1)||!is_numeric($number_2)) {
   include 'amp_index.php';
   exit("<center><b>Error. Please enter a real number!</b></center>");
     } 
     
// I had to write it this way --- it made sense to me, similair to what js or python is.   
$result = "";
class calculator
{
    var $number_1;
    var $number_2;

    function checkopration($method_calc)
    {
        switch($method_calc)
        {
            case 'Addition':
            return $this->number_1 + $this->number_2;
            break;

            case 'Subtraction':
            return $this->number_1 - $this->number_2;
            break;

            case 'Multiplication':
            return $this->number_1 * $this->number_2;
            break;

            case 'Division':
            return $this->number_1 / $this->number_2;
            break;

            default:
            return "<br>Sorry NO operator command found!";
        }   
    }
    function getresult($number_1, $number_2, $method_calc)
    {
        $this->number_1 = $number_1;
        $this->number_2 = $number_2;
        return $this->checkopration($method_calc);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['number_1'],$_POST['number_2'],$_POST['method_calc']);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>>My Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
  

    <main>
    <h1>Your Calculator Results!</h1>
    
        <fieldset><label>The Answer is:</label>
        <p><?php echo $result; ?><br></p>
       </br>
       </fieldset>
       
       
      <fieldset> <footer>
       <label>Want to Go Again?</label>
       <p><b><a href="amp_index.php">Click Here</a></b></p>
    <p></br><b>&copy; <?php echo date('Y'); ?> AMP, Inc.</b></p>
</footer></fieldset>
    </main>
</body>
</html>
