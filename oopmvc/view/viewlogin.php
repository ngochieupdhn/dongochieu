<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
</head>
<body>

	<table border="2" bgcolor="white" width="300" height="400" align="center">	
	<?php if (isset($message)) echo "<p>$message</p>"; ?>
	<?php if (isset($show_error)) 
	{
		foreach ($show_error as $string)
		{
			echo "<p>$string</p>";
		}
	}

	?>
	<form method="POST" action="">
		<tr>
		<td colspan="2" align="center">Đăng Nhập</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" placeholder="Nhập Username" name="username" size="20" ></input></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" placeholder="Nhập Password" name="password" size="20" ></input></td>
		</tr>
		
		<tr>
		<td colspan="2" align="center"><input type="submit" name="dangnhap" value="Đăng Nhập"></input></td>
		</tr>
	</form>
	</table>
<p>bạn chưa có tài khoản : <a href="index.php?controller=signup">Đăng ký ở đây</a></p>
</body>
</html>