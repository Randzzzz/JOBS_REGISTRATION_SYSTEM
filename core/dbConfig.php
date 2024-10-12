<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "admin_system"; //db_name
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>