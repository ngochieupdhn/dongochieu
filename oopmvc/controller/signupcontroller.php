<?php 
require_once PATH.'/model/connect.php';
class signup
{
	public function signup()
	{
		if(isset($_POST['dangki']))
		{

			$username = trim($_POST['username']); 
			$password = trim($_POST['password']); 
			$email = trim($_POST['email']); 

			if ($username == '') 
			{
				$error = TRUE;
				$show_error = 'Tên đăng nhập không được để trống'; 
			}
			if (strlen($username) >= 15)
			{
				$error = TRUE;
				$show_error = "Tên đăng nhập quá dài, giới hạn chỉ được 15 ký tự";
			}
			if (strlen($password) == 0)
			{
				$error = TRUE;
				$show_error = "Lỗi pass word";
			}
			if(md5(strlen($password)) <=12 )
			{
				$error = TRUE;
				$show_error="Lỗi password";
			}
			if (strlen($email) == 0)
			{
				$error = TRUE;
				$show_error = "Email ko được để trống";
			}

			if (!isset($error))
			{
				require_once PATH.'/model/signupmodel.php';
				$controll = new signupmodel;
				$result = $controll->getsignup($username,$password,$email);
				if($result)
				{
					echo "Đăng kí thành công<a href='http://localhost:8888/oopmvc/index.php?login'>Đăng Nhập</a>";
				}
				else
				{
					echo "Tên đăng nhập hoặc email bị trùng ";
				}
			}
			else
			{
				print_r($show_error);
			}
		}
		
		require_once PATH.'/view/viewsignup.php';
	}

}