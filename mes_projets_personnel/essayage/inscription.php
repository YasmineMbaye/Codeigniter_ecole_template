<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div id="CI"><a id="C" href="connexion.php">Connexion</a > <a id="C" href="#">/Inscription</a></div>

    <h1>FORMULAIRE D'INSCRIPTION</h1>
    

<div id="section">
    <form method="POST" action="trait-inscription.php">
       
     <label for="nom">nom </label>
       <input type="text" id="nom" name="nom" required> <br>

        <label for="email" >email</label>
        <input type="email" name='email' required > <br>
        <span id="msg"></span>

        <label for="input">mot de passe</label>
        <input id="input" type="password" name='mdp' required minlength="8" maxlength="10"> 
        <button type="button" id="button" >afficher le mot de passe</button>  <!--  on peut ajouter les attribut  minlength="4"   maxlength="8" pour limiter le nombre de caractéres dans les champ de saisi .Pour le boutton on doit préciser son type car par défaut son type c'est submit donc si on ne précise pas son type quand on clique sur le boutton sa envoi le formulaire -->
         

        <input id="inscrit" type="submit" value="S'inscrire" name="ajout"> 
       
     </div>
    </form>
    <script src="mdp.js"></script>
</body>
</html>