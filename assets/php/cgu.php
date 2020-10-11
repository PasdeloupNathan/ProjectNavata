<? include 'model.php'; ?>
<?php session_start(); 

  ?>

<?php include 'meta.php';?>

<?php
if($_SESSION == FALSE){
    template_header();
}elseif($_SESSION["rôles"] == 'candidat'){
    template_headerUsers();
}elseif($_SESSION["rôles"] == 'entreprise'){
    template_headerEntreprise();
}elseif($_SESSION["rôles"] == 'admin'){
    template_headerAdmin();
}

?>

<?=template_meta('Concours')?>
    
<style>
    body{
        text-align :center;
    }
</style>
<body class="body2">

<p>
<br> Propriété du site </b>
Le site Internet « NAVATA » de Concours sur internet.<br>

Responsable de la publication <br>
Nathan Pasdeloup <br>
Valentin Gaultier <br>
Tarik DAOUINE <br>

 

Hébergement en LocalHost <br>
<br> <br>

Traitement des données personnelles<br>
Conformément à l'article 34 de la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, l'utilisateur dispose d'un droit d'accès, de modification, de rectification et de suppression des données qui le concernent.<br>
Pour l'exercer, l'utilisateur peut s'adresser un courrier électronique à contacter le support Navata.<br>
<br>

Propriété intellectuelle<br>
« Navata », et en particulier son contenu, est protégé par les textes relatifs au droit de la propriété intellectuelle en vigueur en France.<br>
L'utilisation du « Navata » ne confère aucun droit à l’utilisateur.<br>
En conséquence, le contenu disponible sur « Navata » sont réservés et protégés par le droit de la propriété intellectuelle, notamment droits d'auteur, droits voisins, droits des marques.<br>
Toute utilisation illicite de tout ou partie de « Navata » donnera lieu à des poursuites.<br>
</p>

<?=template_footer()?>




