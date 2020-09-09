<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
session_start();
?>


<?php include 'meta.php';?>



<?=template_meta('Changez votre nom')?>

<body class="body2">

<?=template_header()?>

<div class="maininput">
<h2>Modifiez vos informations</h2>
    <div class="inputg row">
        <div class="input offset-md-1 col-4">

            <label for="noms">Nom : <input type="text" name="noms" placeholder="Changez votre nom"></label>
            <br>
            <label for="adresse">Adresse : <input type="text" name="adresse" placeholder="Changez votre Adresse"></label>
            <br>
            <label for="codepostal">Code-postal : <input type="text" name="codepostal" placeholder="Changez votre Code-postal"></label>
            <br>
            <label for="email">Email : <input type="text" name="email" placeholder="Changez votre Email"></label>
            <br>
            <label for="naissance">Date de naissance : <input type="text" name="naissance" placeholder="Changez votre Date de naissance"></label>
            
        </div>
        <div class="input col-4">

            <label for="prénoms">Prénom : <input type="text" name="prénoms" placeholder="Changez votre prénoms"></label>
            <br>
            <label for="ville">Ville : <input type="text" name="ville" placeholder="Changez votre Ville"></label>
            <br>
            <label for="nation">Nationalité : <input type="text" name="nation" placeholder="Changez votre Nationalié"></label>
            <br>
            <label for="tel">N°Telephone : <input type="text" name="tel" placeholder="Changez votre N°Telephone"></label>
            <br>
            <label for="idcard">N°ID : <input type="text" name="idcard" placeholder="Changez votre N°ID"></label>

        </div>
    </div>
    <div class="buttong">
        <button>Enregistrer les modifications</button>
        <button>Annulez les modifications</button>
    </div>
</div>

<?=template_footer()?>

</body>

</html>

<?php
        if(isset($_POST['inscrire'])){ 
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
        $idcard=$_POST["idcard"]; $email = "$email";
    }

?>