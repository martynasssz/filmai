<?php
function connect()
{
    $host = "localhost";
    $db = 'filmai';
    $user = 'pdo_user';
    $password = 'Password@2';

    try {
        $pdo = new PDO("mysql:host=$host; dbname=$db; charset=utf8", $user, $password);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        return false;
    }
    return $pdo;
}