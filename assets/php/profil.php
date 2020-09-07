<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>


<?php 
session_start();

?>


<?php
include 'meta.php';
?>

<?=template_meta('Profil')?>
    

<body class="body">
     

<?=template_header()?>


<!-- Section Profil  -->

<div class="main5 row align-items-center">
    <div class="profilc">
        <div class="row toprof">
            <img class="imgprof col-2 offset-md-1" src="https://journalmetro.com/wp-content/uploads/2017/04/default_profile_400x400.png?w=860" alt="Image Profil">
            <div class="titrep col-3 offset-md-1">
                <h2 class="h2prof"> Votre Profil </h2>
            </div>
            <i class="fas fa-caret-right rose3"></i>
        </div>

        <div class="row infoprof">
            <div class="col offset-md-1 gauche">
                <p>Nom : <?= $_SESSION['noms'];?>  <i class="fas fa-edit"></i></p>
                <br> 
                <p>Prenom : <?= $_SESSION['prénoms'];?> <i class="fas fa-edit"></i></p>
                <br>
                <p>Adresse : <?= $_SESSION['adresse'];?> <i class="fas fa-edit"></i></p>
                <br>
                <p>Nationalité : <?= $_SESSION['nation'];?> <i class="fas fa-edit"></i></p>
                <br>
                <p>Date de naissance : <?= $_SESSION['naissance'];?> <i class="fas fa-edit"></i></p>
           
            </div>
            <div class="col droite">
                <p>Email : <?= $_SESSION['email'];?> <i class="fas fa-edit"></i></p>
                <br>
                <p>Code Postal : <?= $_SESSION['codepostal'];?> <i class="fas fa-edit"></i></p>
                <br>
                <p>Telephone : <?= $_SESSION['tel'];?> <i class="fas fa-edit"></i></p>
                <br>
                <p>Numéro d'identité : <?= $_SESSION['idcard'];?> <i class="fas fa-edit"></i></p>
            </div>
        </div>

        <div class="row infoprof2">
            <p class="col offset-md-1 ">Modifiez tout votre profil <i class="fas fa-edit"></i></p> <p class="col"> Modifiez votre mot de passe <i class="fas fa-edit"></i></p>
        </div>
    </div>
</div>


<a href="deconnection.php" class="btn">deconnection</a>



<!-- Section Concour du Profil  -->

<div class="main6 row">
    <div class="col doubleCInsc row align-items-center">
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

</body>

</html>