<?php 
    //set default value of variables for initial page load
    if (!isset($bday)) { $bday = ''; } 
?> 
<!DOCTYPE html>
<html>
<head>
    <title>Birthday Information</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <main>
    <h1>How many days have I been alive?</h1>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php } ?>
    <form action="bday.php" method="post">

        <div id="data">
            <label>What is your birthday?:</label>
            <input type="date" name="bday"
                   value="<?php echo htmlspecialchars($bday); ?>">
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"><br>
        </div>

    </form>
    </main>
</body>
</html>