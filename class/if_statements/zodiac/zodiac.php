<!DOCTYPE html>
<html>
	<head> <title>Find Your Zodiac Sign Generator</title>
	</head>
	<body>
    <h1>Find Your Zodiac Sign Generator</h1>

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
          echo '<b>What does this do?</b><i></br>What are the zodiac sign dates for every star sign? Your zodiac sign, also known as your Sun sign, </br>
          is based on a range of dates that lasts about a month. If you were born with this date range, you are a member of this zodiac sign.</br>
Although the exact dates can shift plus or minus a day, depending on the year, here are the general zodiac sign dates used by Western (or Tropical) 
astrology </br>
- divided into twelve equal divisions or signs (Aries, Taurus, Gemini, Cancer, Leo, Virgo, Libra,</br>
          Scorpio, Sagittarius, Capricorn, Aquarius, Pisces)</br> </i><p>This app will generate your zodiac sign based on a birthdate you input.</p> ';?>
    <?php 
    /* Leonardo da Pisa, Mathmetician, fibanocci creator */
          echo '<img height="450px" width="800px" src="https://5io0615vq7k4e1k1l12k8b3r-wpengine.netdna-ssl.com/wp-content/uploads/2016/09/band-of-zodiac-ecliptic.png"/> </br>'; ?>
    <?php  
     /* Give users their directions */
          echo '<label>Enter your birthdate in this format "20131220":</label> </br></br>';?>
		<form method="post" action="zodiac.php">
			<input type="text" name="length" placeholder="your birthdate " />
			<input type="submit" />
           
		</form>
		<?php
          /* Math, Math,  Math */
			if(isset($_POST['birthdate'])) {
				if(is_numeric($_POST['birthdate'])) {
					
					$zodiac = '';     
                    $date = '20131220';
 
                 /* Format yyyymmdd */
                    preg_match('/([0-9]{4})([0-9]{2})([0-9]{2})/', $date, $matches);
 
                    $month = $matches['2'];
                    $month = ltrim($month, '0');
                    $day = $matches['3'];
                    $day = ltrim($day, '0');
                        
                         if ( ( $month == 3 && $day > 20 ) || ( $month == 4 && $day < 20 ) ) { $zodiac = "Aries"; } 
                            elseif ( ( $month == 4 && $day > 19 ) || ( $month == 5 && $day < 21 ) ) { $zodiac = "Taurus"; } 
                            elseif ( ( $month == 5 && $day > 20 ) || ( $month == 6 && $day < 21 ) ) { $zodiac = "Gemini"; } 
                            elseif ( ( $month == 6 && $day > 20 ) || ( $month == 7 && $day < 23 ) ) { $zodiac = "Cancer"; } 
                            elseif ( ( $month == 7 && $day > 22 ) || ( $month == 8 && $day < 23 ) ) { $zodiac = "Leo"; } 
                            elseif ( ( $month == 8 && $day > 22 ) || ( $month == 9 && $day < 23 ) ) { $zodiac = "Virgo"; } 
                            elseif ( ( $month == 9 && $day > 22 ) || ( $month == 10 && $day < 23 ) ) { $zodiac = "Libra"; } 
                            elseif ( ( $month == 10 && $day > 22 ) || ( $month == 11 && $day < 22 ) ) { $zodiac = "Scorpio"; } 
                            elseif ( ( $month == 11 && $day > 21 ) || ( $month == 12 && $day < 22 ) ) { $zodiac = "Sagittarius"; } 
                            elseif ( ( $month == 12 && $day > 21 ) || ( $month == 1 && $day < 20 ) ) { $zodiac = "Capricorn"; } 
                            elseif ( ( $month == 1 && $day > 19 ) || ( $month == 2 && $day < 19 ) ) { $zodiac = "Aquarius"; } 
                            elseif ( ( $month == 2 && $day > 18 ) || ( $month == 3 && $day < 21 ) ) { $zodiac = "Pisces"; } 

                         return $zodiac; 
} 
                   
          /* Refresh --- ah, mucho fresh! */
                    echo '</br>(<i>Hit the submit button at anytime to refresh the page</i>)</br>';
                    
                    /* Remind the user what they inputed */
                    echo "</br>Your inputed date was: " . $_POST['birthdate']. "</br>";
					
                    /* Math, Math,  Math - Executed the progran */
                    echo "<br /> <b>Your Computed Zodiac sign :<b><br /> 0";
					
					/* Loop the process using "While Loop" */
					while($birthdate<= $_POST['birthdate']) {
						echo nl2br( "  \r\n".$zodiac);
				
						$zodiac = $temp;
                        
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


