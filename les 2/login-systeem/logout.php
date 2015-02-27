<?php 

	setcookie("loginCookie", "", time()-3600);
	header('location: login.php');

 ?>