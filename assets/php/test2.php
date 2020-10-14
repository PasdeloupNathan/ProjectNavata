

<?php 
require 'model.php'; 
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
  $tests = $pdo->prepare("SELECT * from concours ORDER BY id_concours DESC LIMIT 2");
  $tests->execute();
  $societe= $tests->fetchAll(\PDO::FETCH_ASSOC);


?>
<?php include 'meta.php';

template_header();?>


<?=template_meta('Acceuil')?>
   
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
                <div  class="listeInfo col-5 offset-md-1">
                <ul>
                <li><?= $societeu['noms_concours'];?></li>
                <li><?= $societeu['descriptionConcours'];?></li>
                <li><?= $societeu['date_concours'];?></li>
                <li><?= $societeu['placeConcoursMax'];?></li>
                <li><?= $societeu['link_entreprise'];?> </li>
                <li><?= $societeu['menu_deroulant']; ?></li>
                    </ul> 

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