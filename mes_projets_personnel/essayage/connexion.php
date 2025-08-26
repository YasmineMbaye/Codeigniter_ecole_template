<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="CI"><a id="C" href="#">Connexion</a > <a id="C" href="inscription.php">/Inscription</a></div>

<h1>FORMULAIRE DE CONNEXION</h1>


<div id="section">

<form method="GET" action="trait-connexion.php"> <!--La on pouvait utiliser POST car avec get les données vont etre visible dans l'url!-->

    <label for="email" >email</label>  <!--on utilise le for pour spécifier quel input appartient a ce label lors du cliquement du texte de l'email -->
    <input id="email" type="email" name='email' required> <br>  <!--id permet que quand on clique sur un label de savoir quel input appartient a ce label, le name c'est c'est quand on veut utiliser cette input pour l'nvoyer au niveau d'une base de donnée, le type c'est par exemple si un utilisateur entre un email il doit seulement entrer un email valide mais pas comme un nom, et required c'est un attribut qui permet de préciser que ce champ est obligatoire !-->
    
    <label for="input">mot de passe</label>
    <input id="input" type="password" name='mdp' required > 
    <input id="inscrit" type="submit" value="Se connecter" name="ajout">
   
 </div>
</form>

</body>
</html>