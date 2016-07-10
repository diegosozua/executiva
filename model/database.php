<?php

$dsn = 'pgsql:host=localhost;dbname=postgres';
$username = 'postgres';
$password = 'Jesus26';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
