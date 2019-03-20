<?php 


<?php 
echo "My name is 'Mark'. {$vars} can be put in without {$needing} to concatenate the ${string}.";

echo "<iframe SRC=//""</iframe>
?>

<?php
$url = $_GET['url'];
if (isset ($url)) { // decode the url and display it in the iframe
echo '<iframe ... src="'.urldecode($url).'"></iframe>';
} else { // display a static page if no url parameter was received
echo '<iframe ... src="http://myurl.com/mycontent.html"></iframe>';
}

//The code above checks to see if there is a URL parameter being passed (further checking could be done here). 
//If it finds one, it displays its content inside the iframe, otherwise it displays a static page (in case someone 
//accesses the iframe directly).

//Our iframe can $_GET the URL as a passed parameter and display it in between your site’s header and footer 
//so it looks all fancy like. To pull this off we’ll have to urlencode() the parameter part of our URL so it looks like this:

//http://...com/myiframe.php?url=http%3A%2F%2Fmyurl.com%2Fmycontent.html
//http://...com/myiframe.php?url=http://mycalendarurl

<?php
$width=250;
$height=250;

print('<IFRAME SRC="http://www.tiraspoltimes.com/headlines.php" width=' . $width . ' height=' . $height . ' marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no></IFRAME>');


//echo toplevel domain only

$s = 'http://www.cosmicbattle.net/fmtest.html';
$s = preg_replace('/^https?:\/\/(?:www\.)?(.+?)(?:\/.*)?$/i', '$1', $s);

echo $s; // cosmicbattle.net


?>


