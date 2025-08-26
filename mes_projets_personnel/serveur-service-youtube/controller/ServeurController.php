<?php

require_once '../model/DB.php'; // inclut les fichiers spécifiés une seule fois. Cela signifie que le code dans ces fichiers est importé et exécuté dans le script actuel, mais ne sera pas inclus à nouveau si le script est appelé plusieurs fois et pour plus de compréhension va sur la page youtube de ngor seck et a la vidéo "PHP MYSQL cours6" a 23min25s
require_once '../model/ServeurDao.php'; //mieux que require se

 //Pour l'ajout
if(isset($_POST['ajoutserveur'])){
$nomserveur = $_POST['nom'];
$adripserverveur =$_POST['adrip'];
//echo $nomserveur; 
addServeur($nomserveur, $adripserverveur);
header("location:http://localhost:81/mes_projets/?page=listeserveur");

//$base_url= "http://localhost:81/mes_projets/"; une 2éme maniere plus simple de déclarer
//header("location:$base?page=listeserveur");

}
//pour la suppression
if(isset($_GET['id'])){

    deleteServeur($_GET['id']);
    
}
if(isset($_POST['modifier'])){

$nomserveurs = $_POST['nom'];
$adripserverveurs =$_POST['adrip'];
$id=$_POST['id'];
updateServeur($id, $nomserveurs, $adripserverveurs);
    
}
?>