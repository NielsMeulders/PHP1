<?php 

	$pad = $_SERVER['SCRIPT_NAME'];

?>

<nav>
	
	<li><a <?php if (stripos($pad, "home.php")){echo 'class="onpage"';} ?> href="home.php">Home</a></li>
	<li><a <?php if (stripos($pad, "contact.php")){echo 'class="onpage"';} ?> href="contact.php">Contact</a></li>

</nav>

<div class="clearfix"></div>

<style>

	body
	{
		font-family: "helvetica neue";
	}

	.clearfix
	{
		clear: both;
	}

	nav
	{
		width: 240px;
		margin-left: auto;
		margin-right: auto;
	}
	
	nav li
	{
		list-style: none;
	}

	nav li a:link,
	nav li a:visited,
	nav li a:hover,
	nav li a:active
	{
		color: white;
		text-decoration: none;
		text-transform: uppercase;
		background-color: #D6DBDF;
		width: 100px;
		height: 50px;
		text-align: center;
		padding-top: 30px;
		display: block;
	}

	nav li a:hover
	{
		text-decoration: underline;
	}

	a:link.onpage,
	a:visited.onpage,
	a:hover.onpage,
	a:active.onpage
	{
		background-color: #1ABC9C;
		color: white;
	}

	nav li
	{
		float: left;
		margin-left: 10px;
		margin-right: 10px;
	}

</style>

