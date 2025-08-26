<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="accueil.css">
</head>
<body>
<?php
include("header.php");
include("top_bar.php");
include("left_sidebar.php");
include("right_content.php");
include("footer.php");

?>
    <?php
    session_start();
    include("menu.php"); //permet d'inclure toute la page menu.php
    
    if(!isset($_SESSION['nom'])){
        header("location:connexion.php");
    }
    ?>

    <h1 id="ecole">BIENVENUE SUR LA PAGE DE MON ECOLE <?php echo ($_SESSION['nom']);?> </h1>
    <img id="img" src="img.jpg" alt="">
</body>
</html>