<?php

session_start();
if (empty($_SESSION['csrf'])) {
	if (function_exists('random_bytes')) {
		$_SESSION['csrf'] = bin2hex(random_bytes(32));
	} else if (function_exists('mcrypt_create_iv')) {
		$_SESSION['csrf'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
	} else {
		$_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(32));
	}
}
error_reporting(E_ALL);
ini_set('display_errors', 'On'); 

session_start(); 

$error='';

if (isset($_POST['submit'])) {
   
   if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is wrong";
    } else {
    
require_once('database.php');
 
$username=$_POST['username'];
$password=$_POST['password'];
$rememberme=$_POST['rememberme'];

$_SESSION['rememberme']=$rememberme;

if ($rememberme == 'on') {
    setcookie("stored_username", '');
    setcookie("stored_username", $username);
    } else {
    setcookie("stored_username", '');
    }

    $loginQuery = 'SELECT * FROM login WHERE password = :password AND username = :username';

    $loginStatement = $db->prepare($loginQuery);
    $loginStatement->bindValue(':username', $username);
    $loginStatement->bindValue(':password', $password);
    $loginStatement->execute();

$rows = $loginStatement->rowCount(); 

if ($rows >= 1) {
    $_SESSION['login_user']=$username;
    header("location: profile.php"); // Redirecting To Other Page
} else {
    $error = "Username or Password is invalid";
    }
$loginStatement->closeCursor();
}
   }
 
 /**
 * Escapes HTML for output
 *
 */
function escape($html) {
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}
 ?>
