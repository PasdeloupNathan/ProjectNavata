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
<?php 
  $tests = $pdo->prepare("SELECT * from concours ORDER BY placeConcoursMax DESC LIMIT 1");
  $tests->execute();
  $societe= $tests->fetchAll(\PDO::FETCH_ASSOC);


?>
<?=template_meta('Concours')?>
    


<body class="body">






<div class="main3 h2nav">
    <!-- premiere partie du site contenent le concours avec les plus d'angouement  -->
        <div class="col firstBox" class="container">
           
                <div class=" title">

                    <H2>Concours avec le plus d'angouement</H2>
                </div>
                <div class="row bas align-items-center">
                <?php
            foreach ($societe as $societeu ):
            ?>
            
                    <div class="col-sm-6 acceuil">
                        <img id="logoImg2" src="<?= $societeu['img_societe'];?>" alt="logo">
                    </div>
                    
                
                <div  class="listeInfo col-5 offset-md-1">
                <ul>
                <ol><h1 class="titreConcours" ><?= $societeu['noms_concours'];?></h1></ol>
                <li><?= $societeu['descriptionConcours'];?></li>
                <li><p>nombre de place maximum:</p><?=$societeu['placeConcoursMax']?></li>
                
                <li> <p>nombre de place restante:</p> <?=$societeu['placeConcoursPrise'] = $societeu['placeConcoursMax'] - $societeu['placeConcoursPrise']; ?></li>
                
                    </ul> 

                </div>
            
          
            <?php endforeach ?>
                </div>
            </div>
        </div>
        </div>

<div class="main3 h2nav">
<!-- 2e partie de la page avec un carroussel permettant de visualisé les différent type de concours pas catégorie -->
<div class="col firstBox" class="container">
           
            <div class="col row List">
                <div class="col title">
                    <H2>Liste des concours disponible</H2>
                </div>
                <div class="col search">
                 
                <select class="fond" value="recherché" name="selectbasic" class="form-control">
                <!-- <option value="">--Catégorie--</option> -->
                    <optgroup label="Concours" >
                    <option class="fond" value="1">Sport</option>
                    <option class="fond" value="2">Education</option>
                    <option class="fond" value="3">Academique</option>
                    <option class="fond" value="4">Fonctionnaire</option>
                    <option class="fond" value="5">E-sport</option>
                    </optgroup>
                </select>
                </div>
            </div>
            <div class="row ListConcours align-items-center">
            <div class="col"><p>Sport</p></div>
            <div class="col"><p>Education</p></div>
            <div class="col"><p>Academique</p></div>
            <div class="col"><p>Fonctionnaire</p></div>
            <div class="col"><p>E-sport</p></div>
            </div>
                
                <div class="row  align-items-center">
                <div class="col-6">
                        <div class="List">
                        <h2 class=" col- h2nav list1">Concours1</h2>
                        <h2 class=" col- h2nav">Concours2</h2>
                        <h2 class=" col- h2nav list2">Concour3</h2>
                        <h2 class=" col- h2nav list2">Concours4</h2>
                    
                    <div class="col arrow1">
                        <p class="col"><i class="fas fa-caret-left"></i>  Page précédente  </p>  
                        </div>
                        </div>
                    </div>
                    <!-- carroussel -->
                    <div class="col-6 acceuil">
                        <div>
                        <img id="logoImg2" src="../img/test1.jpg" alt="logo">
                        </div>
                        <div class="desc">
                            <p class=" h2nav">Lorem ipsum dolor sit,</p>
                        </div>
                        
                            <div class="arrow2">
                            <p class="col">  Page suivante <i class="fas fa-caret-right "></i> </p>  
                            </div>
                        
                    </div>
                    
                    
                    
                </div>
            </div>
    
</div>


<?=template_footer()?>

