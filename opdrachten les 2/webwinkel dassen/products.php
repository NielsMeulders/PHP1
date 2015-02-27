<?php 
	
	session_start();
	include("include.products.php");
	include('card.inc.php');

	if (isset($_SESSION))
	{
		
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Producten</title>
</head>
<body>

	<style>

		body
		{
			font-family: 'calibri';
			background-color: #CCC;
			width: 750px;
			margin-left: auto;
			margin-right: auto;
		}

		img
		{
			width: 150px;
		}

		a:link,
		a:visited,
		a:hover,
		a:active
		{
			text-decoration: none;
			color: #333333;
			padding: 10px;
			border: 1px solid #333333;
			-webkit-transition: color .5s, background-color .5s;
		}

		a:hover
		{
			background-color: #333333;
			color: white;
		}

		.link
		{
			margin-top: 40px;
		}

		.product
		{
			background-color: white;
			display: block;
			width: 180px;
			text-align: center;
			border-radius: 10%;
			padding: 10px 25px;
			float: left;
			margin: 20px 10px;
		}

		h1
		{
			text-align: center;
			text-decoration: underline;
			color: #333333;
		}

	</style>
	
	<h1>Producten</h1>
	
	<?php 

		for ($i=0; $i < count($arr_ties); $i++) {
		
	?>
	<div class="product">

		<h2><?php echo $arr_ties[$i]['name'] . " €" . $arr_ties[$i]['price']; ?></h2>
		<img src="<?php echo $arr_ties[$i]['image'] ?>" alt="Picture tie">
		<p class="link"><a href="detail.php?product=<?php echo $i; ?>">More info</a></p>

	</div>

	<?php } ?>

</body>
</html>