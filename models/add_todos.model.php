<?php
require_once '../config/conn.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
   



    $sql = "INSERT INTO todos (title, status) VALUES (:title, 'pending')";

    // Prepare the SQL query
    if (!$stmt = $pdo->prepare($sql)) {
        header("Location: ../index.php?=error=sqlerror");
    }   

    // Bind the parameters to the query
    $stmt->bindParam(':title', $title);
    

    // Execute the SQL query
    $stmt->execute();

    // Print a message
    // echo "User added successfully!";
    header("Location: ../index.php?added_successfully");
    // echo $_SESSION['title'];
}
