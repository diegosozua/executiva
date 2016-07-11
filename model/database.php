<?php
//Postgresql
/*$dsn = 'pgsql:host=localhost;dbname=postgres';
$username = 'postgres';
$password = 'Jesus26';*/

//MySQL
/*$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';*/

//MySQL Hostinger
$dsn = 'mysql:host=mysql.hostinger.com.br;dbname=u302211818_revon';
$username = 'u302211818_qrev';
$password = 'Jesus1987';
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
