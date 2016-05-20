<?php 
require_once PATH.'/model/connect.php';
class tintucmodel extends model
{
	function alltintuc()
	{
	$sql = "SELECT * FROM catergory as c JOIN news  as n ON c.id=n.caid";
	$query = mysqli_query($this->connect,$sql);
	return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	function addtintuc($caid,$title,$content)
	{
		$sql = "INSERT INTO news(caid,title,content) VALUES ('$caid','$title','$content')";
		$query = mysqli_query($this->connect,$sql);
		return $query;
	}
	function selectca()
	{
		$sql = "SELECT * FROM catergory";
		$query = mysqli_query($this->connect,$sql);
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	function viewtintuc($id)
	{
		$sql = "SELECT * FROM catergory as c JOIN  news as n ON n.caid = c.id WHERE id ='$id'";
		$query = mysqli_query($this->connect,$sql);
		return mysqli_fetch_assoc($query);
	
	}
	function edittintuc($title,$content,$categoryid,$id)
	{
		$sql = "UPDATE news SET title='$title',content='$content',caid='$categoryid' WHERE id='$id' ";
		mysqli_query($this->connect,$sql);
	}
	function deletetintuc($id)
	{
		$sql = "DELETE FROM news WHERE id='$id'";
		mysqli_query($this->connect,$sql);
	}
	function addca($category)
	{
		$sql = "INSERT INTO catergory(category) VALUES ('$category')";
		$query = mysqli_query($this->connect,$sql);
		return $query;
	}
	function allca()
	{
		$sql = "SELECT * FROM catergory ";
		$query = mysqli_query($this->connect,$sql);
		return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	function editca($category,$id)
	{
		$sql = "UPDATE catergory SET category ='$category' WHERE id = '$id'";
		$query = mysqli_query($this->connect,$sql);
		return mysqli_fetch_assoc($query);
	}
	function viewca($id)
	{
		$sql = "SELECT * FROM catergory WHERE id='$id'";
		$query = mysqli_query($this->connect,$sql);
		return mysqli_fetch_assoc($query);
	}
	function deleteca($category)
	{
		$sql = "DELETE FROM catergory,news WHERE id='$id'";
		mysqli_query($this->connect,$sql);
	}

	
}

 ?>