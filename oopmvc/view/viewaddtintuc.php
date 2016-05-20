<!DOCTYPE html>
<html>
<head>
	<title>THÊM TIN TỨC</title>
	<meta charset="utf-8">
</head>
<body>
<?php if(isset($message)) echo $message; ?>
<table align="center"  bgcolor="white" width="300px" height="300px">
<form action="" method="POST">
	<tr align="center">
		<td colspan="2">Trang Thêm Tin Tức</td>
	</tr>
	<tr>
	<td>

		<select name="select">
		<?php foreach ($data as $row): ?>
			<option value="<?php echo $row['id']?>"><?php echo $row['category']?></option>
		<?php endforeach; ?>
		</select>
	</td>
	<td >TITLE</td>
	</td>
	<td><input type="text" name="title" autofocus="autofocus" size="30"></td>
	</tr>
	<tr>
	<td >CONTENT</td>
	<td><textarea name="content"></textarea></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" name="them" value="THÊM"></td>
	</tr>
</form>
</table>
</body>
</html>