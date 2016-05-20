<?php 
session_start();
define('PATH', dirname(__FILE__));
if(!isset($_SESSION['dangnhap']))

{
	if(isset($_GET['controller']))
	{
		$controller = $_GET['controller'];
		if($controller == 'signup' || $controller == 'login')
		{
			$filename = $controller.'controller.php'; //
		}
	}
	else
	{
		$controller = 'login';
		$filename = $controller.'controller.php'; //
	}
	require_once PATH . '/controller/'.$filename;
	$class = new $controller;


	
}
else
{
	if(isset($_GET['controller']))
	{
		$controller = $_GET['controller'];	
	}
	else
	{
		$controller = 'tintuc';

	}
	$filename = $controller.'controller.php';
	require_once PATH.'/controller/'.$filename;

	if (isset($_GET['function']))
	{
		$function = $_GET['function'];
		
	}
	else
	{
		$function = 'allnews';
	}
	$a = new $controller;
	$a->$function();
}