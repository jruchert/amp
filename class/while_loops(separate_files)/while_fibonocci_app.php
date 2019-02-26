<!DOCTYPE html>
<html>
	<head> <title>Fibonacci Sequence Generator</title>
	</head>
	<body>
    <h1>Fibonacci Sequence Generator</h1>

    <?php
       /* Asshole repellent */
        $postfilter =
          array(
            'user_tasks'    =>    array('filter' => FILTER_SANITIZE_STRING, 'flags' => !FILTER_FLAG_STRIP_LOW),    // removes tags. formatting code is encoded -- add nl2br() when displaying
        );
        $revised_post_array = filter_input_array(INPUT_POST, $postfilter);    // must be referenced via a variable which is now an array that takes the place of $_POST[]
          echo (nl2br($revised_post_array['user_tasks']));    // here we use nl2br() for the displayed value, for the ['user_tasks'] array value so that the newlines are formatted ?>
    <?php 
     /* INTRO */
          echo '<b>What does this do?</b><i></br>The Fibonacci sequence is a set of numbers that starts with a one or a zero,</br>
                followed by a one, and proceeds based on the rule that each number (called a Fibonacci number)</br>
                is equal to the sum of the preceding two numbers.</br> </i><p>This app will generate a sequence of Fibonacci numbers based on a number you input.</p> ';?>
    <?php 
    /* Leonardo da Pisa, Mathmetician, fibanocci creator */
          echo '<img height="300px" width="200px" src="https://upload.wikimedia.org/wikipedia/commons/8/8e/Leonardo_da_Pisa.jpg"/> </br>'; ?>
    <?php  
     /* Give users their directions */
          echo '<label>Enter Numbers To Generate the Sequence Length:</label> </br></br>';?>
		<form method="post" action="while_fibonocci_app.php">
			<input type="text" name="length" placeholder="Length of the Fibonacci Series" />
			<input type="submit" />
           
		</form>
		<?php
          /* Math, Math,  Math */
			if(isset($_POST['length'])) {
				if(is_numeric($_POST['length'])) {
					$a = 0;
					$b = 1;
                   
          /* Refresh --- ah, mucho fresh! */
                    echo '</br>(<i>Hit the submit button at anytime to refresh the page</i>)</br>';
                    
                    /* Remind the user what they inputed */
                    echo "</br>Your inputed number was: " . $_POST['length']. " , aka, the sequence length.</br>";
					
                    /* Math, Math,  Math - Executed the progran */
                    echo "<br /> <b>Your Computed Fibonacci Sequence :<b><br /> 0";
					
					/* Loop the process using "While Loop" */
					while($b <= $_POST['length']) {
						echo nl2br( "  \r\n".$b);
						$temp = $a + $b;
						$a = $b;
						$b = $temp;
                    
           /* I really want to create an error mechanism which echos the bad input -- WIP */
           
                     #else(isset($_POST['length'])) {
                         #else if (is_numeric($_POST['length'], $_GET)!== false && $_GET['length'] === '1') {
					              #echo "</br><b>Your inputed number was: " . $_POST['length'] . " aka, *NOT* an actual number.</b></br>";    
					}
				}
			}
		?>
	</body>
</html>