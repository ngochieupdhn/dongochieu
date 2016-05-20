<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
	<meta charset="utf-8">
</head>
<body>
<table border="1" width="100%">
  <tr>
  	<th>categoryname</th>
    <th>SỬA</th>
    <th>XÓA</th>
  </tr>
 <?php foreach($data as $row): ?>
  <tr>
    <td><?php echo $row['category'] ?></td>
    <td><a href="index.php?controller=tintuc&function=editca&id=<?php echo $row['category']?>">SỬA</a></td>
    <td><a href="index.php?controller=tintuc&function=deleteca&id=<?php echo $row['category']?>">XÓA</a></td>
  </tr>
  <?php endforeach; ?>
</table>
</body>
</html>
