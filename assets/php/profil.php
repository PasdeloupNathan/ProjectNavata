<?php
include 'meta.php';
?>

<?=template_meta('Concours')?>
    

<body class="body">
     

<?=template_header()?>


<div class="main5 row align-items-center">
    <div class="profilc">
        <div class="row toprof">
            <img class="imgprof col-2 offset-md-1" src="https://images4.wikia.nocookie.net/__cb20121006023727/naruto/fr/images/thumb/7/71/Minato_Namikaze.png/300px-Minato_Namikaze.png" alt="image profile">
            <div class="titrep col-3 offset-md-1">
                <h2 class="h2prof"> Votre Profil </h2>
            </div>
            <i class="fas fa-caret-right rose3"></i>
        </div>
        <div class="row infoprof">
            <div class="col offset-md-1 gauche">
                <p>Nom : $nom <i class="fas fa-edit"></i></p>
                <br>
                <p>Prenom : $prenom <i class="fas fa-edit"></i></p>
                <br>
                <p>Adresse : $adresse <i class="fas fa-edit"></i></p>
                <br>
                <p>Nationalité : $nation <i class="fas fa-edit"></i></p>
                <br>
                <p>Date de naissance : $data_naissance <i class="fas fa-edit"></i></p>
            </div>
            <div class="col droite">
                <p>Prenom : $prenom <i class="fas fa-edit"></i></p>
                <br>
                <p>Adresse : $adresse <i class="fas fa-edit"></i></p>
                <br>
                <p>Nationalité : $nation <i class="fas fa-edit"></i></p>
                <br>
                <p>Date de naissance : $data_naissance <i class="fas fa-edit"></i></p>
            </div>
        </div>
        <div class="row infoprof2">
            <p class="col offset-md-1 ">Modifiez tout votre profil <i class="fas fa-edit"></i></p> <p class="col"> modifiez votre mot de passe <i class="fas fa-edit"></i></p>
        </div>
    </div>
</div>

<div class="main6">

</div>

<?=template_footer()?>

</body>

</html>