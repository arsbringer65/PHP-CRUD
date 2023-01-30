<?php
require_once '../config/conn.php';

if (isset($_POST['done'])) {
    $id = $_POST['id'];

    $sql = "UPDATE todos SET status = 'finished' WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Bind the values from the form to the query as parameters
    // $stmt->execute($_POST['id']);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

header("Location: ../index.php?updated_successfully");
