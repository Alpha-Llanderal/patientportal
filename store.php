<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the form
    $fname = $connection->real_escape_string($_POST['fname']);
    $lname = $connection->real_escape_string($_POST['lname']);
    $email = $connection->real_escape_string($_POST['email']);
    $password = $connection->real_escape_string($_POST['password']);

    // Use a prepared statement to avoid SQL injection - This approach safely binds the form inputs to the query.
    $stmt = $connection->prepare("INSERT INTO users (fname, lname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fname, $lname, $email, $password);
    $stmt->execute();
    
    // Close the statement
    $stmt->close();

    // Redirect to index.php
    header('Location: index.php');
    exit(); // Reminders: Always exit after header redirect
}
?>
