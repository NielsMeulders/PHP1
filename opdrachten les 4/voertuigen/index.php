<?php

    try{
        spl_autoload_register(function($class){
            include_once("classes/".$class.".class.php");
        });

        $s = new sportwagen();
        $s->Merk = "Renault";
        $s->AantalPassagiers = 5;
        $s->AantalDeuren = 5;
        $s->Reserveer();

        echo $s;
    }
    catch (Exception $e)
    {
        $error = $e->getMessage();
    }

?>


<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Voertuigen</title>
</head>
<body>

    <p id="errors"><?PHP echo $error; ?></p>

</body>
</html>