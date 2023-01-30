<?php
require_once "./config/conn.php";

$sql = "SELECT * FROM todos WHERE status = 'pending'";
$stmt = $pdo->prepare($sql);
$stmt->execute();