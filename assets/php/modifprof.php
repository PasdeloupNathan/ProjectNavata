<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
session_start();
?>




<?php include 'meta.php';?>



<?=template_meta('Modification de profil')?>

<body class="body2">

<?=template_headerUsers()?>

<?php

$teste = $pdo->prepare("SELECT * from users WHERE id_users=".$_SESSION['id_users']);
$teste->execute();
$bro= $teste->fetchAll(\PDO::FETCH_ASSOC);
foreach($bro as $bros)

?>

    <!-- Section pour modifiez les info de votre profile  -->

<div class="maininput">
<h2>Modifiez vos informations</h2>

    <form method="post" action="" class="inputg row">

        <div class="input offset-md-1 col-4">

            <label for="noms">Nom : <input type="text" name="noms" value="<?= $bros['noms'];?>"></label>
            <br>
            <label for="adresse">Adresse : <input type="text" name="adresse" value="<?= $bros['adresse'];?>"></label>
            <br>
            <label for="codepostal">Code-postal : <input type="text" name="codepostal" value="<?= $bros['codepostal'];?>"></label>
            <br>
            <label for="email">Email : <input type="text" name="email" value="<?= $bros['email'];?>"></label>
            <br>
            <label for="naissance">Date de naissance : <input type="date" name="naissance" value="<?= $bros['naissance'];?>"></label>
            <br>
            <label for="img" style="padding-right: 44%;">Image de profile : </label>
            <br><input type="file"> 
        </div>
        <div class="input col-4">

            <label for="prénoms">Prénom : <input type="text" name="prénoms" value="<?= $bros['prénoms'];?>"></label>
            <br>
            <label for="ville">Ville : <input type="text" name="ville" value="<?= $bros['ville'];?>"></label>
            <br>
            <label for="nation">Nationalité : <input type="text" name="nation" value="<?= $bros['nation'];?>"></label>
            <br>
            <label for="tel">N°Telephone : <input type="text" name="tel" value="<?= $bros['tel'];?>"></label>
            <br>
            <label for="idcard">N°ID : <input type="text" name="idcard" value="<?= $bros['idcard'];?>"></label>

        </div>

        <div class="buttong row col-12">

            <button type="submit" name="modif" action="">Enregistrer les modifications</button>

            <button>Annulez les modifications</button>
        </div>
    </form>
    
</div>

<?php 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'root';
$DATABASE_NAME = 'projet_navata';


$conn = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);


if (isset($_POST['modif'])){

    $sql = "UPDATE Users SET noms='".$_POST['noms']. "',prénoms='".$_POST['prénoms']."',adresse='".$_POST['adresse']."',ville='".$_POST['ville']."',codepostal='".$_POST['codepostal']."',nation='".$_POST['nation']."',email='".$_POST['email']."',tel='".$_POST['tel']."',naissance='".$_POST['naissance']."',idcard='".$_POST['idcard']."'WHERE id_users=".$_SESSION['id_users'];

    $stmt = $conn->prepare($sql);

    
    $stmt->execute();


    $conn = null;

    echo '<script LANGUAGE="javascript">document.location.href="profil.php"</script>';
}


?>



<?=template_footer()?>

</body>

</html>


