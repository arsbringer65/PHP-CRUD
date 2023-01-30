<?php

//DB CONNECTION
$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'todo';

//pdo way
$conn = "mysql:host=$dbhost;dbname=$dbname";
if (!$pdo = new PDO($conn, $dbuser, $dbpassword)) {
    die("Failed to Connect");
}

$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
