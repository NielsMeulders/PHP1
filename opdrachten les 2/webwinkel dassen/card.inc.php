<?php 
	
	if (isset($_SESSION['cart'])) {
		$ccart = $_SESSION['cart'];
	}
	


 ?>


 <div class="cart">
 	<h3 class="center">Producten in winkelwagen:</h3>
<?php 

	if (isset($_SESSION['cart'])) {

		foreach ($ccart as $c) {

		?>
	
	<p>Product: <?php echo $arr_ties[$c]['name'] . " €" . $arr_ties[$c]['price']; ?></p>

 <?php }}
 	else {
 		
 	  ?>

 	<p class="center">Uw winkelwagen is leeg!</p>
 	<p class="center"><img src="http://dlahn.com/design/cart_empty.gif" alt=""></p> 

 <?php } ?>

 </div>

 <style>

	.cart
	{
		position: fixed;
		right: 0;
		background-color: white;
		width: 250px;
		height: 250px;
		border-radius: 10%;
		overflow: overlay;
		opacity: .6;
	}

	.cart p
	{
		padding: 0 20px;
	}

	.center
	{
		text-align: center;
	}

	.button_cart
	{
		position: fixed;
		right: 100px;
		top: 270px;
	}

 </style>