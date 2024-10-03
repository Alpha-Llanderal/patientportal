<?php
// Define your database credentials (preferably use environment variables or a separate config file)
$host = 'localhost';
$db = 'crud_db';
$user = 'root';
$pass = '';

// Create a connection to the database
$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>