
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

require_once('database.php');

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User

$ses_sql = 'SELECT username FROM login WHERE username= :user_check';

    $existing_user = $db->prepare($ses_sql);
    $existing_user->bindValue(':user_check', $user_check);
    $existing_user->execute();
    
$result = $existing_user->fetchAll();

$login_session = $result[0]['username'];


if(!isset($login_session)){

?>

