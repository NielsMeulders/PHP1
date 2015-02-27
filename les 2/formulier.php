<?php 

	if (isset($_GET['q'])) {
			$query = $_GET['q'];
		}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>

	<?php 

		if (isset($_GET['q'])) {
			echo "Resultaten voor <em>" . $query . "</em>";
		}
		

	 ?>
	
	<form action="" method="get">
			
		<label for="query">Search term</label>
		<input type="text" name="q" id="query">

		<button type="submit">Go</button>

	</form>

</body>
</html>