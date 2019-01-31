<?php
// first, connect to a database containing the sessions table
 
//  include the class
require 'path/to/Zebra_Session.php';
 
//  start the session
//  where $link is a connection link returned by mysqli_connect
$session = new Zebra_Session($link, 'sEcUr1tY_c0dE');
 
//  get the (approximate) number of active sessions
$active_sessions = $session->get_active_sessions();



//  start the session
//  where $link is a connection link returned by mysqli_connect
$session = new Zebra_Session($link, 'sEcUr1tY_c0dE');
 
// set "myvar" which will only be available
// for the next server request and will be
// automatically deleted afterwards
$session->set_flashdata('myvar', 'myval');


if (isset($_SESSION['myvar'])) {
function DeleteSessionByUserId($user_id) {
    $user_id = mysql_real_escape_string($user_id);
    global $CONFIG;

    $sql = "UPDATE users SET sid = '' WHERE id = '".$user_id."'";
    $result = mysql_query($sql);
    return true;
}

// This will delete all users with expired sessions
function CheckAllSessionsExpired() {
    global $CONFIG;

    $sql = "SELECT id FROM users WHERE sid != '' AND lastseen < '".date("Y-m-d H:i:s", strtotime("-".$CONFIG["app:maxLatency"]." seconds"))."'";

    $result = mysql_query($sql);
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        DeleteSessionByUserId($line['id']);
    }
    return true;
}

// This will update the last seen timestamp in MySQL
function UserSetSeen($user_id) {
    $user_id = mysql_real_escape_string($user_id);

    global $CONFIG;
    $sql = "UPDATE users SET lastseen = '".date("Y-m-d H:i:s")."' WHERE id = '".$user_id."';";
    $result = mysql_query($sql);
    return true;
}

?>