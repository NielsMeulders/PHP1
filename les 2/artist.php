<?php 

	include("artist.inc.php");


	// haal artist id uit url
	$id = $_GET['id'];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Artist <?php echo $arr_artist[$id]['name'] ?></title>
</head>
<body>

	<style>

		img
		{
			width: 200px;
		}
	
	</style>

	<h1><?php echo $arr_artist[$id]['name'] ?></h1>
	<img src="<?php echo $arr_artist[$id]['picture'] ?>" alt="Artist picture">

	<p><a href="form2.php">Terug naar begin</a></p>
	
</body>
</html>