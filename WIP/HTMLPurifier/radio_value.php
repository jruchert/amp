<?php
/* if (isset($_POST['submit'])) {
if(isset($_POST['radio']))
{
echo "<span>You have selected :<b> ".$_POST['radio']."</b></span>";
}
else{ echo "<span>Please choose any radio button.</span>";}
}
*/

if(isset($_POST['formSubmit'])) 
{
  $varCountry = $_POST['formCountry'];
  $errorMessage = "";
  
  if(empty($varCountry)) 
  {
    $errorMessage = "<li>You forgot to select a country!</li>";
  }
  
  if($errorMessage != "") 
  {
    echo("<p>There was an error with your form:</p>\n");
    echo("<ul>" . $errorMessage . "</ul>\n");
  } 
  else 
  {
    // note that both methods can't be demonstrated at the same time
    // comment out the method you don't want to demonstrate

    // method 1: switch
    $redir = "US.html";
    switch($varCountry)
    {
      case "US": $redir = "US.html"; break;
      case "UK": $redir = "UK.html"; break;
      case "France": $redir = "France.html"; break;
      case "Mexico": $redir = "Mexico.html"; break;
      case "Russia": $redir = "Russia.html"; break;
      case "Japan": $redir = "Japan.html"; break;
      default: echo("Error!"); exit(); break;
    }
    echo " redirecting to: $redir ";
    
    // header("Location: $redir");
    // end method 1
    
    // method 2: dynamic redirect
    //header("Location: " . $varCountry . ".html");
    // end method 2

    exit();
  }
}
?>