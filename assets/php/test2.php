<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<!--  Permission pour le rôles admin -->

<?php
include 'meta.php';
// $total= nombre_vues()
$annee = (int)date('Y');

?>

<?=template_meta('adminConcours')?>



 
<?php
// =========================================================================
//   function page admins

// function calculant le nombre d'entreprise créé
$note = "SELECT * FROM entreprise WHERE ref='".$_SESSION['id_entreprise']."' ORDER_BY `date` DESC LIMIT 1";
$st = $conn->prepare($note);

/* Compte le nombre de colonnes dans le jeu de résultat (non-existant) */
$countEntreprise = $sth->rowCount();
$sth->execute();
/* Compte le nombre de colonnes dans le jeu de résultats */
$countEntreprise = $sth->rowCount();
// ===============================================
// function calculant le nombre de concours créé
$sth = $pdo->prepare("SELECT * from users WHERE rôles ='candidat'");
$countCandidat = $sth->rowCount();
$sth->execute();
$countCandidat = $sth->rowCount();
// ===============================================
// function calculant le nombre de concours créé
$sth = $pdo->prepare("SELECT * from concours");
$countConcours = $sth->rowCount();
$sth->execute();
$countConcours = $sth->rowCount();
// ===============================================
// code permettant de compté le nombre total d'utilisateurs sur le site (admin exclu)
$countTotal = $countCandidat + $countEntreprise;


//  permet d'affiché le nombre de visite du site
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'compteur.php';
    ajouter_vue();
    $vues = nombre_vues()
?>

<? echo $note;?>



