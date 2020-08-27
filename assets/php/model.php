<?php 

function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = 'root';
    $DATABASE_NAME = 'projet_navata';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	exit('Failed to connect to database!');
    }
}

function createUser($noms, $prenoms, $email, $ville, $addresse, $codepostal, $mdp) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `users` (`id_users`, `noms`, `prénoms`, `email`, `ville`, `adresse`, `codepostal`, `mdp`, `img`) VALUES (NULL, '$noms', '$prenoms', '$email', '$ville', '$addresse', '$codepostal', '$mdp', '$img');";
		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
	$email = $sql->lastInsertId();
    if(isset($email)){
        $_SESSION = $email;
    }else{
        $error = '<div class="alert alert-danger" role="alert">Erreur | Votre Inscription à échoué</div> ';
        return $error;
    }
}

function signin($email , $mdp){
    $passwd_hash = hash('sha256', $mdp);
    $req_signin = $bdd->prepare('SELECT * FROM users WHERE email= ? AND password = ?');
    $req_signin->execute([
    $email ,
        $passwd_hash,
    ]);
    $user_exist = $req_signin->rowCount();
    if($user_exist == 1){
        $user_info = $req_signin->fetch();
       $_SESSION['id'] =  $user_info['id'];
       echo '<script LANGUAGE="javascript">document.location.href="admin/"</script>';

    }else{
        echo '<div class="alert alert-danger" role="alert">Erreur | Identifiants Inccorects </div> ';
      
    }


}



?>
