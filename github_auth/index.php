<?php
// for $code set a different index.php and send your client_id to 
//https://github.com/login/oauth/authorize using GET method with 
//the parameter ?client_id = YOUR-CLIENT-ID
session_start();
$code = $_GET['code'];
$url = 'https://github.com/login/oauth/access_token';
$client_id = 'git@github.com:binarygalwalkin/ruchert.com_amp.git';
$client_secret = 'ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQCd9GWJeMnfpQ6d1WgrfVvEaXzn06PMs071UuxibwxUY+wetWw9NO8zf8eN5hwzjYYNA+qbvE/hJtnfblELIIdQOBpm71gFaS9v+UE5633PFF5mNZ+ASF0G1caWYDuIsR+SaljoNWbMmMEnYAfrOd07eXwR9j5RakLtjZs67ntV+gM6YrsO3xlQNoAsCyWXqUGr8wTE+0M7HfYnPRKrPVQjIBZy4jUwOKMbEE6/+pBeZAJSejR9nj6POGJemvtG5BwOh4Rt9ivn83HOgNNgaTn0ca4mDQyjNq+cu4h7b8TH5wOtMVlyTco3ZzYnSQ7YAdA1sCcciZyldpo04CQTit0F coding@WebIDE';
// echo $code;
$postdata = http_build_query(
    array(
        'client_id' => $client_id,
        'client_secret' => $client_secret,
        'code' => $code
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $postdata
    )
);
$context = stream_context_create($opts);
$result = file_get_contents($url, false, $context);
$json_url = 'https://api.github.com/user?'.$result;
$options  = array('http' => array('user_agent'=> $_SERVER['HTTP_USER_AGENT']));
$context  = stream_context_create($options);
$response = file_get_contents($json_url, false, $context);
$response = json_decode($response);
print_r($response->login);
print_r('<img border = "10px" src="'.$response->avatar_url.'"><br>');
echo "Hello<br>";
print_r($response->name);
$_SESSION['name'] = $response->name;
$_SESSION['imgURL'] = $response->avatar_url;
$_SESSION['username'] = $response->login;
$_SESSION['logged_in'] = '1';
//Enable the following to redirect to another page
// header('location:chat.php');
?>