<?php

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
?>   