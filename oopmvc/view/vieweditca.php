<!DOCTYPE html>
<html>
<head>
	<title>SỬA LOẠI TIN TỨC</title>
	<meta charset="utf-8">
</head>
<body>
<?php if(isset($message)) echo $message; ?>
<table align="center" border="0.5" bgcolor="white" width="600px" height="600px">
<form action="" method="post">
	<tr align="center">
		<td colspan="2">Trang sửa Catergory</td>
	</tr>
	<tr>
	<td>CATERGORY</td>
	<td><input name="nameca" value="<?php echo $data['id'];?>"></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" name="sua" value="SỬA"></td>
	</tr>
</form>
</table>
</body>
</html>
<a href="index.php?controller=tintuc&function=allca">Trang Category</a>