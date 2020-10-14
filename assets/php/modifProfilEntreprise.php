<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
session_start();
?>


<?php if($_SESSION["rôles"] == 'entreprise'){
  ?>

<?php include 'meta.php';?>



<?=template_meta('Changez votre nom')?>

<body class="body2">

<?=template_headerEntreprise()?>

<?php

$tests = $pdo->prepare("SELECT * from entreprise WHERE id_entreprise=".$_SESSION['id_entreprise']);
$tests->execute();
$societe= $tests->fetchAll(\PDO::FETCH_ASSOC);
foreach($societe as $societes)

?>

    <!-- Section pour modifiez les info de votre profile  -->

<div class="maininput">
<h2>Modifiez vos informations</h2>

    <form method="post" action="" class="inputg row">

        <div class="input offset-md-1 col-4">

            <label for="nom_societe">Nom societe : <input type="text" name="nom_societe" value="<?= $societes['nom_societe'];?>"></label>
            <br>
            <label for="ville_societe">Ville : <input type="text" name="ville_societe" value="<?= $societes['ville_societe'];?>"></label>
            <br>
            <label for="adresse_societe">Adresse : <input type="text" name="adresse_societe" value="<?= $societes['adresse_societe'];?>"></label>
            <br>
            <label for="img" style="padding-right: 44%;">Image de profile : </label>
            <br><input type="file"> 
        </div>
        <div class="input col-4">

            <label for="codepostal_societe">Code Postal: <input type="text" name="codepostal_societe" value="<?= $societes['codepostal_societe'];?>"></label>
            <br>
            <label for="tel_societe">Telephone : <input type="text" name="tel_societe" value="<?= $societes['tel_societe'];?>"></label>
            <br>
            <label for="email_societe">Email : <input type="text" name="email_societe" value="<?= $societes['email_societe'];?>"></label>
            <br>
            <label for="siret_societe">Numero de siret : <input type="text" name="siret_societe" value="<?= $societes['siret_societe'];?>"></label>
        </div>

        <div class="buttong row col-12">

            <button type="submit" name="modif" action="">Enregistrer les modifications</button>

            <button>Annulez les modifications</button>
        </div>
    </form>
    
</div>
<p> batchahca</p>

<?php 
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'projet_navata';


$conn = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);


if (isset($_POST['modif'])){

    $sql = "UPDATE entreprise SET nom_societe='".$_POST['nom_societe']. "',ville_societe='".$_POST['ville_societe']."',adresse_societe='".$_POST['adresse_societe']."',codepostal_societe='".$_POST['codepostal_societe']."',tel_societe='".$_POST['tel_societe']."',email_societe='".$_POST['email_societe']."',siret_societe='".$_POST['siret_societe']."'WHERE id_entreprise=".$_SESSION['id_entreprise'];

    $stmt = $conn->prepare($sql);

    
    $stmt->execute();


    $conn = null;

    echo '<script LANGUAGE="javascript">document.location.href="entrepriseprofil.php"</script>';
}


?>



<?=template_footer()?>

</body>

</html>

<?php
} else{
    header("Location: redirection.php");
}
?>
