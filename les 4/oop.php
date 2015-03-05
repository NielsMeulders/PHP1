<?php 

    if(!empty($_POST))
    {
        try{
            spl_autoload_register(function($class){
                include_once("classes/".$class.".class.php");
            });

            $s = new Student();
            $s->Name = $_POST['name'];
            $s->Firstname = $_POST['firstname'];
            $s->Twitter = $_POST['twitter'];
            $s->Save();
        }
        catch (Exception $e)
        {
            $error = $e->getMessage();
        }
    }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OOP</title>
</head>
<body>

    <?php if(isset($error)): ?>
    <div class="error" style="background-color: red; color: white;"><?php echo $error ?></div>
    <?php endif; ?>

    <h1>Please sign up</h1>

    <form action="" method="post">

        <label for="name">Name</label>
        <input type="text" id="name" name="name"/>

        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" name="firstname"/>

        <label for="twitter">Twitter</label>
        <input type="text" id="twitter" name="twitter"/>

        <button type="submit">Sign me up!</button>



    </form>

</body>
</html>