<?php 

function signup($name , $prénoms , $email , $ville ,  $adresses , $postal, $mdp, $mdpconfirme){
    require('model.bdd.php');
    $mdp_hash = hash('sha256', $mdp);
    $req_signup = $bdd->prepare('INSERT INTO users (name , prénoms , email , ville , adresses , postal, mdp, mdpconfirme) VALUES ( ? , ? , ? , ? , ? , ?, ? , ? )');
    $req_signup->execute([
        $name,
        $prénoms,
        $email,
        $ville,
        $adresses,
        $postal,
        $mdp,
        $mdpconfirme
    ]); 

}