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

			// Inscription //

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

			// Connexion //

function connexion($email, $mdp) {
	$passwd_hash = hash('sha256', $mdp);
	$req = $bdd->prepare('SELECT * FROM users WHERE email = ?');
	$req->execute([$email]);
	$users = $req->fetch(PDO::FETCH_ALL);
	// var_dump($users);
}

if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        // Update the record
        $stmt = $pdo->prepare('UPDATE contacts SET id = ?, name = ?, email = ?, phone = ?, title = ?, created = ? WHERE id = ?');
        $stmt->execute([$id, $name, $email, $phone, $title, $created, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM contacts WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}

?>
// read //
<?function getAllConcours() {
	$con = pdo_connect_mysql();
	$requete = 'SELECT * from concours';
	$rows = $con->query($requete);
	return $rows;
}
    ?>
	 -->