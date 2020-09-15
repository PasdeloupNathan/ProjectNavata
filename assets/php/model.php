<!-- <?php 

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

function inscription($noms, $prenoms, $email, $ville, $addresse, $codepostal, $mdp) {
	try {
		$con = pdo_connect_mysql();

		$sql = "INSERT INTO `users` (`id_users`, `noms`, `prénoms`, `email`, `ville`, `adresse`, `codepostal`, `mdp`, `img`, `tel`, `nation`, `naissance`, `idcard`) VALUES (NULL, '$noms', '$prenoms', '$email', '$ville', '$addresse', '$codepostal','$mdp','$img', Null,Null, Null, Null);";

		$con->exec($sql);
	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}


			// Inscription entreprises //

function entreprise($nom_societe, $email_societe, $ville_societe, $adresse_societe, $codepostal_societe, $siret_societe, $mdp_societe) {
	try {
		$con = pdo_connect_mysql();
		$sql = "INSERT INTO `entreprise` (`id_entreprise`, `nom_societe`, `email_societe`, `ville_societe`, `adresse_societe`, `codepostal_societe`, `siret_societe`, `mdp_societe`, `img_societe`) VALUES (Null, '$nom_societe', '$email_societe', '$ville_societe', '$adresse_societe', '$codepostal_societe', '$siret_societe','$mdp_societe','$img_societe');";
		$con->exec($sql);

function update($id, $name, $email, $phone, $adresse) {
	try {
		$con = pdo_connect_mysql();
		$requete = "UPDATE users set 
					nom = '$name',
					prénom = '$prenom',
                    email = '$email'
                    img = '$img'
                    tel = '$tel'
                    nation = '$nation'
                    naissance = '$naissance'
                    idcard = '$idcard'
					age = '$age',
					adresse = '$adresse' 
					where id = '$id' ";
		$stmt = $con->query($requete);

	}
	catch(PDOException $e) {
		echo $sql . "<br>" . $e->getMessage();
	}
}

			// Connexion //

function connexion($email, $mdp) {
	$passwd_hash = hash('sha256', $mdp);
	$req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
	$req->execute([$email]);
	$users = $req->fetch(PDO::FETCH_ALL);
	// var_dump($users);
}


function conentreprise($email_societe, $mdp_societe) {
	$passwd_hash = hash('sha256', $mdp_societe);
	$req = $bdd->prepare('SELECT * FROM entreprise WHERE email_societe = ?');
	$req->execute([$email_societe]);
	$entreprise = $req->fetch(PDO::FETCH_ALL);
	var_dump($entreprise);
}



?>
// read //
<?function getAllConcours() {
	$con = pdo_connect_mysql();
	$requete = 'SELECT * from concours';
	$rows = $con->query($requete);
	return $rows;
}

// UPDATE

    ?>
	 -->