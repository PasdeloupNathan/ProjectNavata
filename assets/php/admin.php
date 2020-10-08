<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php

$tests = $pdo->prepare("SELECT COUNT(*) from users WHERE id_users=".$_SESSION['id_users']);
$tests->execute();
$societe= $tests->fetchAll(\PDO::FETCH_ASSOC);
foreach($societe as $societes){

?>
<!--  Permission pour le rôles admin -->
<?php if($_SESSION["rôles"] == 'admin'){
  ?>
<?php
include 'meta.php';
// $total= nombre_vues()
$annee = (int)date('Y');

?>

<?=template_meta('adminConcours')?>
    



<body class="body2">
    


    

<?=template_headerAdmin()?>

<div class="row page">

<?=template_admin()?>
<!-- //frontEnd de l'acceuil admin  -->
<div class="col">
<!-- compteur de visite du site -->
  <div class="ListStats" style="width:50%">
    <div class="col-  stats ">
    <?php 
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'compteur.php';
    ajouter_vue();
    $vues = nombre_vues()
    ?>
    nombre de visiteurs  : <?= $vues ?> visites
    </div>
    
    <div class="col stats ">
    nombre de personne inscrite :<?= $societes['noms'];?>
    </div>
    <div class="graph row"style="width:50%">

    <!--  futur graphique camembert listant des stats -->
    <div id="cercle" class="col graph">

    </div>
    <div id="cercle" class="col graph">

    </div>
    </div>
  </div>
  <!-- div pour le nombre de concours et le pourcentage homme/femme -->
  <div class="ListStats" style="width:50%">
    <div class="col stats ">
    nombre de concours :
    </div>  
    <div class="col stats ">
    pourcentage homme/femme :
    </div>
    <div class="graph row"style="width:50%">

    
    <div id="cercle" class="col graph">

    </div>
    <div id="cercle" class="col graph">

    </div>
    </div>
  </div>
</div>
</div>


<!-- //backEnd -->




<?=template_footer()?>

</body>

</html>
<?php
} else{
    header("Location: redirection.php");
}
}
?>