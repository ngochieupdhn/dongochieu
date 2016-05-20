<?php 
require_once PATH.'/model/connect.php';
class loginmodel extends model
{
	function getlogin($username,$password)
	{
		$select = "SELECT * FROM signup WHERE username='$username'";
		$query = mysqli_query($this->connect,$select);
		return mysqli_fetch_assoc($query);
	}
}


 ?>