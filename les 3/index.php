<?php 

	if (!empty($_POST)) {
		$article = $_POST['article'];
		$sql = "insert into blogposts (article) values '$article';";
	}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>qsmdflij</title>
</head>
<body>
	
	<form action="" method="post">
		
		<textarea name="article" id="" cols="30" rows="10"></textarea>
		<button type="submit">Save article</button>

	</form>

</body>
</html>