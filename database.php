<?php
    $dsn = 'mysql:host=localhost;dbname=test';
    $username = 'root';
    $password = 'pa55word';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $db = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        $error = $e->getMessage();
        include 'error.php';
        exit();
    }
?>