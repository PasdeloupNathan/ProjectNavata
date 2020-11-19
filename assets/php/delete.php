<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php if($_SESSION["rôles"] == 'admin'){
  ?>


<?php
include 'meta.php';
?>
<?php
// Check that the contact id_concours exists
if (isset($_GET['id_concours'])) {
    // Select the record that is going to be deleted
    $stmt = $pdo->prepare('SELECT * FROM concours WHERE id_concours = ?');
    $stmt->execute([$_GET['id_concours']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that id_concours!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirm'])) {
        if ($_GET['confirm'] == 'yes') {
            // User clicked the "Yes" button, delete record
            $stmt = $pdo->prepare('DELETE FROM concours WHERE id_concours = ?');
            $stmt->execute([$_GET['id_concours']]);
            $msg = 'You have deleted the contact!';
        } else {
            // User clicked the "No" button, redirect them back to the read page
            header('Location: read.php');
            exit;
        }
    }
} else {
    exit('No id_concours specified!');
}
?>

<?=template_meta('Modification de profil')?>
<body class="body2">
<?=template_headerAdmin()?>

<div class="  row page ">

<?=template_admin()?>

<div class=" col content delete">
    <h2>voulez vous supprimer ce concours ? : </h2><br>
  <p class="pDelete delete"><?=$contact['noms_concours']?></p>
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php else: ?>
	
    <div class="yesno">
    <a style="text-decoration: none;border: solid 2px black; background-color: #efefef;padding: 1px;text-align: center;"
     class="deleteButton"  href="delete.php?id_concours=<?=$contact['id_concours']?>&confirm=yes">Yes</a>

     <a style="text-decoration: none;border: solid 2px black; background-color: #efefef;padding: 1px;text-align: center;"
     class="noDeleteButton"  href="./adminConcours.php">no</a>
    </div>
    <?php endif; ?>
</div>

<?=template_footer()?>
<?php
} else{
    header("Location: redirection.php");
}
?>
