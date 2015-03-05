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
</head>
<body>

    <div class="screen">

        <a href="post.php" class="button">Post article</a>

        <?php
        if(isset($result))
        {

        while($result = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
        <h1><?php echo $result['title']; ?></h1><h2 class="date_header"><?php echo $result['date']; ?></h2>

        <p><?php echo $result['article']; ?></p>

    <?php }}
        else
        { ?>
            <div class="clearfix"></div>
            <p class="feedback">There are no posts yet!</p>
        <?php }?>
    </div>

</body>
</html>