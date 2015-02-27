<?php 

	if (!empty($_POST)) {
		$salt = "DMIqsegmiF§MEIfjé2";
		$username = $_POST['username'];
		$password = $_POST['password'];

		// connectie maken met database
		// @ gebruiken om fouten onbeschikbaar te maken
		$conn = new mysqli("localhost", "root", "root", "phples");
		if (!$conn->connect_errno) {
			//connectie is ok
			$query = "SELECT * FROM users WHERE username = '".$conn->real_escape_string($username)."';";
			$result = $conn->query($query);
			// echo $query;
			// check of password_verify(wachtwoord) == hash
			$row_hash = $result->fetch_array();
			if (password_verify($password, $row_hash['password'])) 
			{
				echo "Welcome!";
			}
			else
			{
				echo "Go away!";
			}
		}
	}

	/*

	
	
	*/

	
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	
	<h1>Login</h1>

	<form action="" method="post">
		
		<label for="username">Username: </label>
		<input type="text" id="username" name="username">

		<label for="password">Password: </label>
		<input type="password" id="password" name="password">

		<button type="submit">Sign up!</button>

	</form>

</body>
</html>