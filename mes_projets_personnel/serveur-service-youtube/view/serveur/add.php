<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container col-md-6 col-lg-6 col-sm-6 col-xs-6 col-md-offset-3">
        <div class="card">
            <div class="card-header bg-primary" >Formulaire d'ajout des serveurs</div>
            <div class="card-body">
                <form method="POST" action="controller/ServeurController.php">
                    <div class='form-group'>
                        <label for="" class="form-label">Nom du serveur</label>
                        <input type="text" name="nom" class="form-control"/>
                    </div>
                    <div class='form-group'>
                        <label for="" class="form-label">adresse ip du serveur</label>
                        <input type="text" name="adrip" class="form-control"/>
                    </div>
                    <div>
                        <input class="btn bg-success" type="submit" value="envoye" name="ajoutserveur"/>
                        <input class="btn btn-danger" type="reset" value="Annuler" name="annuler">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>