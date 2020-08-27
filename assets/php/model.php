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
}


?>
