<?php

    if (!empty($_POST))
    {
        try{
            spl_autoload_register(function($class){
                include_once("classes/".$class.".class.php");
            });

            $type = $_POST['type'];

            switch ($type)
            {
                case 1:
                    $v = new sportwagen();
                    break;

                case 2:
                    $v = new vrachtwagen();
                    break;
            }


            $v->Merk = $_POST['merk'];
            $v->AantalPassagiers = $_POST['aantal_passagiers'];
            $v->AantalDeuren = $_POST['aantal_deuren'];

            echo $v;
        }
        catch (Exception $e)
        {
            $error = $e->getMessage();
        }
    }

?>


<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Voertuigen</title>
</head>
<body>

    <?php if (isset($error)): ?>
        <p id="errors"><?PHP echo $error; ?></p>
    <?php endif ?>

    <form action="" method="post">

        <label for="type">Type:</label>
        <select id="type" name="type">
            <option value="1">Sportwagen</option>
            <option value="2">Vrachtwagen</option>
        </select>

        <label for="merk">Merk: </label>
        <input type="text" id="merk" name="merk"/>

        <label for="aantal_passagiers">Aantal passagiers: </label>
        <input type="text" id="aantal_passagiers" name="aantal_passagiers"/>

        <label for="aantal_deuren">Aantal deuren: </label>
        <input type="text" id="aantal_deuren" name="aantal_deuren"/>

        <button>Voeg toe!</button>


    </form>

</body>
</html>