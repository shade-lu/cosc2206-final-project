<?php
    $dsn = 'mysql:host=localhost;port=3306;dbname=SKaiserdb';
    $username = 'SKaiser';
    $password = 'QIBFYAVj';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $db = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>