<?php
	include_once('Connection.php');
	class Category
	{
		var $conn;
		function __construct(){
			$object= new Connection();
			$this->conn=$object->conn;
		}
		function list()
		{
			$query="SELECT * FROM category";

			// Thá»±c thi cÃ¢u lá»‡nh truy váº¥n CSDL
			$result= $this->conn->query($query);
			$cats=array();
			while ($row=$result->fetch_assoc())  {
				$cats[]=$row;
			}
			return $cats;
		}
		function listtop()
		{
			$query="SELECT * FROM category ORDER BY RAND()  LIMIT 3";

			// Thá»±c thi cÃ¢u lá»‡nh truy váº¥n CSDL
			$result= $this->conn->query($query);
			$catstop=array();
			while ($row=$result->fetch_assoc())  {
				$catstop[]=$row;
			}
			return $catstop;
		}
		function find($id){
			$query="SELECT * FROM category WHERE id= ".$id;
			$result= $this->conn->query($query)->fetch_assoc();
			return $result;
		}
		function insert($data)
		{
			$query="INSERT INTO category(name, description, image)
				values('".$data['name']."','".$data['description']."','".$data['image']."')";
			$result= $this->conn->query($query);
			return $result;
		}
		function update($data,$id)
		{
			$query="UPDATE category SET name='".$data['name']."',description='".$data['description']."',image='".$data['image']."' WHERE id=".$id;
			$result= $this->conn->query($query);
			return $result;
		}
		function delete($id){
			$query= "DELETE FROM category WHERE id=".$id;
			$result= $this->conn->query($query);
			return $result;
		}
	}
?>