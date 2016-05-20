<!DOCTYPE html>
<html>
<head>
	<title>Tin Tức</title>
</head>
<body>
<table border="1px" width="1200">
<tr width="1150">
	<td width="50">ID</td>
	<td width="150">CATERGORY</td>
	<td width="300">TITLE</td>
	<td width="500">CONTENT</td>
	<td width="50">SỬA</td>
	<td width="50">XÓA</td>
</tr>
<?php foreach ($data as $value): ?>
	<tr>
		<td width="50"><?php echo $value['id'];?></td>
		<td width="150"><?php echo $value['category'];?></td>
		<td width="300"><?php echo $value['title'];?></td>
		<td width="500"><?php echo $value['content'];?></td>
		<td width="50"><a href="index.php?controller=tintuc&function=edittintuc&id=<?php echo $value['id']?>">SỬA</a></td>
		<td width="50"><a href="index.php?controller=tintuc&function=deletetintuc&id=<?php echo $value['id']?>">XÓA</a></td>
	<tr>
<?php endforeach ?>

</table>
</body>
</html>
<a href="index.php?controller=tintuc&function=addtintuc">Thêm tin tức</a>
<a href="index.php?controller=tintuc&function=addca">Thêm Category</a>
<a href="index.php?controller=tintuc&function=allca">Category</a>