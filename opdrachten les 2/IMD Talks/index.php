<?php 
	
	session_start();
	if (isset($_POST['btnSignup'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$account = [$name,$email,$password];
		$_SESSION['user'] = $account;
	}

	if (isset($_POST['btnLogin'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($_SESSION['user'][1] == $username && $_SESSION['user'][2] == $password) {
			
			$_SESSION['loggedin'] = 1;

		}
	}


 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMD Talks</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/twitter.css">
	
</head>
<body>
	<nav>
		<?php if(isset($_SESSION['loggedin'])): ?>
			<a href="logout.php">Logout</a>
		<?php else: ?>
			<a href="index.php">Login</a>
		<?php endif; ?>
	</nav>

	<header>
		<h1>Welcome to IMD-Talks</h1>
		<h2>Find out what other IMD'ers are building around you.</h2>
	</header>
	
	<div id="rightside">

	<?php if (isset($_SESSION['user'])): ?>
	
		<?php if (isset($_SESSION['loggedin'])): ?>

		<div class="feedback">Welcome <?php echo $_SESSION['user'][0] ?></div>

		<?php else: ?>
		
		<section id="login">
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" name="username" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="checkbox" name="rememberme" value="yes" id="rememberme">
			<label for="rememberme">Remember me</label>

			<input type="submit" name="btnLogin" value="Sign in" />
			</form>
			
		</section>

		<?php endif ?>

	<?php else: ?>
	
	<section id="signup">
	
		<h2>New to IMD-Talks? <span>Sign Up</span></h2>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="name" placeholder="Full name" />
		<input type="email" name="email" placeholder="Email" />
		<input type="password" name="password" placeholder="Password" />
		<input type="submit" name="btnSignup" value="Sign up for IMD Talks" />
		</form>
		
	</section>

	<?php endif ?>
	</div>	
	
</body>
</html>