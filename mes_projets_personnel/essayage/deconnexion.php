<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
session_destroy(); // Détruire la session
header('Location: connexion.php'); // Rediriger vers la page de connexion
exit();
?>
</body>
</html>