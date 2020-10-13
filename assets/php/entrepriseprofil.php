<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php if($_SESSION["rôles"] == 'entreprise'){
  ?>


<?php
include 'meta.php';
?>


<?php

$tests = $pdo->prepare("SELECT * from entreprise WHERE id_entreprise=".$_SESSION['id_entreprise']);
$tests->execute();
$societe= $tests->fetchAll(\PDO::FETCH_ASSOC);
foreach($societe as $societes){

?>

<?=template_meta('Entreprise_Profil')?>
    

<body class="body">
     

<?=template_headerEntreprise()?>

    <!-- Profil de l'entreprise  -->

<div class="main7 row align-items-center">
    <div class="profilentreprise">
            <div class="row toprofentreprise">
                <img class="imgprofentreprise col-2 offset-md-1" src="../img/LOGO.png" alt="image profile">
                <div class="titrepentreprise col-3 offset-md-1">
                    <h2 class="h2profentreprise"> Profil de votre <br> Entreprise </h2>
                </div>
                <div class="titrepentreprise col-3 offset-md-1">
                    <a href="create.php"><h2 class="linkprofentreprise">Crée un concours</h2></a> 
                </div>
                <i class="fas fa-caret-right rose4"></i>
            </div>
            <div class="row infoprofentreprise">
                <div class="col offset-md-1 gaucheentreprise">
                    <p>Nom de l'entreprise : <?= $societes['nom_societe'];?></p>
                    <br>                        
                    <p>Adresse : <?= $societes['adresse_societe'];?> </p>
                    <br>
                    <p>Code Postal : <?= $societes['codepostal_societe'];?> </p>
                    <br>
                    <p>Ville : <?= $societes['ville_societe'];?> </p>
                </div>
                <div class="col droiteentreprise">
                    <p>Email :<?= $societes['email_societe'];?> </p>
                    <br>
                    <p>Telephone : <?= $societes['tel_societe'];?> </p>
                    <br>
                    <p>Numéro de siret : <?= $societes['siret_societe'];?> </p>
                    <br>
                    <p id="modifprofil">Modifiez votre information d'entreprise.  <i class="fas fa-edit" id="modifprofil"></i></p> 

                </div>
            </div>
            
        </div>
    </div>
    <?php
}
    ?>

    <a href="deconnection.php" class="btn">deconnection</a>

    <?php



$testsp = $pdo->prepare("SELECT * from concours WHERE ref=".$_SESSION['id_entreprise']);
$testsp->execute();
$societed= $testsp->fetchAll(\PDO::FETCH_ASSOC);
    

?>

    <!-- Concours de l'entreprise -->

<div class="main8 row align-items-center">
    <div class="entrepriseconcour">
        <h2 class="titreconcourentreprise">Concours de votre entreprise</h2>
        <i class="fas fa-caret-right rose5"></i><?php foreach($societed as $societess){?>
        <div class="row align-items-center">
            <div class="row concourinfoentreprise">
                <div class="col-5 offset-md-1">
                    <img src="<?= $societess['img_societe']?>" alt="concours" style="width: 50%;" class="imgconcourentreprise">
                </div>                

                <div class="col-5 offset-md-1" style="text-align: left;">  

                    <p> Nom de votre Concours : <?= $societess['noms_concours'];?>  <br>Nom de votre l'entreprise : <?= $societess['nom_entreprise'];?> <br> Description: <?= $societess['descriptionConcours'];?> <br> 
                    Localisation: <?= $societess['locaConcours'];?> <br> Date du concour : <?= $societess['date_concours'];?> <br> Place du concours: <?= $societess['placeConcoursMax'];?> <br>  
                    Link : <?= $societess['link_entreprise'];?> <br> Quel type de concours : <?= $societess['menu_deroulant']; ?>
                    </p>
                </div>
            </div>
            
        </div>
        <?php } ?>
    </div>
</div>



    <!-- Candidat inscrit a vos concours  -->

<div class="main9 row align-items-center">
    <div class="inscvalid">
        <h2 class="titrevalid">Demande d'inscription</h2>
        <i class="fas fa-caret-right rose6"></i>

        <!-- Row 1  -->

        <div class="row userinscrvalid">
            <div class="col-4 row align-items-center col1">
                <p class="col User1">$User <br> $desc</p>
                <button class="col-1 valid1"></button>
                <button class="col-1 delete1"></button>
            </div>
            <div class="col-4 row align-items-center col2">
                <p class="col User2">$User <br> $desc</p>
                <button class="col-1 valid2"></button>
                <button class="col-1 delete2"></button>
            </div>
            <div class="col-4 row align-items-center col3">
                <p class="col User3">$User <br> $desc</p>
                <button class="col-1 valid3"></button>
                <button class="col-1 delete3"></button>
            </div>
        </div>

        <!-- Row 2  -->

        <div class="row userinscrvalid">
            <div class="col-4 row align-items-center col1">
                <p class="col User1">$User <br> $desc</p>
                <button class="col-1 valid1"></button>
                <button class="col-1 delete1"></button>
            </div>
            <div class="col-4 row align-items-center col2">
                <p class="col User2">$User <br> $desc</p>
                <button class="col-1 valid2"></button>
                <button class="col-1 delete2"></button>
            </div>
            <div class="col-4 row align-items-center col3">
                <p class="col User3">$User <br> $desc</p>
                <button class="col-1 valid3"></button>
                <button class="col-1 delete3"></button>
            </div>
        </div>

        <!-- Row 3  -->

        <div class="row userinscrvalid">
            <div class="col-4 row align-items-center col1">
                <p class="col User1">$User <br> $desc</p>
                <button class="col-1 valid1"></button>
                <button class="col-1 delete1"></button>
            </div>
            <div class="col-4 row align-items-center col2">
                <p class="col User2">$User <br> $desc</p>
                <button class="col-1 valid2"></button>
                <button class="col-1 delete2"></button>
            </div>
            <div class="col-4 row align-items-center col3">
                <p class="col User3">$User <br> $desc</p>
                <button class="col-1 valid3"></button>
                <button class="col-1 delete3"></button>
            </div>
        </div>

        <!-- Row 4  -->

        <div class="row userinscrvalid">
            <div class="col-4 row align-items-center col1">
                <p class="col User1">$User <br> $desc</p>
                <button class="col-1 valid1"></button>
                <button class="col-1 delete1"></button>
            </div>
            <div class="col-4 row align-items-center col2">
                <p class="col User2">$User <br> $desc</p>
                <button class="col-1 valid2"></button>
                <button class="col-1 delete2"></button>
            </div>
            <div class="col-4 row align-items-center col3">
                <p class="col User3">$User <br> $desc</p>
                <button class="col-1 valid3"></button>
                <button class="col-1 delete3"></button>
            </div>
        </div>

    </div>
</div>

<?=template_footer()?>


<script src="../js/profil.js"></script>

</body>

</html>
<?php
} else{
    header("Location: redirection.php");
}
?>
