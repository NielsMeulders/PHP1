<?php 

	session_start();
	include('include.products.php');
	include('card.inc.php');
	

	$id = $_GET['product'];

	
	if (isset($_SESSION['cart']))
	{
		$cart = $_SESSION['cart'];
	}
	else
	{
		$cart = array();
	}

	if (!empty($_POST)) 
	{
		array_push($cart, $id);
		$_SESSION['cart'] = $cart;

	}
	

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $arr_ties[$id]['name'] ?></title>
</head>
<body>

	<style>
		
		body
		{
			background-color: #CCCCCC;
			font-family: 'calibri';
		}

		img
		{
			width: 150px;
		}

		.product
		{
			background-color: white;
			display: block;
			width: 200px;
			text-align: center;
			border-radius: 10%;
			padding: 10px 25px;
			margin-left: auto;
			margin-right: auto;
		}

		.button_back:link,
		.button_back:visited,
		.button_back:hover,
		.button_back:active
		{
			text-decoration: none;
			color: white;
			background-color: #333333;
			padding: 10px 20px;
			border: 1px solid #333333;
			margin-top: 10px;
			-webkit-transition: color .5s, background-color .5s;
		}

		.button_back:hover
		{
			background-color: transparent;
			color: #333333;
		}

		button.buy
		{
			background-color: transparent;
			text-decoration: none;
			color: #333333;
			padding: 10px;
			border: 1px solid #333333;
			-webkit-transition: color .5s, background-color .5s;
			font-size: .8em;
		}

		button.buy:hover
		{
			color: white;
			background-color: #333333;
		}


	</style>

	<p><a class="button_back" href="products.php">< Back to store</a></p>

	<div class="product">
		
		<h2><?php echo $arr_ties[$id]['name']; ?></h2>

		<img src="<?php echo $arr_ties[$id]['image'] ?>" alt="Picture tie">

		<p>Price: €<?php echo $arr_ties[$id]['price'] ?></p>
		
		<form action="" method="post">
			<input type="hidden" name="foo" value="<?php echo $id;?>" />
			<button class="buy" type="submit">Buy now!</button>
		</form>

	</div>
	
	
</body>
</html>