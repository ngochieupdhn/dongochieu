<?php 
class login
{
	function login()
	{
		if (!isset($_SESSION['dangnhap']))
		{
			if(isset($_POST['dangnhap']))
			{
				$username = trim($_POST['username']);
				$password = trim($_POST['password']);
				if($username == '')
				{
					$error = TRUE;
					$show_error[] = "Tên đăng nhập không được để trống";
				}
				if($password == '')
				{
					$error = TRUE;
					$show_error[] = "Password không được để trống";
				}
				if($username =='' && $password =='')
				{
					$error = TRUE;
					$show_error = "Tên đăng nhập và password không được để trống";
				}
				if(!isset($error))
				{

					require_once PATH.'/model/loginmodel.php';
					$model = new loginmodel;
					$result = $model->getlogin($username,$password);
					if($username ==$result['username'] && $password == $result['password'])
					{
						$_SESSION['dangnhap'] = $result['username'];
						header('location:index.php');
					}
					else
					{
						$message = "Đăng nhập thất bại";
					
					}
				}
			}
			require_once PATH.'/view/viewlogin.php';
		}
		
		
	}
}
