<?php
require('functions.php');

$page_header = getenv('PAGE_HEADER') ?: 'Test Sign Guestbook';
$colors = [
  'form' => getenv('COLOR_FORM') ?: 'LightGrey',
  'post' => getenv('COLOR_POST') ?: 'LightBlue',
];
?>
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
<td><strong><? echo $page_header; ?></strong></td>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" >
<tr>
<form id="form1" name="form1" method="post" action="/add.php">
<td>
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="<? echo $colors['form']; ?>">
<tr>
<td width="117">Name</td>
<td width="14">:</td>
<td width="357"><input name="name" type="text" id="name" size="40" /></td>
</tr>
<tr>
<td>Email</td>
<td>:</td>
<td><input name="email" type="text" id="email" size="40" /></td>
</tr>
<tr>
<td valign="top">Comment</td>
<td valign="top">:</td>
<td><textarea name="comment" cols="40" rows="3" id="comment"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td>
<?php
include('view.php')
?>
</td>
</tr>
</table>
</body>
</html>
