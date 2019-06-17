<?php
$host = getenv('DB_HOST'); // Server name 
$port = getenv('DB_PORT'); // Server port
$username = getenv('DB_USER'); // Mysql username 
$password = getenv('DB_PASS'); // Mysql password 
$db_name = getenv('DB_NAME'); // Database name 
$tbl_name = "guestbook"; // Table name 

// Connect to server and select database.
$conn = new mysqli($host, $username, $password, $db_name, $port);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error) . PHP_EOL;
}
?>
