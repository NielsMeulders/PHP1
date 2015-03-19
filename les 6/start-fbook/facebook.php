<?php 
	//Eerst bouwen we onze applicatie uit zodat ze werkt, ook zonder JavaScript

	include_once("classes/Activity.class.php");
	$activity = new Activity();
	
	//controleer of er een update wordt verzonden
	if(!empty($_POST['activitymessage']))
	{
		$activity->Text = $_POST['activitymessage'];
		try 
		{
			$activity->Save();
		} 
		catch (Exception $e)
		{
			$feedback = $e->getMessage();
		}
	}
	
	//altijd alle laatste activiteiten ophalen
	$recentActivities = $activity->GetRecentActivities();
	
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IMDBook</title>
<link href="css/reset.css" rel="stylesheet" />
<style type="text/css">
body
{
	font-family: "Lucida Grande", Tahoma, Verdana, sans-serif;
}

h1
{
	margin-bottom: 5px;
}

h2
{
	color: #3b5998;
	display: inline;
}

ul
{
	margin-top: 10px;
}

ul li
{
	border-bottom: 1px dotted #fff;
	padding: 15px 5px;
}

#activitymessage
{
	border: 1px solid #bbbbbb;
	padding: 5px;
	width: 280px;
	font-size: 1.1em;
}

div.statusupdates
{
	width: 380px;
	background-color: #ccc;
	padding: 20px;
	margin: 0 auto;
}

#btnSubmit
{
	background-color: #627aac;
	color: #fff;
	font-size: 1.1em;
	border: 1px solid #29447e;
}

div.errors
{
	width: 380px;
	margin: 25px auto;
	background-color: #bd273a;
	-moz-border-radius: 10px;
	color: white;
	font-weight: bold;
	text-shadow: 1px 1px 1px #000;
	padding: 20px;
	display:none;
}
</style>
<script type="text/javascript">


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<div>
	<div class="errors"></div>
	
	<form method="post" action="">
		<div class="statusupdates">
		<h1>GoodBytes.be</h1>
		<input type="text" value="What's on your mind?" id="activitymessage" name="activitymessage" />
		<input id="btnSubmit" type="submit" value="Share" />
		
		<ul id="listupdates">
		<?php 
			if(mysqli_num_rows($recentActivities) > 0)
			{		
				while($singleActivity = mysqli_fetch_assoc($recentActivities))
				{
					echo "<li><h2>GoodBytes.be</h2> ". $singleActivity['activity_description'] ."</li>";
				}
			}
			else
			{
				echo "<li>Waiting for first status update</li>";	
			}
		?>
		</ul>
		
		</div>
	</form>

    <script>

        $(document).ready(function(){
            // 1 - click op button
            $("#btnSubmit").on("click", function(e){
                // 2 - value uit form lezen
                var text = $("#activitymessage").val();

                // 3 - AJAX call richting ajax/save_activity.php
                $.ajax({
                    method: "POST",
                    url: "ajax/save_activity.php",
                    data: { 'text' : text }
                })
                    .done(function( resp ) {
                        //alert( "Data Saved: " + resp );
                        //console.log(resp);
                        if(resp.status === "success")
                        {
                            // 4 - indien success> slideDown()
                            var li = $("<li></li>").html("<h2>GoodBytes.be</h2> "+ resp.text).css("display","none");
                            $("#listupdates").prepend(li);
                            li.slideDown("fast");

                            //$("#listupdates li").last().slideUp("fast", function(){
                                //$(this).remove();
                            //});
                        }
                    });

                e.preventDefault();
            });
        });

    </script>
	
</div>	
</body>
</html>