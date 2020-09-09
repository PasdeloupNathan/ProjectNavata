<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
session_start();
?>

<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'projet_navata';
try {
  $conn = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "UPDATE users SET noms=$name WHERE id=$_SESSION[id_users]";

  $stmt = $conn->prepare($sql);


  $stmt->execute();

  echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>


<?php include 'meta.php';?>



<?=template_meta('Changez votre nom')?>

<body class="body2">

<?=template_header()?>

<div class="maininput">
<h2>Modifiez vos informations</h2>
    <div class="inputg row">
        <div class="input offset-md-1 col-4">

            <label for="noms">Nom : <input type="text" name="noms" value="<?= $_SESSION['noms'];?>"></label>
            <br>
            <label for="adresse">Adresse : <input type="text" name="adresse" value="<?= $_SESSION['adresse'];?>"></label>
            <br>
            <label for="codepostal">Code-postal : <input type="text" name="codepostal" value="<?= $_SESSION['codepostal'];?>"></label>
            <br>
            <label for="email">Email : <input type="text" name="email" value="<?= $_SESSION['email'];?>"></label>
            <br>
            <label for="naissance">Date de naissance : <input type="text" name="naissance" value="<?= $_SESSION['naissance'];?>"></label>
            
        </div>
        <div class="input col-4">

            <label for="prénoms">Prénom : <input type="text" name="prénoms" value="<?= $_SESSION['prénoms'];?>"></label>
            <br>
            <label for="ville">Ville : <input type="text" name="ville" value="<?= $_SESSION['ville'];?>"></label>
            <br>
            <label for="nation">Nationalité : <input type="text" name="nation" value="<?= $_SESSION['nation'];?>"></label>
            <br>
            <label for="tel">N°Telephone : <input type="text" name="tel" value="<?= $_SESSION['tel'];?>"></label>
            <br>
            <label for="idcard">N°ID : <input type="text" name="idcard" value="<?= $_SESSION['idcard'];?>"></label>

        </div>
    </div>
    <div class="buttong">
        <button>Enregistrer les modifications</button>
        <button>Annulez les modifications</button>
    </div>
</div>

<?=template_footer()?>

</body>

</html>

<?php
        if(isset($_POST['inscrire'])){ 
             $name=$_POST["name"];
             $prénoms=$_POST["prénoms"];
            $email=$_POST["email"];
            $ville=$_POST["ville"];
            $codepostal=$_POST["codepostal"];
            $mdp=$_POST["mdp"];
        $mdpconf=$_POST["mdpconf"];
        $adresse=$_POST["adresse"];
        $img =$_POST["img"]; 
        $tel =$_POST["tel"];
        $nation=$_POST["nation"];
        $naissance=$_POST["naissance"];
        $idcard=$_POST["idcard"]; $email = "$email";
    }

?>