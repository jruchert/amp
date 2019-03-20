<?php
    $dsn = 'mysql:host=db;dbname=amp_guitar_shop';
    $username = 'apasquali';
    $password = 'apSecret';


    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>