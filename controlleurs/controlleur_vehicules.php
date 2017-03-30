<?php

include 'connexion_db.php';

// affiche tout les vehicules 
$sql = "select * from vehicules";


//pour un vehicule precis
if(isset($_GET['immat'])){
    $immat = $_GET['immat'];
    $sql .=" where id = $immat order by date";
}


$sth = $link->query($sql);
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
