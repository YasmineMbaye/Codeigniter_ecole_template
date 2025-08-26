<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-secondary">Liste des serveurs</div>
            <div class="card-body">

                <table class="table table-bordered">
                    <tr>
                        <td>Identifiant du serveur</td>
                        <td>Nom du serveur</td>
                        <td>Adresse ip du serveur</td>
                        <td>Action</td>
                        <td>Action</td>
                    </tr>
            
                <?php
               
                 
                    while($serveur=mysqli_fetch_row($liste)){ //mysqli_fetch_row récupère une ligne de résultat sous forme de tableau indexé numériquement.       Cette ligne signifie "Tant qu'il y a des serveurs dans la liste, fais ce qui suit".
                                                            //La fonction mysqli_fetch_row($liste) prend un serveur de la liste à chaque tour de boucle.
                        echo "  <tr>                           
                        <td>$serveur[0]</td>
                        <td>$serveur[1]</td>
                        <td>$serveur[2]</td>
                        <td><a href='?page=editserveur&id=$serveur[0]'> Editer</a></td>
                        <td><a href='controller/ServeurController.php?id=$serveur[0]'>Supprimer</a></td> 
                    </tr>";    //pour supprimer on la écrit comme sa car c simple on a juste préciser le chemin absolu vers controlleur et on a récupérer en get son id  Le symbole ? est utilisé pour passer des paramètres via l'URL.
                    }         // et pour éditer dabord on charge la page ensuite récupérer l'id
                ?>
                </table>

            </div>
        </div>
    </div>
</body>
</html>