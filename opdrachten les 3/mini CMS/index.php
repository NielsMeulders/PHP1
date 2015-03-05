<?php

    $conn = new PDO('mysql:host=localhost;dbname=phples', "root", "root");
    // INSERT
    $statement = $conn->prepare("SELECT * FROM cms");
    $statement->execute();


?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>My CMS</title>
    <link rel="stylesheet" href="style.css"/>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
</head>
<body>

    <div class="screen">

        <a href="post.php" class="button">Post article</a>

        <?php
        if($statement->rowCount()>0)
        {
        while($result = $statement->fetch(PDO::FETCH_ASSOC)){ ?>

            <div class="post">
                <h1><?php echo $result['title']; ?></h1><h2 class="date_header"><?php echo $result['date']; ?></h2>

                <p><?php echo $result['article']; ?></p>
            </div>

        <?php }}
        else
        { ?>
            <div class="clearfix"></div>
            <p class="feedback">There are no posts yet!</p>
        <?php }?>
    </div>

</body>
</html>