<?php

// Create set of links
$link = array();
$link[] = '<a href="https://www.youtube.com/embed/4yikpWtIFU8">page 1</a>';
$link[] = '<a href="https://www.youtube.com/embed/4yikpWtIFU8">page 2</a>';
$link[] = '<a href="https://www.youtube.com/embed/ZUjQtJGaSpk">page 3</a>';
$link[] = '<a href="https://earthsky.org/earth/flying-squirrels-go-pink-in-ultraviolet">page 4</a>';
$link[] = '<a href="whatever.html">page 5</a>';
$link[] = '<a href="whatever.html">page 6</a>';
$link[] = '<a href="whatever.html">page 7</a>';
$link[] = '<a href="whatever.html">page 8</a>';

?>
<!DOCTYPE html>
<html lang="en">

<!-- the head section -->

<head>
	<meta charset="utf-8">
   
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>Wierd Skillz</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<!-- the body section -->
<body>
<main>
<header><h1>Pick Your Poison</h1></header>
<div class="topnav navbar-fixed-top">
 <a class="active" href="/">Home</a>

  
<?php


// Create loop to display links
for($i = 0; $i < count($link); ++$i)
{
    // Create randomizer
    // Use switch statement to find font size
    $randomizer = rand(1,50);
    switch($randomizer)
    {
    case ($randomizer <= 20):
    $font_size = "11";
    break;

    case ($randomizer <= 30):
    $font_size = "16";
    break;

    case ($randomizer <= 40):
    $font_size = "18";
    break;

    case ($randomizer <= 50):
    $font_size = "20";
    break;
    }

      //Display the link
    echo '<span style="font-size: ' .$font_size. ';">' .$link[$i]. '</span>&nbsp;&nbsp;';

// Loop the next link 
}
?>

</div>
<?php include 'templates/footer.php'; ?>