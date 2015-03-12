<?php

    include_once('classes/Post.class.php');
    $p = new Post();
    $allposts = $p->getAll();

    if(!empty($_POST))
    {
        try
        {
            $p->Text = $_POST['post'];
            $p->User = "Niels Meulders";

            $p->save();
        }
        catch( Exception $e)
        {
            $error = $e->getMessage();
        }
        header('location:index.php');

    }

?>


<!doctype html>
<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>
</head>
<body>

    <div class="screen">

        <?php if(isset($error)): ?>
        <div class="error"></div>
        <?php endif; ?>

        <form action="" method="post">

            <p class="center"><textarea type="text" id="post" name="post"/></textarea></p>

            <button id="post_btn">Post!</button>

        </form>

        <?php

        while($row = $allposts->fetch(PDO::FETCH_ASSOC)) {

            echo $row['username'] .": " . $row['text'] . "<br>";

        }

        ?>

    </div>

</body>
</html>