<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple de Tableau</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
        body{
            background-image: url("bb.jpg");
            background-size: 34%;
            
        }
    
        #add{
    
    width: 400px;
    height:   300px;
    text-align: center;
    margin: 100px auto;
    background-color: #295F98;
    color: white;
    border-radius: 20px;
    padding: 20px;
}
input{
    padding: 10px;
    width: 300px;
    background-color: #295F98;
    border: 1px solid white;
    border-radius: 10px;
    color: white;
}
input[type="submit"]{
    width: 320px;
    background-color: #FF885B;
    border-radius: 10px;
    color: white;
    border: none;
}
input::placeholder{
    color: white;
    font-size: 12px ;
}
a{
    text-decoration: none;
    color: #FF885B;
}
i{
    position: absolute;
    left: 750px;
    bottom: 270px;
    cursor: pointer;
    
}
i.active::before{
    content: '\f070';

}

    </style>
</head>
<body>

  <div id="add">
    <form action="trait-adduser.php" method="POST"> <!--la on a utiliser la methode POST car on est entrain de soumettre le formulaire et ses données son personnel sa ne doit pas etre visible dans l'url !-->
        <h1>Formulaire de margo</h1>
        <input type="email" id="email" name="email" Placeholder="veillez saisir votre e-mail" required> <br> <br>
        <input type="password" id="input" name="email" Placeholder="margo" required> <div id="a"><i id="mdp" class="fa-solid fa-eye"></i></div><br> <br>
        <input type="submit" id="inscrire" name="inscrire" value="SE CONNECTER"><br> <br><br>
        <div>J'ai pas encore de compte. <a href="inscrire.php">S'INSCRIRE</a></div>

        
    </form>

    </div>
    <script src="script.js"></script>
</body>
</html>

</body>
</html>