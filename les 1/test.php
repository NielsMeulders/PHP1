<?php 

	//one rule of comments
	/*
	multiple rules of comments
	*/

	$page_name = "Steve Jobs";
	$page_likes = 40245;
	$page_contact = "";


?>

<html>

<head></head>

<body>

	<h1><?php echo $page_name; ?></h1>

	<?php 

		echo "Hi $page_name";
		echo "<br>";
		echo 'Hi $page_name';

	?>

</body>

</html>