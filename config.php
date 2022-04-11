<?php
    $host = 'localhost';
    $db = 'prosper';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (PDOException $e) {
        throw new PDOException($e->getMessage());
    }
    date_default_timezone_set('Asia/Kolkata');

    require_once 'user.php';
    $user = new user($pdo);
?>