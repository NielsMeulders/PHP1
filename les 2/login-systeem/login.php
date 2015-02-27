<?php 

	function canLogIn($p_username, $p_password)
	{
		if ($p_username == "ello" && $p_password == "letmein") {
			return true;
		}
		else
		{
			return false;
		}
	}

	function doLogin($p_username)
	{
		// cookie plaatsen (onthouden)
		//$salt ="DFMEIFJ35938...8!!sdmciejf";
		//$content = $p_username . "," . md5($p_username.$salt);
		//setcookie("loginCookie", $content, time()+60*60);

		session_start();
		$_SESSION['loggedin'] = 'yes';

		// ga naar andere pagina
	}

	function isLoggedIn()
	{
		// als er een cookie is
		$salt ="DFMEIFJ35938...8!!sdmciejf";
		if (isset($_COOKIE['loginCookie'])) 
		{
			$cookie = $_COOKIE['loginCookie'];
			$cookie_exploded = explode(",", $cookie);
			if (md5($cookie_exploded[0] . $salt) == $cookie_exploded[1]) {
				return true;
			}

			
		}
		else
		{
			return false;
		}
	}

	// controleer of er gepost is
	if (!empty($_POST)) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// check of user mag inloggen
		if (canLogIn($username,$password)) 
		{
			doLogin($username);
			$feedback = "Welcome back!";
		}
		else
		{
			$feedback = "You can't login!";
		}

	}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

	<style>

		body
		{
			font-family: "arial";
		}
	
	</style>

	
	<h1>Login form</h1>

	<?php if (isset($feedback)) : ?>
	<p class="feedback"><?php echo $feedback ?></p>
	<?php endif; ?>
	
	<?php if (!isLoggedIn()): ?>

	<form action="" method="post">
		
		<label for="username">Username: </label>
		<input type="text" id="username" name="username">

		<label for="password">Password: </label>
		<input type="password" id="password" name="password">

		<button type="submit">Login!</button>

	</form>

	<?php else: ?>

	<p>Welcome back!</p>
	<a href="logout.php">Log out</a>

	<?php endif ?>

</body>
</html>