<?php
require('db_connect.php');

$datetime=date('Y-m-d H:i:s'); //date time

$sql="INSERT INTO $tbl_name (name, email, comment, datetime)
VALUES('{$_POST['name']}', '{$_POST['email']}', '{$_POST['comment']}', '$datetime')";

//check if query successful 
if ($conn->query($sql) === TRUE) {
  // Redirect to main page
  header("Location: /");
} else {
    echo "SQL Error: " . $conn->error . PHP_EOL;
}

$conn->close();
?>
