<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php if($_SESSION["id_users"] == 1){
  ?>



<?php
include 'meta.php';
?>


<?=template_meta('admin')?>




<body class="body2" style="text-align: center;">


<?=template_header()?>
<section class="row page">
<?=template_admin()?>

<!-- tableau permettant de lister les datas des users -->
<div style="height: 100%;" class="col" >
    <h2 style="padding-top:5%;">Creation d'un nouvel admin</h2>
<form method="post" action="">
    <label style="padding-top:5%;" for="nom">Nom : <input  placeholder="Nom" type="text" name="nom" required></label>
    <br>
    <label style="padding-top:5%;" for="email">Email : <input  placeholder="Email" type="text" name="email" required></label>
    <br>
    <label style="padding-top:5%;" for="mdp">mdp : <input type="password" minlength="5" placeholder="Mot de passe" name="mdp" required></label>
    <input type="hidden" name="rôles" value="admin" class="form-control input-md" required>
    <br>
    <button type="submit" name="admin" style="margin-top:5%;">Validation des informations</button>
</form>

</div>

<?=template_footer()?>
<?php
} else{
    header("Location: redirection.php");
}


if(isset($_POST['admin'])){ 
    $rôles=$_POST["rôles"];
    $nom=$_POST["nom"];
    $email=$_POST["email"];
    $mdp=$_POST["mdp"];
}


die(adminCreate($rôles,$nom,$email,$mdp,));
?>