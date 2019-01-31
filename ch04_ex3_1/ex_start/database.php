<?php
    $dsn = 'mysql:host=db;dbname=my_guitar_shop1';
    $username = 'am_pasquali';
    $password = 'POOPmcp33p';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php';
        exit();
    }
