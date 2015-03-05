<?php



    /*$conn = new PDO('mysql:host=localhost;dbname=phples', "root", "root");
    // INSERT
    $statement = $conn->prepare("INSERT INTO cms (title, date, article) VALUES ( :firstname, :name, :twitter )");
    $statement->bindParam(':firstname', $this->Firstname);
    $statement->bindParam(':name', $this->Name);
    $statement->bindParam(':twitter', $this->Twitter);
    $statement->execute();*/

?>

<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Post - My CMS</title>
</head>
<body>

    <a href="index.php">Go back!</a>

    <form action="" method="post">

        <label for="title">Title:</label>
        <input type="text" id="title" name="title"/>

        <label for="article">Article:</label>
        <textarea name="article" id="article" cols="30" rows="10"></textarea>

    </form>

</body>
</html>