<!DOCTYPE html>
<html>
<head>
	<title>Đăng Kí Thành Viên</title>
</head>
<body>

	<table border="2" bgcolor="white" width="300" height="400" align="center">
	<form method="POST" action="">
		<tr>
		<td colspan="2" align="center">Đăng Kí Thành Viên</td>
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
			<td>Email</td>
			<td><input type="email" placeholder="Nhập Email" name="email" size="20"></input></td>
		</tr>
		<tr>
		<td colspan="2" align="center"><input type="submit" name="dangki" value="Đăng Kí"></input></td>
		</tr>
	</form>
	</table>
<p>bạn đã có tài khoản : <a href="index.php?controller=login">Đăng nhập ở đây</a></p>
</body>
</html>