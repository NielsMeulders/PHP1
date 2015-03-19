<?php

    include_once("classes/Product.class.php");
    $p = new Product();
    $allProducts = $p->getAll();

    if(!empty($_POST))
    {
        try
        {
            $p->Name = $_POST['name'];
            $p->HowMany = $_POST['howmany'];
            $p->Type = $_POST['type'];
            $p->Create();
            $feedback = "Super, je product werd toegevoegd!";
            $allProducts = $p->getAll();
        }
        catch( Exception $e)
        {
            $error = $e->getMessage();
        }

    }
    
?><!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Test OOP</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="humans.txt">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <link rel="stylesheet" href="css/gumby.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>

<div class="container">

  	<div class="row">
  	  <div class="twelve columns special head">
  	  	<h1>Testground</h1>
  	  </div>
  	</div>

  	<div class="row">
        <div class="four columns"> 
        <p>Zorg dat we een product kunnen toevoegen aan onze webshop.</p>
        <h3>Voorwaarden</h3>
        <ol>
            <li>aantal stuks moet altijd groter dan nul zijn (2 punten).</li>
            <li>bescherm tegen XSS en SQL Injection (2 punten)</li>
            <li>nieuwe producten kunnen maximaal per 20 aangekocht worden. Tweedehands (terugname) producten maximaal per 5 stuks. (4 punten)</li>
            <li>print alle producten onder het formulier uit (4 punten)</li>
            <li>zorg dat fout- of succesboodschappen énkel op de juiste ogenblikken getoond worden. (4 punten)</li>
            <li>zorg dat de producten correct in de databank terecht komen via PDO (zie voorbeeld data in de databank) (4 punten)</li>
        </ol>
        </div>
        
            
        <div class="eight columns">
            

            <?php if(!empty($feedback)): ?>
            <div class="success alert"><?php echo $feedback; ?></div>
            <?php endif; ?>
            
            <?php if(!empty($error)): ?>
            <div class="danger alert"><?php echo $error; ?></div>
            <?php endif; ?>
        
            <form method="post" action="">
              <ul>
                <li class="field"><input id="name" name="name" class="text input" type="text" placeholder="Productnaam" /></li>
                <li class="field">
                <div class="picker">
                    <select name="type">
                        <option value="" disabled>Selecteer een type product</option>
                        <option value="new">Nieuw product</option>
                        <option value="return">Tweedehands product (terugname)</option>
                    </select>            
                </div>
                </li>
                <li class="field"><input name="howmany" class="number input" type="number" placeholder="Hoeveel stuks?" /></li>
                
                <div class="pretty medium primary btn">
                <input type="submit" value="Bestelling plaatsen" />
                </div>
              </ul>
            </form>
            
            <hr />
            
            <h2>Producten in stock:</h2>
            <ul>
                <!-- print al uw bestellingen hier af als volgt -->
                <!-- <li>HP Laptop : 20 in categorie <em>new</em></li> -->
                <?php
                    while($row = $allProducts->fetch(PDO::FETCH_ASSOC)) {
                    $show = "<li>" . $row['name'] . " : " . $row['howmany'] . " in categorie <em>" . $row['type'] . "</em></li>";
                    echo $show;

                    }
                ?>
            </ul>             
        </div>    
        
    </div> 

	</div> <!--! end of #container -->


  <script src="js/libs/gumby.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
