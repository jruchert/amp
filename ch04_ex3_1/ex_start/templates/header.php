<?php
include('session.php');
session_start();
header("X-XSS-Protection: 1; mode=block");
require('database.php');

$query = 'SELECT username
          FROM login';
$statement = $db->prepare($query);
$statement->execute();
$usernames = $statement->fetchAll();
$statement->closeCursor();

/* Prevent XSS input */
$_GET   = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
/* I prefer not to use $_REQUEST...but for those who do: */
$_REQUEST = (array)$_POST + (array)$_GET + (array)$_REQUEST;
include('login.php'); // Includes Login Script

if (empty($_COOKIE['stored_username'])) {
$c="";
} else {
$c="checked";
}

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<!-- the head section -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<main>
<header>
<div class="topnav">
 <a class="active" href="index.php">Home</a>
  <div class="login-container">
    <form action="/login.php">
    <button type="submit">Add User</button>
            
            <?php if (isset($_SESSION['add_user_error'])) {
                    echo $_SESSION['add_user_error'];}?>
      <input type="text" placeholder="Username" name="username" value=<?php if (!empty($_COOKIE['stored_username'])) { echo $_COOKIE['stored_username'];}?>>
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
      <input type="checkbox" name="rememberme" <?php echo $c; ?>> Save?
      <?php echo $error; ?>
    </form>
        <p><a href="index.php">Go to Profile</a></p>
  </div>
</div>
<h1>Product Manager</h1></header>  