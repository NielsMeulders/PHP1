<?php

    $conn = new PDO('mysql:host=localhost;dbname=phples', "root", "root");
    // INSERT
    $statement = $conn->prepare("INSERT INTO cms (title, date, article) VALUES ( :title, :date, :article )");

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

</body>
</html>