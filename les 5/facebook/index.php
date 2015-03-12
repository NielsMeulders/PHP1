<?php

    include_once('classes/Post.class.php');
    $p = new Post();
    $allposts = $p->getAll();

    if(!empty($_POST))
    {
        try
        {
            $p->Text = $_POST['post'];

            $p->save();
        }
        catch( Exception $e)
        {
            $error = $e->getMessage();
        }

    }

?>


<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
</head>
<body>

    <form action="" method="post">

        <label for="post">Post: </label>
        <input type="text" id="post" name="post"/>

        <button>Post!</button>

    </form>

    <?php

    while($row = $allposts->fetch(PDO::FETCH_ASSOC)) {

        echo $row['text'] . "<br>";

    }

    ?>

</body>
</html>