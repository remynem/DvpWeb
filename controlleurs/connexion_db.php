<?php

define('USER','root');
define('PASSWORD','root');    
define('DSN', 'mysql:host=localhost:8889;dbname=garage;charset=UTF8');

try{
    $link = new PDO(DSN,USER,PASSWORD); 
} catch (Exception $ex) {
    echo "Erreur ! : " . $ex->getMessage() . "<br/>";
    die();
}

?>
