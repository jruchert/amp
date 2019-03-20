<?php
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', 
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', 
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', 
            FILTER_VALIDATE_INT);
       

    // validate investment
    if ($investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; 
    } else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; 
    // validate interest rate
    } else if ( $interest_rate === FALSE )  {
        $error_message = 'Interest rate must be a valid number.'; 
    } else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; 
    // validate years
    } else if ( $years === FALSE ) {
        $error_message = 'Years must be a valid whole number.';
    } else if ( $years <= 0 ) {
        $error_message = 'Years must be greater than zero.';
    } else if ( $years > 30 ) {
        $error_message = 'Years must be less than 31.';
    // set error message to empty string if no invalid entries
    } else {
        $error_message = ''; 
    }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value += $future_value * $interest_rate *.01;
    }
    // calculate the Net Present Value
    $x = $investment;
    $i = $interest_rate;
    $t = $years;
    $npv = $x / pow(1+$i, $t);   
    // $exp = currency decimal places - 0 for Yen/Won, 2 for most others 
    // $dp = ceil(0 - log10($n)) + $sigdigits; 
     //$display = number_format($amount, ($exp>$dp)?$exp:$dp);
     
    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
    $npv_f = '$'.number_format( round($npv, 2))  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>
      <?php echo '<center><img height="120px" width="350px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZ8gEK8Mv4xH-kVXj9vNq5tpYBV1e1QwUwLyiIO1Xhzf1ZtXHk"/> </center></br>'; ?>

        <fieldset><label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>
        </fieldset>
        </br>
        </br> 
                 <?php echo '<center><img height="180px" width="280px" src="http://www.assignmentpoint.com/wp-content/uploads/2015/04/net-present-value.png"/></center> </br>'; ?>
        <fieldset>
        <label>Net Present Value:</label>
        <span><?php echo $npv_f; ?> </span>
        </br>
        <label>What is this?</label>
        <span> <a href="https://en.wikipedia.org/wiki/Net_present_value">NPV on Wikipedia</a></span>
        </br></fieldset>
          <footer>
          <label>Want to Go Again?</label>
       <p><b><a href="index.php">Click Here</a></b></p>
    <p><b>&copy; <?php echo date('Y'); ?> AMP, Inc.</b></p>
</footer>
    </main>
</body>
</html>