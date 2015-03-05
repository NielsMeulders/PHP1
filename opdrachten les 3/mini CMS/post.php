<?php

    if(!empty($_POST))
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
    }



?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Post - My CMS</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

    <div class="screen">

        <a href="index.php" class="button">Go back!</a>

        <div class="feedback"><?php if(isset($feedback)){echo $feedback;} ?></div>

        <form action="" method="post">

            <label for="title">Title:</label>
            <input type="text" id="title" name="title"/>

            <label for="article">Article:</label>
            <textarea name="article" id="article" cols="30" rows="10"></textarea>

            <button id="button_send">Send!</button>

        </form>

    </div>

</body>
</html>