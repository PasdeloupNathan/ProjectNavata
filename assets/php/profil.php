<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php
include 'meta.php';
?>

<?=template_meta('Profil')?>
    

<body class="body">
     

<?=template_header()?>


<?php

$teste = $pdo->prepare("select * from users where id_users = ?");
$teste->execute();
$bro= $teste->fetchAll(\PDO::FETCH_ASSOC);
foreach($bro as $bros)

?>

<!-- Section Profil  -->

<div class="main5 row align-items-center">
    <div class="profilc">
        <div class="row toprof">
            <img class="imgprof col-2 offset-md-1" src="../img/default_profil.png" alt="Image Profil">
            <div class="titrep col-3 offset-md-1">
                <h2 class="h2prof"> Votre Profil</h2>
            </div>
            <i class="fas fa-caret-right rose3"></i>
        </div>

        <div class="row infoprof">
            <div class="col offset-md-1 gauche">
                        <!-- appelle des valeurs de la bdd -->
                <p>Nom : <?= $_SESSION['noms'];?> </p>
                <br> 

                <p>Prenom : <?= $bros['prénoms'];?> </p>

                <br>
                <p>Adresse : <?= $_SESSION['adresse'];?> </p>
                <br>
                <p>Ville : <?= $_SESSION['ville'];?> </p>
                <br>
                <p>Nationalité : <?= $_SESSION['nation'];?> </p>
           
            </div>
            <div class="col droite">
                <p>Date de naissance : <?= $_SESSION['naissance'];?> </p>
                <br>
                <p>Email : <?= $_SESSION['email'];?> </p>
                <br>
                <p>Code Postal : <?= $_SESSION['codepostal'];?> </p>
                <br>
                <p>Telephone : <?= $_SESSION['tel'];?> </p>
                <br>
                <p>Numéro d'identité : <?= $_SESSION['idcard'];?> </p>
                <br>
                <p id="modif">Modifiez votre profil  <i class="fas fa-edit" id="modif"></i></p> 
            </div>
        </div>
    </div>
</div>

<? $_SESSION["email"] ?>

<?$id ?>
<a href="deconnection.php" class="btn">deconnection</a>



<!-- Section Concour du Profil  -->

<div class="main6 row">
    <div class="col doubleCInsc row align-items-center">

    <!-- Concours auquel vous vous etes inscrit et en attente de la reponse  -->

        <div class="concourInsC">
            <h2 class="h2cins">Concours auquel vous etes inscrit</h2>
            <i class="fas fa-caret-right rose1"></i>
            <div class="row infoInsc">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginsc">
                </div>
                <div class="col-3 ">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
                <div class="col-2 statu">
                    <p>Status: <br> $statu</p>
                </div>
            </div>
            <div class="row infoInsc">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginsc">
                </div>
                <div class="col-3">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
                <div class="col-2 statu">
                    <p>Status: <br> $statu</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col doubleCInsc row align-items-center">

    <!-- Concours bientot lancé que vous attendez  -->

        <div class="concourInsC2">
            <h2 class="h2cins2">Concours en attente d'ouverture</h2>
            <i class="fas fa-caret-right rose1"></i>
            <div class="row infoInsc2">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginsc2">
                </div>
                <div class="col-4 offset-md-1">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
            <div class="row infoInsc2">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginsc2">
                </div>
                <div class="col-4 offset-md-1">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?=template_footer()?>



<script src="../js/profil.js"></script>
</body>

</html>