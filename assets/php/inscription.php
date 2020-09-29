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

<style>
.connexion{
    text-align: center;
    color: red;
}
</style>

<body style="overflow-x: hidden;">

    <div class="row conect">
        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            <img src="../img/LOGO.png" alt="logo" style="height: 75%;padding-left: 35%;" class="animate__animated animate__rotateI">
         </div>
        <form action  method="POST" class="form-horizontal col-md-4 animate__animated animate__backInUp">
            <fieldset>
                    <!-- Form Name -->
                    <legend>Inscription Particulier</legend>
        <div style="border:solid 1px black;border-radius: 10px; padding-bottom:4%;">

                    <!-- Text input-->
                    <div class="form-group"> 
                        <div class="col" style="padding-top: 4%;">
                        <input type="hidden" name="rôles" value="candidat" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <input id="name" name="name" type="text" placeholder="Nom" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="prénoms" name="prénoms" type="name" placeholder="Prénom" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="email" name="email" type="email" placeholder="Adresse E-mail" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="ville" name="ville" type="name" placeholder="Ville" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="adresse" name="adresse" type="name" placeholder="Adresse" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">  
                            <input id="codepostal" name="codepostal" minlength="5" type="number" placeholder="Code Postal"  class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i> 
                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="mdp" name="mdp" type="password" minlength="5" placeholder="Mot de passe" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="mdp" name="mdpconf" type="password" minlength="5" placeholder="Confirme Mot passe" class="form-control input-md" required  style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div style="padding-top: 1%;">
                        <input type="checkbox" required  name="memo" id="mdp"> <label for="memo"> J’ai lu et j’accepte les conditions générales d’utilisation et la 
                        politique de confidentialité.</label>
                        
                    </div>

                    <!-- Button -->
                    <div class="form-group">
                        <div class="col" style="padding-top: 2.5%;">
                        <a >
                        <button id="test" name="inscrire" type="submit"class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;border-radius: 0;">Inscrivez-vous</button>
                        </a>
                        <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 45%; margin-top: -10.26%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div style="padding-top: 1%;">
                        <a href="./connection.php">Vous avez déjà un compte? Connectez-vous</a>
                    </div>
                </div>
            </fieldset>-                  
    </div>


    <?php
        if(isset($_POST['inscrire'])){ 
            $rôles=$_POST["rôles"];
             $name=$_POST["name"];
             $prénoms=$_POST["prénoms"];
            $email=$_POST["email"];
            $ville=$_POST["ville"];
            $codepostal=$_POST["codepostal"];
            $mdp=$_POST["mdp"];
            $mdpconf=$_POST["mdpconf"];
            $adresse=$_POST["adresse"];
            $img =$_POST["img"]; 
            $tel =$_POST["tel"];
            $nation=$_POST["nation"];
            $naissance=$_POST["naissance"];
            $idcard=$_POST["idcard"]; 
        if($mdp != $mdpconf){
            echo '<p class="connexion animate__animated animate__flash"> les deux mots de passe doivent être identique<p>';
        }else{
             $stmt = $pdo->prepare("SELECT * FROM users WHERE email=?");
    $stmt->execute([$email]); 
    $users = $stmt->fetch();
    if($users){
        echo '<p class="connexion animate__animated animate__flash">cette addresse mail est deja utilisé<p>';
    }else{
        echo '<script LANGUAGE="javascript">document.location.href="connection.php"</script>';    
 die(inscription($rôles,$name,$prénoms,$email,$ville,$adresse,$codepostal,$mdp));
    }

        }
   
       
        }
    ?>

</body>
</html>
