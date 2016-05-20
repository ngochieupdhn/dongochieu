<?php 

class tintuc 
{

	function allnews()
	{
		require_once PATH.'/model/tintucmodel.php';
		$select = new tintucmodel;
		$data = $select->alltintuc();
		require_once PATH.'/view/viewalltintuc.php';

		echo "<a href=\"index.php?controller=logout\">Đăng Xuất</a>";

	}
	function edittintuc()
	{
		require_once PATH.'/model/tintucmodel.php';
		$id = $_GET['id'];
		$result = new tintucmodel;
		if(isset($_POST['sua']))
		{
			$title = $_POST['title'];
			$content = $_POST['content'];
			$categoryid = $_POST['select'];
			$result->edittintuc($title,$content,$categoryid,$id);

			$message = TRUE;
		}
		$data = $result->viewtintuc($id);
		$select = $result->selectca();
		require_once PATH.'/view/viewedittintuc.php';

	}
	function deletetintuc()
	{
		require_once PATH.'/model/tintucmodel.php';
		$id = $_GET['id'];
		$result = new tintucmodel;
		$result->deletetintuc($id);
		header('location:http://localhost:8888/oopmvc/index.php');
	}
	function addtintuc()
	{
		require_once PATH.'/model/tintucmodel.php';
		$result = new tintucmodel;
		if(isset($_POST['them']))
		{
			$caid = $_POST['select'];
			$title = $_POST['title'];
			$content = $_POST['content'];
			$result ->addtintuc($caid,$title,$content);
			if(isset($result))
			{
				$message = "thêm thành công<a href='http://localhost:8888/oopmvc/index.php'>Trang Chủ</a>";
			}
			else
			{
				$message="thêm thất bại !";
			}
		}
		$data = $result->selectca();
		require_once PATH.'/view/viewaddtintuc.php';
	}
	function addca()
	{
		if(isset($_POST['them']))
		{
			$category = $_POST['category'];
			require_once PATH.'/model/tintucmodel.php';
			$result = new tintucmodel;
			$result->addca($category);
			if(isset($result))
			{
				$message = "thêm thành công<a href='http://localhost:8888/oopmvc/index.php'>Trang Chủ</a>";
			}
			else
			{
				$message="thêm thất bại !";
			}
		}
		require_once PATH.'/view/viewaddca.php';
	}
	function allca()
	{
		require_once PATH.'/model/tintucmodel.php';
		$result = new tintucmodel;
		$data = $result->allca();
		require_once PATH.'/view/viewallca.php';
	}
	function editca()
	{
		require_once PATH.'/model/tintucmodel.php';
		$id = $_GET['id'];
		$result = new tintucmodel;
		if(isset($_POST['sua']))
		{
			$category = $_POST['nameca'];
			$result ->editca($category,$id);	
		}
		$data = $result->viewca($id);
		require_once PATH.'/view/vieweditca.php';
	}
}