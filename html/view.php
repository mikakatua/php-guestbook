<!DOCTYPE html>
<html>
<head>
<title>Guestbook Sample</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
</style>
</head>
<body>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><strong>View Guestbook | <a href="/">Sign Guestbook</a> </strong></td>
</tr>
</table>
<br>

<?php

require('db_connect.php'); 

$sql="SELECT * FROM $tbl_name order by id desc limit 10";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
?>

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>ID</td>
<td>:</td>
<td><? echo $row['id']; ?></td>
</tr>
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="357"><? echo $row['name']; ?></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><? echo $row['email']; ?></td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><? echo $row['comment']; ?></td>
</tr>
<tr>
<td valign="top">Date/Time </td>
<td valign="top">:</td>
<td><? echo $row['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>

<?php
}
$conn->close(); //close database
?>
</body>
</html>
