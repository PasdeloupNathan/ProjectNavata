<?php
include 'meta.php';
?>

<?=template_meta('Entreprise_Profil')?>
    

<body class="body">
     

<?=template_header()?>

    <!-- Profil de l'entreprise  -->

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

    <!-- Concours de l'entreprise -->

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

</body>

</html>