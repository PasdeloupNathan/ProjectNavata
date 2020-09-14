<?php
session_start()
?>
<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>


<?php include('meta.php')?>
<?=template_meta('Inscription')?>

<body style="overflow-x: hidden;">
    <div class="row conect">
        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            <img src="../img/LOGO.png" alt="logo" style="height: 75%;padding-left: 35%;" class="animate__animated animate__rotateIn">
         </div>
        <form action="" method="POST" class="form-horizontal col-md-4 animate__animated animate__backInUp" >
            <fieldset>

                    <!-- Form Name -->
                    <legend > Inscription entreprises</legend>
        <div style="border:solid 1px black;border-radius: 10px; padding-bottom:4%;">  

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col" style="padding-top: 4%;">
                            <input id="textinput" name="nom_societe" type="text" placeholder="Nom de la société" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="textinput" name="email_societe" type="email" placeholder="Adresse E-mail" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="ville_societe" type="name" placeholder="Ville" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>   
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="adresse_societe" type="name" placeholder="Adresse de la société" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="codepostal_societe" type="number" placeholder="Code Postal" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="siret_societe" type="number" placeholder="Numéro de siret" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="mdp_societe" name="mdp_societe" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>
                

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="mdpconf" name="mdpconf" type="password" placeholder="Confirme Mot passe" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div style="padding-top: 1%;">
                        <input type="checkbox" name="memo" id="memo"> <label for="memo"> J’ai lu et j’accepte les conditions générales d’utilisation et la 
                        politique de confidentialité.</label>
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <div class="col" style="padding-top: 2.5%;">
                            <button id="test" name="entreprises" type="submit" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;border-radius: 0;">Inscrivez-vous</button>
                            
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 45%; margin-top: -10.26%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div style="padding-top: 1%;">
                        <a href="insc.php">Vous avez déjà un compte? Connectez-vous</a>
                    </div>

                    <div style="padding-top: 1%;">
                        <a href="insc.php">Vous avez déjà un compte Particulier ? ou Inscrivez-vous</a>
                    </div>

            </fieldset>
        </form>
    </div>

    <?php
        if(isset($_POST['entreprises'])){ 
             $nom_societe=$_POST["nom_societe"];
             $email_societe=$_POST["email_societe"];
            $ville_societe=$_POST["	ville_societe"];
            $adresse_societe=$_POST["adresse_societe"];
            $codepostal_societe=$_POST["codepostal_societe"];
            $siret_societe=$_POST["siret_societe"];
            $mdp_societe=$_POST["mdp_societe"];
            $img_societe =$_POST["img_societe"]; 
        $mdpconf=$_POST["mdpconf"]; $email_societe = "$email_societe";
        if($mdp_societe != $mdpconf){
            echo '<p class="connexion animate__animated animate__flash"> les deux mots de passe doivent être identique<p>';
        }else{
             $stmt = $pdo->prepare("SELECT * FROM entreprise WHERE email_societe=?");
    $stmt->execute([$email_societe]); 
    $entreprise = $stmt->fetch();
    if($entreprise){
        echo '<p class="connexion animate__animated animate__flash">cette addresse mail est deja utilisé<p>';
    }else{
        echo '<script LANGUAGE="javascript">document.location.href="connection.php"</script>';    
 die(entreprise($nom_societe,$email_societe,$ville_societe,$adresse_societe,$codepostal_societe,$siret_societe,$mdp_societe));
    }

        }
   
       
        }
    ?>

</body>
</html>
