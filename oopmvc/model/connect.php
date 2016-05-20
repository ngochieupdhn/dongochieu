<?php 
require_once PATH.'/config.php';
class model
{
	public $connect;
	function __construct()
	{
		$config = new config;
		$this->connect=mysqli_connect($config->hostname,$config->username,$config->password,$config->database);
	}
}

 ?>