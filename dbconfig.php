// dbconfig.php
<?php
$host = 'localhost'; // Change this to your MySQL server hostname if different
$username = 'root'; // Replace with your MySQL username
$password = 'root'; // Replace with your MySQL password
$database = 'php'; // Replace with the name of your database

// Create a MySQL connection
$mysqli = new mysqli($host, $username, $password, $database);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}

?>