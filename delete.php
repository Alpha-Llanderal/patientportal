<?php
include 'db.php';

// Ensure the 'id' parameter exists and is an integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Use a prepared statement to prevent SQL injection - By binding the id as an integer ("i"), the query becomes safer and more reliable.
    $stmt = $connection->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id); // 'i' denotes the type is an integer
    $stmt->execute();
    
    // Close the statement
    $stmt->close();
}

// Redirect to index.php after deletion
header('Location: index.php');
exit(); // Reminder: Always exit after header redirect
?>
