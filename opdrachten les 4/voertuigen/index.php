<?php

    try{
        spl_autoload_register(function($class){
            include_once("classes/".$class.".class.php");
        });


        $v->Merk = "Mercedes";
        $v->AantalPassagiers = 2;
        $v->AantalDeuren = 5;

        $v->Reserveer();
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

    <?php if (isset($error)): ?>
        <p id="errors"><?PHP echo $error; ?></p>
    <?php endif ?>



</body>
</html>