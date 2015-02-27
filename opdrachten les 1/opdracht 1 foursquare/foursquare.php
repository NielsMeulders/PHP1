<?php

	$arr_posts = 	[
						[
							"profilepicture"	=> "https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg",
							"name"		=> "Theresa W.",
							"place"		=> "East River Park",
							"city"		=> "Brooklyn, NY",
							"picture"	=> "http://upload.wikimedia.org/wikipedia/commons/1/16/East_River_Park_promenade_2.jpg",
							"old"		=> false
						],

						[
							"profilepicture"	=> "https://s3.amazonaws.com/uifaces/faces/twitter/brynn/128.jpg",
							"name"		=> "Nina M.",
							"place"		=> "Rubyrosa",
							"city"		=> "New York, NY",
							"old"		=> false
						],

						[
							"profilepicture"	=> "https://s3.amazonaws.com/uifaces/faces/twitter/jina/128.jpg",
							"name"		=> "Sean B.",
							"place"		=> "Blue Bottle Coffee",
							"city"		=> "South of Market, San Francisco",
							"old"		=> true
						]
					];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foursquare</title>

	<style>

		body
		{
			font-family: 'helvetica neue';
			width: 320px;
			margin-left: auto;
			margin-right: auto;
		}

		.profilepic
		{
			width: 50px;
			border-radius: 100px;
			float: left;
		}

		.image
		{
			width: 250px;
		}

		.right
		{
			margin-left: 70px;
		}

		.name, .place
		{
			color: #00B5DE;
		}

		.name
		{
			font-size: 0.9em;
			margin-bottom: -20px;
		}

		.place
		{
			font-size: 1.2em;
			margin-bottom: -15px;
		}

		.city
		{
			font-size: 0.8em;
		}

		.post
		{
			border-bottom: 1px solid #CCC;
			width: 320px;
			background-color: white;
		}

		#header
		{
			width: 320px;
		}

	</style>
</head>
<body>

	<img id="header" src="header.jpg" alt="">

	<!-- om te testen: -oude checkins weergeven: 'true' 
					   -nieuwe checkins weergeven: 'false'
					   -alles weergeven: 'if' weglaten-->

	<?php foreach ($arr_posts as $p) {
		//if ($p['old'] == false){?>

	<div class="post">
		
		<img class="profilepic" src="<?php echo $p['profilepicture']; ?>" alt="Foto">
		<div class="right">
			<p class="name"><?php echo $p['name']; ?></p>
			<p class="place"><?php echo $p['place']; ?></p>
			<p class="city"><?php echo $p['city']; ?></p>
			<img class="image" src="<?php if (isset($p['picture'])){echo $p['picture'];} ?>"<?php if (isset($p['picture'])){echo 'alt="Foto"';} ?>>
		</div>
		<div class="clearfix"></div>

	</div>

	<?php }//} ?>
	
</body>
</html>