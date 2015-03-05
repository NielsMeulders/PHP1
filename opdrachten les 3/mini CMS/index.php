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

<a href="post.php">Post article</a>

<div class="screen">

    <?php while($result = $statement->fetch(PDO::FETCH_ASSOC)){ ?>
    <h1><?php echo $result['title']; ?></h1><h2 class="date_header"><?php echo $result['date']; ?></h2>

    <p><?php echo $result['article']; ?></p>
    <?php } ?>
</div>

</body>
</html>