<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php if($_SESSION["rôles"] == 'admin'){
  ?>


<?php
include 'meta.php';
?>
<?=template_meta('admin')?>
    



<body class="body2">
    
   

<?=template_header()?>

<section class="row page">

<?=template_admin()?>
<!-- tableau listant les concours -->
<form class="col-10 formulaire" action="">
    <div style="width: 100%; " class=" menu">
        <div  class="listeData row align-items-center">
            <div class="offset-md-5 col-2" ><p >test</p></div>
            <div  class="col-2"><button class="update" type="button" name="modifier">modifier</button> </div>
            <div class="col-2 "><button class="delete" type="button" name="delete"> delete</button></div>
        </div>
        <div  class="listeData row align-items-center">
            <div class="offset-md-5 col-2" ><p > mus, ipsa id.</p></div>
            
            <div  class="col-2"><button class="update" type="button" name="modifier">modifier</button> </div>
            <div class="col-2 "><button class="delete" type="button" name="delete"> delete</button></div>
        </div>
        <div  class="listeData row align-items-center">
            <div class="offset-md-5 col-2" ><p >test</p></div>
            
            <div  class="col-2"><button class="update" type="button" name="modifier">modifier</button> </div>
            <div class="col-2 "><button class="delete" type="button" name="delete"> delete</button></div>
        </div>
        <div  class="listeData row align-items-center">
            <div class="offset-md-5 col-2" ><p >test</p></div>
            
            <div  class="col-2"><button class="update" type="button" name="modifier">modifier</button> </div>
            <div class="col-2 "><button class="delete" type="button" name="delete"> delete</button></div>
        </div>
<div style="width: 100%; " ><button class="col-3 validate" type="button">validé</button></div>

</div>
</form>

<div>
<?
$concours = getAllConcours();
?>
</div class='listeData' >
<?=template_footer()?>




<body>
    
<?php
} else{
    header("Location: redirection.php");
}
?>