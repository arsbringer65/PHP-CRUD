<?php
require_once '../config/conn.php';

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM todos WHERE id = :id";
    $stmt = $pdo->prepare($sql);

    // Bind the values from the form to the query as parameters
    // $stmt->execute($_POST['id']);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

header("Location: ../index.php?deleted_successfully");
