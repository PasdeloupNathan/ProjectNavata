
<?php 
session_start(); 
?>

<?php 
require 'model.php'; 
$pdo = pdo_connect_mysql();
$msg = '';
?>


<!-- // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion// -->

<!-- Appeller de la page meta.php ou se situe toute les fonction template  -->
<?php include 'meta.php';?>
<!-- fonction permettant d'accédé a la page correspondant aux rôles -->
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






<!-- sans avoir de compte utilisateur -->



<?=template_meta('Acceuil')?>

<?php 
  $tests = $pdo->prepare("SELECT * from concours ORDER BY id_concours LIMIT 2");
  $tests->execute();
  $societe= $tests->fetchAll(\PDO::FETCH_ASSOC);


?>
<?php 
  $tests = $pdo->prepare("SELECT * from concours ORDER BY id_concours LIMIT 0,1");
  $tests->execute();
  $societe2= $tests->fetchAll(\PDO::FETCH_ASSOC);


?>
   
<body class="body">

<!-- Section pour les nouveaux concours et les concours arrivant a leur terme  -->


<div class="main1 row" style="margin-left:0;margin-right:0;">
<div class="col doubleC row align-items-center">
    <div class="newC">

        <h2 class="h2new">Nouveaux Concours</h2>
        <div class="row info">
            <?php
            foreach ($societe as $societeu ):
            ?>
            
                <div class="col-5 offset-md-1">
                    <img src="<?= $societeu['img_societe'] ?>" alt="concours" style="width: 100%;" class="imginf">
                </div>
                <div class="col-5 offset-md-1">
                <p> <?= $societeu['noms_concours'];?>  <br> <?= $societeu['nom_entreprise'];?> <br><?= $societeu['descriptionConcours'];?> <br> 
                    <?= $societeu['locaConcours'];?> <br>  <?= $societeu['date_concours'];?> <br>  <?= $societeu['placeConcoursMax'];?> <br>  
                    <?= $societeu['link_entreprise'];?> <br> <?= $societeu['menu_deroulant']; ?>
                    </p>

                </div>
            
          
            <?php endforeach ?>
            </div>
            
    </div>
</div>
<div class="col doubleC row align-items-center">
    <div class="newC">
        <h2 class="h2new">Fin Concours</h2>
            <div class="row info">
            <?php
            foreach ($societe2 as $societeu ):
            ?>
            
                <div class="col-5 offset-md-1">
                    <img src="<?= $societeu['img_societe'] ?>" alt="concours" style="width: 100%;" class="imginf">
                </div>
                <div class="col-5 offset-md-1">
                <p> <?= $societeu['noms_concours'];?>  <br> <?= $societeu['nom_entreprise'];?> <br><?= $societeu['descriptionConcours'];?> <br> 
                    <?= $societeu['locaConcours'];?> <br>  <?= $societeu['date_concours'];?> <br>  <?= $societeu['placeConcoursMax'];?> <br>  
                    <?= $societeu['link_entreprise'];?> <br> <?= $societeu['menu_deroulant']; ?>
                    </p>

                </div>
            
          
            <?php endforeach ?>
            </div>
    </div>
</div>

</div>

<!-- Section pour les concours les tendance du momment  -->

<div class="main2 row align-items-center">
    <div class="bestc">
        <div class="titrec">
            <i class="fas fa-caret-right fleche2"></i> <h2 class="h2cat">  $Categorie  </h2><i class="fas fa-caret-right fleche1"></i>
        </div>
        <div class="row info2">
            <div class="col-5 offset-md-1">
                <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginf">
            </div>
            <div class="col-5 offset-md-1" style="text-align: left;">
                <p> Nom du concour :<?= $societeu['noms_concours'];?>  <br> Nom de l'entreprise : <?= $societeu['nom_entreprise'];?>  <br> Description : <?= $societeu['descriptionConcours'];?></p>
            </div>
        </div>
    </div>
</div>


<?=template_footer()?>

</body>

</html>





