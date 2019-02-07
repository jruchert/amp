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
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<main>
<header>
<div class="topnav">
 <a class="active" href="#home">Product Manager</a>
  <div class="login-container">
    <form action="/login.php">
      <input type="text" placeholder="Username" name="username">
      <input type="text" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>
<h1>Product Manager</h1></header>  