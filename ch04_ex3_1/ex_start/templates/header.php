<?php
session_start();
$_SESSION['user'] = $user_id;

if (isset($_SESSION['user'])) {
   // logged in
 } else {
   // not logged in
 }

$_SESSION['user']

header("X-XSS-Protection: 1; mode=block");
require('database.php');
require('login.php');

$query = 'SELECT username
          FROM login';
          
$statement = $db->prepare($query);
$statement->execute();
$usernames = $statement->fetchAll();
$statement->closeCursor();


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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<?php

 } else {
   ?>
<!-- the body section -->
<body>
<main>
<header>
<div class="topnav">
 <a class="active" href="/">Home</a>
  <div class="login-container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <button type="submit" onclick="window.location.href = '/add_me.php';">Add User</button>
            
            <?php if (isset($_SESSION['add_user_error'])) {
                    echo $_SESSION['add_user_error'];}?>
      <input type="text" placeholder="<?php echo (!empty($username_err)) ? 'has-error' : ''; ?>" name="<?php echo $username; ?>">
      <span class="help-block"><?php echo $username_err; ?></span>
      <input type="text" placeholder="<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>" name="psw">
      <span class="help-block"><?php echo $password_err; ?></span>
      <button type="submit">Login</button>
      <input type="checkbox" name="rememberme" <?php echo $c; ?>> Save?
      <?php echo $error; ?>
    </form>
        
  </div>
</div>
 <?php
 }
 ?>
<h1>Product Manager</h1></header>  