<?php

    include_once("classes/Booking.class.php");
    $b = new Booking();
    $allBookings = $b->getAll();

    if(!empty($_POST))
    {
        try
        {
            $b->FirstName = $_POST['firstname'];
            $b->LastName = $_POST['lastname'];
            $b->Hotel = $_POST['hotel'];
            $b->CheckinDay = $_POST['checkinday'];
            $b->CheckinMonth = $_POST['checkinmonth'];
            $b->CheckoutDay = $_POST['checkoutday'];
            $b->CheckoutMonth = $_POST['checkoutmonth'];

            $b->Save();
        }
        catch( Exception $e)
        {
            $error = $e->getMessage();
        }

    }


	
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Voorbereiding test</title>
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/screen.css" />
</head>
<body>
<div>

    <?php if (isset($error)): ?>
    <div class="error">
        <?PHP echo $error; ?>
    </div>
    <?php endif; ?>

	<div class="feedback">Gelieve alle velden in te vullen</div>

	<form method="post" action="">
		<fieldset>
		<legend>Book-a-hotel</legend>
			<label for="firstname">First Name</label>
			<input class="enlarge" type="text" id="firstname" name="firstname" />
			
			<label for="lastname">Last Name</label>
			<input class="enlarge" type="text" id="lastname" name="lastname" />
		
			<label for="hotel">Pick a hotel</label>
			<select class="enlarge" name="hotel" id="hotel">
				<option value="luxury">IMD Luxury Mechelen</option>
				<option value="medium">IMD Medium Mechelen</option>
				<option value="cheapo">IMD Cheapo Mechelen</option>
			</select>
			
			<label for="checkinday">Check-in date</label>
			<select class="enlarge" id="checkinday" name="checkinday">
				<option value="1">mo 1</option>
				<option value="2">tu 2</option>
				<option value="3">we 3</option>
				<option value="4">th 4</option>
				<option value="5">fr 5</option>
				<option value="6">sa 6</option>
				<option value="7">su 7</option>
			</select>
			
			<select class="enlarge" id="checkinmonth" name="checkinmonth">
				<option value="1">january</option>
				<option value="2">february</option>
				<option value="3">march</option>
				<option value="4">april</option>
				<option value="5">may</option>
				<option value="6">june</option>
				<option value="7">july</option>
				<option value="8">august</option>
				<option value="9">september</option>
				<option value="10">october</option>
				<option value="11">november</option>
				<option value="12">december</option>
			</select>
			
			<label for="checkoutday">Check-out date</label>
			<select class="enlarge" id="checkoutday" name="checkoutday">
				<option value="1">mo 1</option>
				<option value="2">tu 2</option>
				<option value="3">we 3</option>
				<option value="4">th 4</option>
				<option value="5">fr 5</option>
				<option value="6">sa 6</option>
				<option value="7">su 7</option>
			</select>
			
			<select class="enlarge" id="checkoutmonth" name="checkoutmonth">
				<option value="1">january</option>
				<option value="2">february</option>
				<option value="3">march</option>
				<option value="4">april</option>
				<option value="5">may</option>
				<option value="6">june</option>
				<option value="7">july</option>
				<option value="8">august</option>
				<option value="9">september</option>
				<option value="10">october</option>
				<option value="11">november</option>
				<option value="12">december</option>
			</select>
		
			<br />
		
			<input class="submit" type="submit" id="btnSubmit" value="Confirm reservation" />
		
		</fieldset>
	</form>

    <?php

    while($row = $allBookings->fetch(PDO::FETCH_ASSOC)) {

        echo "Who: " . $row['booking_first_name'] . "<br>";

    }

    ?>

</div>
</body>
</html>