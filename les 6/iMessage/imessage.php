<?php
	session_start();
	if(isset( $_SESSION['name'] ))
	{
		$currentUser = $_SESSION['name'];
	}
	else
	{
		// users needs to login first
		header("location: login.php");
	}

	include_once("classes/Message.class.php");
	$m = new Message();
	if( !empty($_POST) )
	{	
		try {
			$m = new Message();
			$m->setText($_POST['text']);
			$m->setUser($currentUser);
			$m->Create();
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
	}
	$all_messages = $m->GetAllMessages();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>iMessage</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="chat">
		
		<section class="messages">
			<?php
				while( $message = $all_messages->fetch(PDO::FETCH_OBJ) )
				{
					echo "<article>";
					if( $message->user === $currentUser )
					{
						echo "<article class='me'>" . $message->text . "</article>";
					}
					else
					{
						echo "<article class='them'>" . $message->text . "</article>";	
					}
					echo "</article>";
				}
			?>
		</section>

		<section class="newMessage">
			<form action="" method="post">
			<input type="text" class="imessage" placeholder="iMessage" name="text">
			<button type="submit" value="Send">Send</button>
			</form>
		</section>
	</div>

</body>
</html>