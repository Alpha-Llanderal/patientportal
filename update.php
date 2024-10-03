<?php
// Include the database connection file
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the data from the form
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update query to modify the existing record
    $stmt = $connection->prepare("UPDATE users SET fname = ?, lname = ?, email = ?, password = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $fname, $lname, $email, $password, $id);
    $stmt->execute();

    // Close the statement
    $stmt->close();

    // Redirect to index.php after executing the update
    header('Location: index.php');
    exit(); // Stop script execution after redirect
}

// Close the connection
$connection->close();
?>
