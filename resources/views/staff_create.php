<html>
<head>
<title>Staff Management | Add</title>
</head>
<body>
<form action = "/create" method = "post">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>Name : </td>
<td><input type='text' name='staff_name' /></td>
</tr> 
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Add staff"/>
</td>
</tr>
</table>
</form>
</body>
</html>