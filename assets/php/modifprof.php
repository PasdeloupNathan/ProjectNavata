<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
session_start();
?>


<?php include 'meta.php';?>



<?=template_meta('Changez votre nom')?>

<body class="body2">

<?=template_header()?>

    <!-- Section pour modifiez les info de votre profile  -->

<div class="maininput">
<h2>Modifiez vos informations</h2>
    <form method="post" action="" class="inputg row">
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
            <br>
            <label for="img" style="padding-right: 44%;">Image de profile : </label>
            <br><input type="file"> 
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
        <div class="buttong">
            <button type="submit" name="modif" action="">Enregistrer les modifications</button>
            <button>Annulez les modifications</button>
        </div>
    </form>
    
</div>

<?php 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'projet_navata';


$conn = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);


if (isset($_POST['modif'])){
    $sql = "UPDATE Users SET noms='2' WHERE id_users=9";

    $stmt = $conn->prepare($sql);

  
    $stmt->execute();


    $conn = null;


}
?>



<?=template_footer()?>

</body>

</html>

