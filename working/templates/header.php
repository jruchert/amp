<?php
include('session.php');
session_start();

require('database.php');

$query = 'SELECT username
          FROM login';
$statement = $db->prepare($query);
$statement->execute();
$usernames = $statement->fetchAll();
$statement->closeCursor();
?>

<!DOCTYPE html>
<html lang="en">

<!-- the head section -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Simple Database App</title>

	<link rel="stylesheet" href="style.css">
</head>

<body>
<main>
<!-- the header -->
<header>
<div class="topnav">
 <a class="active" href="index.php">Home</a>
  <div class="login-container">
    <form action="add_user.php">
    
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
      
    </form>
  </div>
</div>
<h1>Simple Database App</h1></header> 
	