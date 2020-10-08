<?php
session_start();

require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php include('meta.php')?>
<?=template_meta('connexions')?>

<style>

</style>
<body>
<div class="row conect" style="width: 100vw;">

        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            <img src="../img/LOGO.png"alt="logo" style="height: 75%;padding-left: 35%;" class="animate__animated animate__rotateIn">
        </div>
        <form action="" method="POST" class="form-horizontal col-md-4 ">
            <fieldset>

                <!-- Form Name -->
                <legend style="padding-top: 15%;">Connectez-Vous</legend>

                <!-- Text input-->

                <div class="form-group ">
                    <div class="col" style="padding-top: 15%;">
                        <input id="name" name="email" type="email" placeholder="Email" class="form-control input-md"  required="" style="border:solid 1px #707070;border-radius: 0;">
                        <i class="fas fa-caret-right tests"></i>
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input id="mdp" name="mdp" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070;border-radius: 0;">
                        <i class="fas fa-caret-right tests" ></i>

                    </div>
                </div>

                <div style="padding-top: 5%;">
                    <input type="checkbox" name="memo" id="memo"> <label for="memo"> Memorisez vos information</label>
                </div>

                <div style="padding-top: 2.5%;">
                    <a href="reinitialisation.php">Mot de passe oublié ?</a>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <div class="col" style="padding-top: 7.5%;">
                    <button id="connexion" type="submit" name="connexion" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;border-radius: 0;">Connectez-Vous</button>
                        <i class="fas fa-caret-right tests"></i>
                    </div>
                </div>

                <div style="padding-top: 5%;">
                    <a href="./inscription.php">Pas encore inscrit ? Inscrivez-vous.</a>
                </div>
                </div>
            </fieldset>
        </form>

    </div>

    <?php
        if(isset ($_POST['connexion'])){
           $email=$_POST["email"];
           $mdp=$_POST["mdp"];
        if($email!= '' AND $mdp != ''){
            $test = $pdo->prepare("select * from users where email = ?");
            $test->execute([$email]);
            $user= $test->fetchAll(\PDO::FETCH_ASSOC);
            foreach($user as $users){
                    //déclaration data
                if($users['mdp']==$mdp){
                    $_SESSION['rôles']=$users['rôles'];
                    $_SESSION['noms']=$users['noms'];
                    $_SESSION['prénoms']=$users['prénoms'];
                    $_SESSION['ville']=$users['ville'];
                    $_SESSION['adresse']=$users['adresse'];
                    $_SESSION['codepostal']=$users['codepostal'];
                    $_SESSION['img']=$users['img'];
                    $_SESSION['tel']=$users['tel'];
                    $_SESSION['nation']=$users['nation'];
                    $_SESSION['naissance']=$users['naissance'];
                    $_SESSION['idcard']=$users['idcard'];
                    $_SESSION['email']=$users['email'];
                    $_SESSION['mdp']=$users['mdp'];
                    $_SESSION['id_users']=$users['id_users'];

                    echo '<script LANGUAGE="javascript">document.location.href="index.php"</script>';
                }else{
                    echo '<p class="connexion animate__animated animate__flash">Votre information sont incorrect<p>';
                }

        }

        
        }
    
    } 
    
    if(isset ($_POST['connexion'])){ 
        $email=$_POST["email"];
        $mdp=$_POST["mdp"];
     if($email!= '' AND $mdp != ''){
         $test = $pdo->prepare("select * from entreprise where email_societe = ?");
         $test->execute([$email]);
         $entreprise= $test->fetchAll(\PDO::FETCH_ASSOC);      
         foreach($entreprise as $entreprises){
                 //déclaration data
             if($entreprises['mdp_societe']==$mdp){
                 $_SESSION['rôles']=$entreprises['rôles'];
                 $_SESSION['nom_societe']=$entreprises['nom_societe'];
                 $_SESSION['email_societe']=$entreprises['email_societe'];
                 $_SESSION['ville_societe']=$entreprises['ville_societe'];
                 $_SESSION['adresse_societe']=$entreprises['adresse_societe'];
                 $_SESSION['codepostal_societe']=$entreprises['codepostal_societe'];
                 $_SESSION['siret_societe']=$entreprises['siret_societe'];
                 $_SESSION['mdp_societe']=$entreprises['mdp_societe'];
                 $_SESSION['img_societe']=$entreprises['img_societe'];
                 $_SESSION['id_entreprise']=$entreprises['id_entreprise'];

                 echo '<script LANGUAGE="javascript">document.location.href="index.php"</script>';
             }else{
                 echo '<p class="connexion animate__animated animate__flash">Votre information sont incorrect<p>';
             }

     }

     
     }
 
 } 

 if(isset ($_POST['connexion'])){ 
    $email=$_POST["email"];
    $mdp=$_POST["mdp"];
 if($email!= '' AND $mdp != ''){
     $test = $pdo->prepare("select * from admin where email = ?");
     $test->execute([$email]);
     $admin= $test->fetchAll(\PDO::FETCH_ASSOC);      
     foreach($admin as $admins){
             //déclaration data
         if($admins['mdp']==$mdp){
             $_SESSION['rôles']=$admins['rôles'];
             $_SESSION['nom']=$admins['nom'];
             $_SESSION['email']=$admins['email'];
             $_SESSION['mdp']=$admins['mdp'];

             echo '<script LANGUAGE="javascript">document.location.href="index.php"</script>';
         }else{
             echo '<p class="connexion animate__animated animate__flash">Votre information sont incorrect<p>';
         }

 }

 
 }

} 



    ?>
</body>

</html>
