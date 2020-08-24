<?php

try {
    $user = 'root';
    $pass = 'root';
    $bdd = new PDO('mysql:host=localhost;dbname=projet_navata', $user, $pass);

    
  
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    
}
 ?>