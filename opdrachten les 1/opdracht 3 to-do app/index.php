<?php

	$to_do = 	[

					[
						"beschrijving"		=> "Huiswerk",
						"deadline"			=> 14,
						"categorie"			=> "school",
						"prioriteit"		=> "gemiddeld"

					],

					[
						"beschrijving"		=> "Voetbal",
						"deadline"			=> 3,
						"categorie"			=> "thuis",
						"prioriteit"		=> "laag"

					],

					[
						"beschrijving"		=> "Autokeuring",
						"deadline"			=> 24,
						"categorie"			=> "werk",
						"prioriteit"		=> "hoog"

					],

					[
						"beschrijving"		=> "Wandelen met de hond",
						"deadline"			=> 17,
						"categorie"			=> "thuis",
						"prioriteit"		=> "geen"

					],

					[
						"beschrijving"		=> "Betalen rekening",
						"deadline"			=> 43,
						"categorie"			=> "thuis",
						"prioriteit"		=> "hoog"

					],

					[
						"beschrijving"		=> "Naar de bank",
						"deadline"			=> 4,
						"categorie"			=> "werk",
						"prioriteit"		=> "laag"

					],

					[
						"beschrijving"		=> "Kapper",
						"deadline"			=> 18,
						"categorie"			=> "thuis",
						"prioriteit"		=> "geen"

					]

				];


	$sorteer = [];

	foreach ($to_do as $sorteren) {
		if ($sorteren['prioriteit'] == "hoog")
		{
			array_push($sorteer, $sorteren);
		}
	}
	foreach ($to_do as $sorteren) {
		if ($sorteren['prioriteit'] == "gemiddeld")
		{
			array_push($sorteer, $sorteren);
		}
	}
	foreach ($to_do as $sorteren) {
		if ($sorteren['prioriteit'] == "laag")
		{
			array_push($sorteer, $sorteren);
		}
	}
	foreach ($to_do as $sorteren) {
		if ($sorteren['prioriteit'] == "geen")
		{
			array_push($sorteer, $sorteren);
		}
	}





 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To-do app</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:100' rel='stylesheet' type='text/css'>
</head>
<body>

	<style>

		body
		{
			font-family: "Roboto";
			background-image: url("iphone.png");
			background-size: 700px;
			background-repeat: no-repeat;
			background-position: center -20px;
		}

		#screen
		{
			width: 290px;
			height: 520px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 70px;
			background-color: #D0D0D9;
			background-position: center;
			border: 3px solid black;
		}

		.deadline
		{
			font-size: 0.8em;
			margin-left: 75px;
			float: right;
			margin-top: 19px;
		}

		.description p
		{
			margin: 0;
			padding-top: 16px;
			color: white;
			margin-left: 10px;
			width: 175px;
			float: left;
		}

		.description
		{
			width: 290px;
			height: 50px;
			border-bottom: 0.5px solid #D0D0D9;
		}

		.red
		{
			background-color: #F9684D;
		}

		.yellow
		{
			background-color: #FDD51C;
		}

		.blue
		{
			background-color: #40BBE8;
		}

		.green
		{
			background-color: #3DE294;
		}

		#header
		{
			width: 290px;
			margin-bottom: -4px;
			border: 1px solid black;
		}



	</style>

	<div id="screen">

		<img src="header.jpg" alt="" id="header">

		<?php foreach ($sorteer as $t) { ?>
			
			<div class="description <?php switch ($t['prioriteit']) {
				case "hoog":
					echo "red";
					break;
				
				case "gemiddeld":
					echo "yellow";
					break;

				case "laag":
					echo "green";
					break;

				case "geen":
					echo "blue";
					break;

			}
			 ?>"><p><?php echo $t['beschrijving']; ?></p><span class="deadline"><?php echo $t['deadline'] ?> u.</span></div>
		<?php } ?>
	
	</div>

	
</body>
</html>







