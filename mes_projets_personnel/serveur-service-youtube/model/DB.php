<?php
    function getConnexion(){
        $host="localhost";
        $user="root";
        $password="";
        $dbname="parcinformatique";

        $connexion= mysqli_connect($host,$user,$password,$dbname);
        return $connexion; //La fonction renvoie l'objet de connexion $connexion. Ce retour permet à la fonction d'être utilisée pour obtenir une connexion à la base de données dans d'autres parties du code.
    }

   /* if(getConnexion()){
        echo "connection réussi";
    }
    else {
        echo"connexion non réussi";
    }
*/
    function executeSQL($sql){ //Elle prend un seul paramètre $sql, qui est une chaîne de caractères contenant une requête SQL à exécuter (par exemple, une requête SELECT, INSERT, UPDATE, ou DELETE).
        $execution=mysqli_query(getConnexion(), $sql); //getConnexion() Elle permet à la fonction executeSQL() d'utiliser cette connexion pour envoyer des requêtes à la base de données.    Cette fonction exécute la requête SQL passée dans $sql en utilisant la connexion à la base de données obtenue via getConnexion()
        return $execution; //0 ou 1 (Insert Update Delete)
                            //Collection d'objet select
        
    }
?>