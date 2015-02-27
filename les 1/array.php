<?php

	$arr_posts = 	[
						[
							"username" 	=> "David Heerinckx",
							"picture"	=> "https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg",
							"text"		=> "Nice ... scrollen",
							"likes"		=> 89
						],

						[
							"username" 	=> "Joris Hens",
							"picture"	=> "https://s3.amazonaws.com/uifaces/faces/twitter/geeftvorm/128.jpg",
							"text"		=> "PHP first lesson!",
							"likes"		=> 122
						],

						[
							"username" 	=> "Niels Meulders",
							"picture"	=> "https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg",
							"text"		=> "Eerste post",
							"likes"		=> 233
						]
					];

	$arr_fruit = array('ananas', 'appel', 'druif');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timeline</title>

	<style>

		body
		{
			width: 100%;
		}

		.post
		{
			width: 500px;
			font-family: 'Helvetica Neue';

		}

		.post a:link,
		.post a:visited,
		.post a:hover,
		.post a:active
		{
			color: #49639E;
			text-decoration: none;
		}

		.post a:hover
		{
			text-decoration: underline;
		}

		.post img
		{
			width: 100px;
			float: left;
			padding: 20px;
			padding-top: 0;
		}

		.post p
		{
			margin-left: 100px;
		}

		.post span
		{
			margin-left: 20px;
			font-size: 0.9em;
			text-decoration: underline;
			color: #49639E;
		}

		.clearfix
		{
			clear: both;
		}

	</style>
</head>
<body>

	<?php foreach ($arr_posts as $p) { ?>

	<div class="post">
		
		<img src="<?php echo $p['picture']; ?>" alt="Foto">
		<a href="#"><?php echo $p['username']; ?></a>
		<p><?php echo $p['text']; ?></p>
		<p><span><?php echo $p['likes']; ?> people</span> like this</p>
		<div class="clearfix"></div>

	</div>

	<?php } ?>
	
</body>
</html>