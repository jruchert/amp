
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


$result = "";
class randomizer
{
    var $number_1;
    var $number_2;
    var $number_3;
    var $number_4;

    function checkoption($method_switch)
    {
        switch($method_calc)
        {
            case 'Switch1':
            return $this->number_1;
            break;

            case 'Switch2':
            return $this->number_2;
            break;

            case 'Switch3':
            return $this->number_3;
            break;

            case 'Switch4':
            return $this->number_4;
            break;

            default:
            return "<br>Sorry NO selection command found!";
        }   
    }
    function getresult($number_1, $number_2, $number_3, $number_4, $method_switch)
    {
        $this->number_1 = $number_1;
        $this->number_2 = $number_2;
        $this->number_3 = $number_3;
        $this->number_4 = $number_4;
        return $this->checkoption($method_switch);
    }
}

$cal = new randomizer();
if(isset($_POST['submit']))
{   
   
    $result = $cal->getresult($_POST['number_1'],$_POST['number_2'],$_POST['number_3'],$_POST['number_4'],$_POST['method_switch']);

}
// Create set of links
$link = array();
$link[] = '<a href="https:www.youtube.com/embed/4yikpWtIFU8">page 1</a>';
$link[] = '<a href="https://www.youtube.com/embed/4yikpWtIFU8">page 2</a>';
$link[] = '<a href="https://www.youtube.com/embed/ZUjQtJGaSpk">page 3</a>';
$link[] = '<a href="https://earthsky.org/earth/flying-squirrels-go-pink-in-ultraviolet">page 4</a>';
//$link[] = '<a href="whatever.html">page 5</a>';
//$link[] = '<a href="whatever.html">page 6</a>';
//$link[] = '<a href="whatever.html">page 7</a>';
//$link[] = '<a href="whatever.html">page 8</a>';

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

$service_url  = $service_base_url;
$service_url .= "&var1=X";
$service_url .= "&var2=Y";
$service_url .= "&api_key=" . $service_api_key;

$request_results = get_url($service_url);

preg_match("/<body.*\/body>/s", $request_results[0], $pagecontent);

$pagecontent = $pagecontent[0];

$pagecontent = str_replace('<body>', '', $pagecontent);
$pagecontent = str_replace('</body>', '', $pagecontent);

// I'd like to resize the images...
$pattern = '/\< *[img][^\>]*[src] *= *[\"\']{0,1}([^\"\'\ >]*)/i';
$replacement = '<img src="' . $imgpath . '/phpthumb/phpThumb.php?src=' . '$1' . '&w=160&h=110&zc=1';
$pagecontent = preg_replace($pattern, $replacement, $pagecontent);
	
echo $pagecontent;
}?>
<div id="main-content">
      <?php print $pagecontent; ?>
      </div>
</div>
<?php include 'templates/footer.php';?>