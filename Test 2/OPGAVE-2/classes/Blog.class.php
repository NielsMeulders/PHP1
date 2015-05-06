<?php
	include_once("Db.class.php");
	class Blog
	{

		public function getAllBlogPosts()
		{
			$conn = Db::getInstance();
			$result = $conn->query("select * from AJAX_v15;");
			return $result->fetchAll();
		}

		public function getOne($p_id)
		{
			$conn = Db::getInstance();
			$statement = $conn->prepare("select * from AJAX_v15 where id = :id;");
			$statement->bindValue(':id', $p_id);
			$statement->execute();

			return $statement->fetch();
		}

	}