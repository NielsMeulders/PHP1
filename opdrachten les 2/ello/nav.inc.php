<?php
	
	function canLogin($p_username, $p_password)
	{
		// this function only checks if a user may or may not log in
		if ($p_username == "ello" && $p_password == "letmein") {
			return true;
		}
		else
		{
			return false;
		}
	}

	function isLoggedIn()
	{
		// check if a user has previously logged in
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

	function doLogin($p_user)
	{
		// this function sets the cookie required for subsequent logins
		$salt ="DFMEIFJ35938...8!!sdmciejf";
		$content = $p_user . "," . md5($p_user.$salt);
		setcookie("loginCookie", $content, time()+60*60, "/");
	}

	if (!empty($_POST)) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		// check of user mag inloggen
		if (canLogin($username,$password)) 
		{
			doLogin($username);
			$feedback = "Welcome back!";
			header('Location: index.php');
		}
		else
		{
			$feedback = "You can't login!";
		}


	}


		
	
	

?>

<nav>
	
	<?php if (isset($feedback)): ?>
	
	<?php echo $feedback; ?>

	<?php endif ?>

	<?php if (isLoggedIn()): ?>

	<p class="welcome">Welcome back! <a href="logout.php">Log out?</a></p>

	<?php else: ?>
			
	<form action="" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>

<?php endif ?>
	
</nav>