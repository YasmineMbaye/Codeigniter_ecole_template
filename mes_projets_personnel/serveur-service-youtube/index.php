<?php

    if(isset($_GET['page'])){ //isset veut dire si la variable existe          Vérifie si le paramètre page est défini dans l'URL.
        require_once 'menu.php'; //reste sur la meme page et afficher les autres                             Inclut le fichier menu.php une seule fois si le paramètre page est défini.
        switch($_GET['page']){    //Bascule en fonction de la valeur de page               n PHP, la structure switch est utilisée pour vérifier la valeur d'une variable et exécuter des blocs de code différents en fonction de cette valeur. Dans ton code, on utilise switch ($_GET['page']) pour choisir quelle page afficher selon la valeur de $_GET['page'].          Cela récupère la valeur du paramètre page dans l'URL. Par exemple, si l'URL est mon_site.com?page=addserveur, alors $_GET['page'] vaut addserveur.                                 Le switch vérifie cette valeur ($_GET['page']) pour savoir quel cas (case) correspond.
            case 'addserveur': //si la page de l'url=addserveur sa doit amener la page de add.php
                require_once 'view/serveur/add.php';
                break;
            case 'addservice':
                require_once 'view/service/add.php';
                break;
            case 'listeserveur':
                require_once 'model/DB.php'; //ouverture
                require_once 'model/ServeurDao.php'; //exécution
                $liste=listeServeur();               //récupération
                require_once 'view/serveur/liste.php';  //affichage
                break;
            case 'listeservice': 
                require_once 'view/service/liste.php';
                break;
            case 'deleteserveur':
                break;
            case 'deleteservice':
                break;
            case 'editserveur':
                require_once 'model/DB.php'; //ouverture
                require_once 'model/ServeurDao.php'; //exécution
                $serveur=getServeurById($_GET['id']);
                $ligne= mysqli_fetch_row($serveur); //il récupére les lignes du serveur et les mettre dans un tableau et la 1ere ligne [ligne[0]]qu'il va récupérer sera l'id, l'autre[ligne[1]] sera le nom l'autre l'adresse ip
                require_once 'view/serveur/edit.php';
                break;
            case 'edit service': 
                require_once 'view/service/edit.php';
                break;                       
        }
        
    }
    else{
     //   echo "Bienvenue!!";
     require_once 'menu.php';
    }
?>