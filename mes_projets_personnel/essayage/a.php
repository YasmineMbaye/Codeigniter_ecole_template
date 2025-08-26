<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression Utilisateur</title>
    
</head>
<body>
<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Supposons que tu as vérifié l'authentification
    $_SESSION['username'] = $_POST['username'];
    header('Location: welcome.php'); // Rediriger vers la page de bienvenue
    exit();
}
?>
<form method="post" action="">
    Nom d'utilisateur : <input type="text" name="username">
    <button type="submit">Se connecter</button>
</form>

</body>
</html>
