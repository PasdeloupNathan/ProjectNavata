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
                    <h2 class="h2profentreprise"> ENTREPRISE <br> <?= $societes['nom_societe'];?> </h2>
                </div>
                <div class="titrepentreprise col-3 offset-md-1">
                    <a href="create.php"><h2 class="linkprofentreprise">Crée un concours</h2></a> 
                </div>
                
            </div>
            <div class="row infoprofentreprise">
                <div class="col offset-md-1 gaucheentreprise">
                                            
                    <p>Adresse : <?= $societes['adresse_societe'];?> </p>
                    <br>
                    <p>Code Postal : <?= $societes['codepostal_societe'];?> </p>
                    <br>
                    <p>Ville : <?= $societes['ville_societe'];?> </p>
                    <br>
                    <br>
                    <p href="deconnection.php" type="button" class="deco" onclick="location.href='./deconnection.php'">déconnection</p>
                </div>
                <div class="col droiteentreprise">
                    <p>Email :<?= $societes['email_societe'];?> </p>
                    <br>
                    <p>Telephone : <?= $societes['tel_societe'];?> </p>
                    <br>
                    <p>Numéro de siret : <?= $societes['siret_societe'];?> </p>
                    <br>
                    <p id="modifentreprise"type="button" onclick="location.href='./modifProfilEntreprise.php'" >Modifiez votre information d'entreprise.  <i class="fas fa-edit" id="modifprofil"></i></p> 

                </div>
            </div>
            
        </div>
    </div>
    <?php
}
    ?>


    <?php



$testsp = $pdo->prepare("SELECT * from concours WHERE ref=".$_SESSION['id_entreprise']);
$testsp->execute();
$societed= $testsp->fetchAll(\PDO::FETCH_ASSOC);

?>

    <!-- Concours de l'entreprise -->

<div class="main8  align-items-center">
    <div class="entrepriseconcour">
        <h2 class="titreconcourentreprise">Concours de votre entreprise</h2>


        <div class="row align-items-center">

        <table class="" id="customers2">
    	<form action="listeCandidat.php" method="get">
            
        </form>
        <thead >
            <tr>
                <th></th>
                <th>Nom Concours</th>
                <th>Description</th>
                <th>localisation</th>
                <th>date début</th>
                <th>place max</th>
                <th>place prise</th>
                <th>place restante</th>
                <th>catégorie</th>
            </tr>
        </thead>
        <tbody>
			<!-- boucle for each permettant d'affiché les donnés de la table USERS -->
            <?php foreach ($societed as $societess): ?>
            <tr>
            <td style="width: 10%;"> <img style="width: 100%;" src="<?= $societess['img_societe'];?>" alt=""> </td>
                <td><?= $societess['noms_concours'];?></td>
                <td><?= $societess['descriptionConcours'];?></td>
                <td><?= $societess['locaConcours'];?></td>
                <td><?= $societess['date_concours'];?></td>
                <td><?= $societess['placeConcoursMax'];?></td>
                <td><?= $societess['placeConcoursPrise'];?></td>
                <td><?= $societess['placeConcoursMax']=$societess['placeConcoursMax'] - $societess['placeConcoursPrise'];?></td>
                <td><?= $societess['menu_deroulant'];?></td>
            </tr>
            <?php endforeach; ?>
		</tbody>
</table>
            </div>

        </div>

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
