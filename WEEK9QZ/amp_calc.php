<?php
 
 $number_1 = filter_input(INPUT_POST, 'number_1', 
            FILTER_VALIDATE_INT);
 $number_2 = filter_input(INPUT_POST, 'number_2', 
            FILTER_VALIDATE_INT);
   if(!is_numeric($number_1)||!is_numeric($number_2)) {
     include 'amp_index.php';
     }  
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
            return "Sorry No command found";
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
        <label>The Answer is:</label>
        <?php echo $result; ?><br>
    </main>
</body>
</html>
