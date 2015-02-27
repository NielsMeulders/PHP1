<?php 

	if (!empty($_POST)) {
		$salt = "DMIqsegmiF§MEIfjé2";
		$username = $_POST['username'];
		$options = [ 'cost' => 12,];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT, $options); // php 5.5

		$conn = new mysqli("localhost", "root", "root", "phples");
		if (!$conn->connect_errno) {
			$query = "INSERT INTO users (username, password) VALUES ('".$conn->real_escape_string($username)."','".$password."')";
			if ($conn->query($query)) {
				
				$feedback = "Welcome aboard!";

			}
		}

	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign up for an account</title>
</head>
<body>
	
	<h1>
		
		<?php if (isset($feedback)) {
			echo $feedback;
		}
		else
		{
			echo "Please sign up!";
		} ?>

	</h1>
	<form action="" method="post">
		
		<label for="username">Username: </label>
		<input type="text" id="username" name="username">

		<label for="password">Password: </label>
		<input type="password" id="password" name="password">

		<button type="submit">Sign up!</button>

	</form>

</body>
</html>