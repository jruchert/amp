<!DOCTYPE html>
<html>
<head>
    <title>My Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
     
    <h1>My Calculator</h1>
    <form action="amp_calc.php" method="post">

    <fieldset> 
    <legend>Your Number Inputs</legend>
        <label>Number to calculate:</label>
        <input type="text" name="number_1" value="" class="textbox">
        <br>

        <label>Number to calculate:</label>
        <input type="text" name="number_2" value="" class="textbox">
        <br>
    </fieldset>

    <fieldset>
    <legend>Method of Calculating</legend>

        <p>What do you want to do with your numbers?</p>
        <input type="radio" name="method_calc" value="Addition">
        Addition (+)<br>
        <input type="radio" name="method_calc" value="Subtraction">
        Subtraction (-)<br>
        <input type=radio name="method_calc" value="Multiplication">
        Multiplication (x) <br>
       <input type=radio name="method_calc" value="Division">
        Division (/) <br>
    </fieldset>

    <input type="submit" name="submit" value="Calculate">
    <br>
  
   
    </form>
     <footer>
    <p><b>&copy; <?php echo date('Y'); ?> AMP, Inc.</b></p>
</footer>
    </main>
   
</body>
</html>