 <?php 
function pdo_connect_mysql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'projet_navata';
    try {
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
        exit('Failed to connect to database!');
    }
}

			// Inscription User //

function inscription($rôles, $noms, $prenoms, $email, $ville, $addresse, $codepostal, $mdp) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `users` (`id_users`,`rôles`, `noms`, `prénoms`, `email`, `ville`, `adresse`, `codepostal`, `mdp`, `img`, `tel`, `nation`, `naissance`, `idcard`) VALUES (NULL, '$rôles', '$noms', '$prenoms', '$email', '$ville', '$addresse', '$codepostal','$mdp','$img', Null,Null, Null, Null);";
		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

			// Creation admin //

function adminCreate($rôles, $nom, $email, $mdp) {
	try {
		$con = pdo_connect_mysql();

		$sql = "INSERT INTO `admin` (`id_admin`,`rôles`, `nom`, `email`, `mdp`) VALUES (NULL, '$rôles', '$nom', '$email', '$mdp');";

		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}



			// Inscription entreprises //

function entreprise($rôles, $nom_societe, $email_societe, $ville_societe, $adresse_societe, $codepostal_societe, $siret_societe, $mdp_societe) {
	try  {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `entreprise` (`id_entreprise`, `rôles`, `nom_societe`, `email_societe`, `ville_societe`, `adresse_societe`, `codepostal_societe`, `siret_societe`, `mdp_societe`, `img_societe`) VALUES (Null, '$rôles', '$nom_societe', '$email_societe', '$ville_societe', '$adresse_societe', '$codepostal_societe', '$siret_societe','$mdp_societe','$img_societe');";
		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}

}

			// Inscription : création d’un concours //

function create_form_concours($noms_concours, $nom_entreprise, $descriptionConcours, $locaConcours, $date_concours, $placeConcoursMax, $link_entreprise, $ref, $menu_deroulant, $img_societe) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `Concours` (`id_concours`, `noms_concours`, `nom_entreprise`, `descriptionConcours`, `locaConcours`, `date_concours`, `placeConcoursMax`, `link_entreprise`, `categorieConcours`, `placeConcoursPrise`, `placeConcoursRestante`, `ref`, `menu_deroulant`, `img_societe`) VALUES (NULL, '$noms_concours', '$nom_entreprise', '$descriptionConcours', '$locaConcours', '$date_concours', '$placeConcoursMax', '$link_entreprise', NULL, NULL, NULL, '$ref', '$menu_deroulant', '$img_societe');";
		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}
	


?>  




