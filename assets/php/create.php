<?php
session_start()
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php if($_SESSION["rôles"] == 'entreprise'){
  ?>
<?php include('meta.php')?>

<?=template_meta('create')?> 

<style>
.connexion{
    text-align: center;
    color: red;
}
</style>


<body class="body2">
<?=template_headerEntreprise()?>

    <div class="row test">
        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            
         </div>
        <form  action="" method="POST" class="form-horizontal col-md-4 animate__animated animate__backInUp" >
            <fieldset>

                    <!-- Form Name -->
                    <legend >Formulaire de création d’un concours</legend>
        <div style="border-radius: 10px; padding-bottom:4%;">

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col" style="padding-top: 4%;">
                            <input id="textinput" name="noms_concours" type="text" placeholder="Nom du concours" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            
                        </div>
                    </div>

                    

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <textarea id="" name="descriptionConcours" type="name" placeholder="Déscription" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;" ></textarea>
                            </div>
                    </div>


                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="locaConcours" type="name" placeholder="Localisation" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                                                    </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="date_concours" type="date" placeholder="Date" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                                                    </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="placeConcoursMax" type="number" placeholder="Participant Max" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                                                    </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="link_entreprise" type="name" placeholder="Votre site" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                                                    </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="img_societe" type="text" placeholder="Mettez votre URL du logo" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                                                    </div>
                    </div>

                    <div class="form-group">
                            <select name="menu_deroulant" style="padding-top: 1%; #707070;  width: 85%;">
                                <option class="form-control input-md" required="" style="border:solid 1px #707070; width: 85%;border-radius: 0;">Sport</option>
                                <option class="form-control input-md" required="" style="border:solid 1px #707070; width: 85%;border-radius: 0;">éducation</option>
                                <option class="form-control input-md" required="" style="border:solid 1px #707070; width: 85%;border-radius: 0;">divertissement</option>
                                <option class="form-control input-md" required="" style="border:solid 1px #707070; width: 85%;border-radius: 0;">Fonctionnaire</option>
                                <option class="form-control input-md" required="" style="border:solid 1px #707070; width: 85%;border-radius: 0;">E-sport</option>
                                
                            </select>
                    </div>

                    




            <!-- A MODIFIER  -->

                    <div style="padding-top: 1%;">
                        <input type="checkbox" name="memo" id="memo"> <label for="memo"> J’ai lu et j’accepte les conditions générales d’utilisation et la 
                        politique de confidentialité.</label>
                    </div>

            <!-- A MODIFIER -->


                    <!-- Button -->
                    <div class="form-group">
                        <div class="col" style="padding-top: 2.5%;">
                            <button id="" name="create" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;border-radius: 0;">Validez votre concours</button>
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 44.4%; margin-top: -11.77%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div style="padding-top: 1%;">
                        <a href="insc.php">Retour</a>
                    </div>
                    </div>
            </fieldset>
        </form>
    </div>



<?=template_footer()?>

<?php
        if(isset($_POST['create'])){ 
             $noms_concours=$_POST["noms_concours"];
             $nom_entreprise=$_POST["nom_entreprise"];
            $descriptionConcours=$_POST["descriptionConcours"];
            $locaConcours=$_POST["locaConcours"];
            $date_concours=$_POST["date_concours"];
            $placeConcoursMax=$_POST["placeConcoursMax"];
            $link_entreprise=$_POST["link_entreprise"];
            $img_societe=$_POST["img_societe"];
            $menu_deroulant=$_POST["menu_deroulant"];
        if($mdp != $mdpconf){
            echo '<p class="connexion animate__animated animate__flash"> les deux mots de passe doivent être identique<p>';
        }else{
             $stmt = $pdo->prepare("SELECT * FROM Concours WHERE noms_concours=?");
    $stmt->execute([$noms_concours]); 
    $Concours = $stmt->fetch();
    if($Concours){
    }else{
        echo '<script LANGUAGE="javascript">document.location.href="index.php"</script>';    
 die(create_form_concours($noms_concours,$nom_entreprise,$descriptionConcours,$locaConcours,$date_concours,$placeConcoursMax,$link_entreprise, $_SESSION['id_entreprise'], $menu_deroulant, $img_societe));
    }


        }
   
       
        }
?>

</body>
</html>
<?php
} else{
    header("Location: redirection.php");
}
?>