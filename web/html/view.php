<?php
require('db_connect.php'); 

$sql="SELECT * FROM $tbl_name order by id desc limit 10";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
?>

<table width="400" border="0" align="center" cellpadding="3" cellspacing="1">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="<?php echo $colors['post']; ?>">
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
<td><? echo tz_date($row['datetime']); ?></td>
</tr>
</table></td>
</tr>
</table>

<?php
}
?>
