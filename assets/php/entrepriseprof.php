<?php
include 'meta.php';
?>

<?=template_meta('Entreprise_Profil')?>
    

<body class="body">
     

<?=template_header()?>

<div class="main7 row align-items-center">
    <div class="profilentreprise">
            <div class="row toprofentreprise">
                <img class="imgprofentreprise col-2 offset-md-1" src="../img/LOGO.png" alt="image profile">
                <div class="titrepentreprise col-3 offset-md-1">
                    <h2 class="h2profentreprise"> Profil de votre <br> Entreprise </h2>
                </div>
                <div class="titrepentreprise col-3 offset-md-1">
                    <h2 class="linkprofentreprise">Crée un concours</h2>
                </div>
                <i class="fas fa-caret-right rose4"></i>
            </div>
            <div class="row infoprofentreprise">
                <div class="col offset-md-1 gaucheentreprise">
                    <p>Nom de l'entreprise : $nomEntrepsise <i class="fas fa-edit"></i></p>
                    <br>
                    <p>Adresse : $adresseEntrepsise  <i class="fas fa-edit"></i></p>
                    <br>
                    <p>Nationalité : $nationEntrepsise <i class="fas fa-edit"></i></p>
                    <br>
                    <p>Code Postal : $CodePostEntrepsise <i class="fas fa-edit"></i></p>
                </div>
                <div class="col droiteentreprise">
                    <p>Email : $mail <i class="fas fa-edit"></i></p>
                    <br>
                    <p>Telephone : $tel <i class="fas fa-edit"></i></p>
                    <br>
                    <p>Numéro de siret : $numsiret <i class="fas fa-edit"></i></p>
                </div>
            </div>
            <div class="row infoprof2entreprise">
                <p class="col offset-md-1 ">Modifiez tout votre profil <i class="fas fa-edit"></i></p> <p class="col"> Modifiez votre mot de passe <i class="fas fa-edit"></i></p>
            </div>
        </div>
    </div>
<div class="main8 row align-items-center">
    <div class="entrepriseconcour">
        <h2 class="titreconcourentreprise">Concours de votre entreprise</h2>
        <i class="fas fa-caret-right rose5"></i>
        <div class="row align-items-center">
            <div class="row concourinfoentreprise">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 50%;" class="imgconcourentreprise">
                </div>
                <div class="col-5 offset-md-1" style="text-align: left;">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
            <div class="row concourinfoentreprise">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 50%;" class="imgconcourentreprise">
                </div>
                <div class="col-5 offset-md-1" style="text-align: left;">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
            <div class="row concourinfoentreprise">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 50%;" class="imgconcourentreprise">
                </div>
                <div class="col-5 offset-md-1" style="text-align: left;">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main9">

</div>

<?=template_footer()?>

</body>

</html>