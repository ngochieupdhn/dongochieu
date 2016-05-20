<!DOCTYPE html>
<html>
<head>
	<title>SỬA TIN TỨC</title>
	<meta charset="utf-8">
</head>
<body>
<?php if(isset($message)) echo "Sua thanh cong tin tuc"; ?>
<table align="center" border="0.5" bgcolor="white" width="600px" height="600px">
<a href="http://localhost:8888/oopmvc/index.php">Trang Chủ</a>
<form action="" method="post">
	<tr align="center">
		<td colspan="2">Sửa Tin Tức</td>
	</tr>
	<tr>
	<td >TITLE</td>
	<td>

		<select name="select">
		<?php foreach ($select as $row): ?>
			<option value="<?php echo $row['id']?>" <?php if ($row['id'] == $data['caid']) echo 'selected = "selected"'?> ><?php echo $row['category']?></option>
		<?php endforeach; ?>
		</select>
	</td>
	</td>
	<td><input type="text" name="title" autofocus="autofocus" size="30" value="<?php echo $data['title']?>"></td>
	</tr>
	<tr>
	<td >CONTENT</td>
	<td><textarea name="content"><?php echo $data['content']?></textarea></td>
	</tr>
	<tr align="center">
	<td colspan="2"><input type="submit" name="sua" value="Sửa"></td>
	</tr>
</form>
</table>
</body>
</html>
<a href="http://localhost:8888/oopmvc/index.php?controller=tintuc&function=allca">Trang Category Name</a>