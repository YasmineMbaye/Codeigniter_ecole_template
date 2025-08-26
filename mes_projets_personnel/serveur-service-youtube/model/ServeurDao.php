<?php
function addServeur ($nomserv, $adripserv){
    $sql= "INSERT INTO serveur VALUES(NULL, '$nomserv','$adripserv')";
    return executeSQL($sql);
}   

function deleteServeur ($idServ){
    $sql= "DELETE FROM serveur WHERE idserv=$idServ";
    return executeSQL($sql);
}

function updateServeur($idserv, $nomserv, $adripserv){
    $sql= "UPDATE serveur SET nomserv= '$nomserv', adripserv='$adripserv' WHERE idserv=$idserv";
    return executeSQL($sql);
}

function listeServeur(){
    $sql="SELECT * FROM serveur";
    return executeSQL($sql);
}

function listeServeurConfigure(){
    $sql="SELECT serv.idserv , serv.nomserv, serv.adripserv FROM serveur serv, service s WHERE serv.idserv = s.serv";
    return executeSQL($sql);
}

function getServeurById($idserv){  // getServeurById veut dire récupére les information du serveur a partir de son ID
    $sql= "SELECT * FROM serveur WHERE idserv=$idserv";
    return executeSQL($sql);

}

?>