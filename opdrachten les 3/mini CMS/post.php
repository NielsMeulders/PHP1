<?php

    if(!empty($_POST))
    {
        if (empty($_POST['title']) && empty($_POST['article']))
        {
            $feedback = "Fill in all the fields";
            $success_feedback = false;
        }
        else
        {
            $title = $_POST['title'];
            $article = $_POST['article'];
            $date = date("d/m/y");


            $conn = new PDO('mysql:host=localhost;dbname=phples', "root", "root");
            // INSERT
            $statement = $conn->prepare("INSERT INTO cms (title, date, article) VALUES ( :title, :date, :article )");
            $statement->bindParam(':title', $title);
            $statement->bindParam(':date', $date);
            $statement->bindParam(':article', $article);
            $statement->execute();

            $feedback = "Your article is posted!";
            $success_feedback = true;
        }

    }



?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Post - My CMS</title>
    <link rel="stylesheet" href="style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
</head>
<body>

    <div class="screen">

        <a href="index.php" class="button">Go back!</a>

        <?php if(isset($feedback)){
            if ($success_feedback)
            {
                echo '<p id="feedback_form" class="green">'.$feedback.'</p>';
            }
            else
            {
                echo '<p id="feedback_form" class="red">'.$feedback.'</p>';
            }

        } ?>


        <form action="" method="post">

            <p><label for="title">Title:</label></p>
            <p><input type="text" id="title" name="title" placeholder="Title here"/></p>

            <p><label for="article">Article:</label></p>
            <p><textarea name="article" id="article" cols="30" rows="10" placeholder="Write your article here"></textarea></p>

            <button id="button_send">Send!</button>

        </form>

    </div>

</body>
</html>