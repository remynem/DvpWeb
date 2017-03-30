<?php

include 'connexion_db.php';

// affiche toute les reparations 
$sql = "select * from reparations";


//pour un vehicule precis
if(isset($_GET['immat'])){
    $immat = $_GET['immat'];
    $sql .=" where vehicule_FK = $immat order by date";
}


$sth = $link->query($sql);
$resultat = $sth->fetchAll(PDO::FETCH_ASSOC);


