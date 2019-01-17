
<?php

    // get the data from the form
    $bday = $_POST['bday'];
    //$bday = $_POST[0];
    // $whatsthis = filter_input(INPUT_POST, 'bday', FILTER_INPUT_EMAIL);
    // $whatsthat = filter_input(INPUT_POST, 'bday', FILTER_SANITIZE_SPECIAL_CHARS);    
        // var_dump($whatsthis);
        // var_dump($whatsthat);
     //var_dump($bday);
     //var_dump($_POST);

        $today = date_create(date("Y-m-d"));
        $bday_m = date_create($bday);
        $diff = date_diff($bday_m,$today);
   
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Alive Days</h1>

        <label>You have been alive:</label>
        <span><?php echo $diff->format("%a days"); ?></span>

    </main>
</body>
</html>