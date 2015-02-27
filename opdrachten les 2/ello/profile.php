<?php 
	
	include('data.inc.php');
	$id = $_GET['id'];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		
	</title>
	<link rel="stylesheet" href="css/ello.css">
</head>
<body class="profile">
	
	<div class="profile_details">
		<img src="<?php echo $users[$id]['picture'] ?>" alt="<?php echo $users[$id]['name'] ?>">	
		<h1><?php echo $users[$id]['name'] ?></h1>
		<p><?php echo $users[$id]['bio'] ?></p>
	</div>
</body>
</html>