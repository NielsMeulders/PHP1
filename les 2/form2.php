<?php 

	$melding = "Geef het aantal artiesten in";

	include("artist.inc.php");


	// formulier uitlezen als er is gezocht

	if (isset($_GET['aantal'])) {
		
		$aantal = $_GET['aantal'];

	}	


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms</title>
</head>
<body>

	<style>

		body
		{
			margin-left: auto;
			margin-right: auto;
			width: 350px;
			font-family: "Helvetica Neue";
			background-color: #CCC;
		}

		.feedback
		{
			width: 300px;
			background-color: #BF4572;
			margin-bottom: 20px;
		}

		.feedback p
		{
			color: white;
			padding: 10px;
		}

	</style>

	<?php 

		if (isset($_GET['aantal'])) {
			//als een user teveel vraagt
			if ($aantal > count($arr_artist)) { 
				$melding = "Er zijn niet zoveel artiesen beschikbaar maar ik geef u het maximum aantal<br>";
				$aantal = count($arr_artist);
			}
		}

	 ?>

	<div class="feedback">

		<p><?php echo $melding; ?></p>

	</div>

	<form action="" method="get">
		
		<label for="tekstveld">Aantal artiesten?</label>
		<input type="number" id="tekstveld" name="aantal">

		<button type="submit">Search</button>

	</form>

	<div id="artists">
		
		<?php 

			if (isset($_GET['aantal'])) {

				// <a href="artist.php?id=0">Willy</a>
				for ($i=0; $i < $aantal; $i++) 
				{ 
					echo "<a href='artist.php?id=" . $i . "'>" . $arr_artist[$i]['name'] . "</a><br>";
				}			
				
			}
			

		 ?>

	</div>
	
</body>
</html>