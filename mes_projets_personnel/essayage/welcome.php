<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start(); // Démarre la session

// Vérifie si l'utilisateur n'est pas connecté
if (!isset($_SESSION['nom'])) {
    // Redirige vers la page de connexion si la session n'existe pas
    header("Location: connexion.php");
    exit();
}
?>

<h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['nom']); ?>!</h1>
<!-- Lien pour se déconnecter -->
<a href="deconnexion.php">Se déconnecter</a>


</body>
</html>