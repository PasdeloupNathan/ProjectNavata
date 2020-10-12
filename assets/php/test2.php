<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<!--  Permission pour le rôles admin -->

<?php
include 'meta.php';
// $total= nombre_vues()
$annee = (int)date('Y');

?>

<?=template_meta('adminConcours')?>



 
<?php
// =========================================================================
//   function page admins

// function calculant le nombre d'entreprise créé
$sth = $pdo->prepare("SELECT * from entreprise");

/* Compte le nombre de colonnes dans le jeu de résultat (non-existant) */
$countEntreprise = $sth->rowCount();
$sth->execute();
/* Compte le nombre de colonnes dans le jeu de résultats */
$countEntreprise = $sth->rowCount();
// ===============================================
// function calculant le nombre de concours créé
$sth = $pdo->prepare("SELECT * from users WHERE rôles ='candidat'");
$countCandidat = $sth->rowCount();
$sth->execute();
$countCandidat = $sth->rowCount();
// ===============================================
// function calculant le nombre de concours créé
$sth = $pdo->prepare("SELECT * from concours");
$countConcours = $sth->rowCount();
$sth->execute();
$countConcours = $sth->rowCount();
// ===============================================
// code permettant de compté le nombre total d'utilisateurs sur le site (admin exclu)
$countTotal = $countCandidat + $countEntreprise;


//  permet d'affiché le nombre de visite du site
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'compteur.php';
    ajouter_vue();
    $vues = nombre_vues()
?>




<body class="body2">
<?=template_headerAdmin()?>

<div class="  row page ">

<?=template_admin()?>
<!-- 1er section -->
        <div class="col ListStats accordion" id="accordion1">
            <div class="card">
               <div class="card-header" id="heading1">
                  <h5 class="mb-0">
                     <button class="btn btn-link collapsed" type="button"
                        data-toggle="collapse" data-target="#collapse1"
                        aria-expanded="false" aria-controls="collapse1">
                        <p id="titrecard" >nombre de concours en ligne :</p>
                     </button>
                  </h5>
               </div>
               <div id="collapse1" class="collapse" aria-labelledby="heading1"
                  data-parent="#accordion1">
                    <div class="col stats card-body ">
                       <p>nombre de concours : <?= $countConcours?></p>
                    </div>
               </div>
            </div>
        </div>

 <!-- 2e section -->
    <div class="col ListStats accordion" id="accordion2">
        <div class="card">
            <div class="card-header" id="heading2">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <p id="titrecard">  nombre de visite</p>
                        </button>
                  </h5>
            </div>
               <div id="collapse2" class="collapse" aria-labelledby="heading2"
                  data-parent="#accordion2">
                    <div class="col stats card-body ">
                      <p>nombre de visite du site   : <?= $vues ?> visites</p>
                    </div>
               </div>
            </div>
        </div>
         <div class="col ListStats accordion" id="accordion3">
        <div class="card">
            <div class="card-header" id="heading3">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <p id="titrecard" >nombre d'utilisateur inscrit</p>
                        </button>
                  </h5>
            </div>
               <div id="collapse3" class="collapse" aria-labelledby="heading3"
                  data-parent="#accordion3">
                    <div class="col stats card-body ">
                       <p>nombre total d'utilisateur : il y a <?=$countTotal ?>  utilisateurs inscrite</p>
                       <p>nombre d'entreprise : il y a <?=$countEntreprise ?>  utilisateurs inscrite</p>
                       <p>nombre de candidat : il y a <?=$countCandidat ?>  utilisateurs inscrite</p>
                    </div>
               </div>
            </div>
        </div>
    </div>

    </div>
 <!-- 3e section -->


</div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
 <?=template_footer()?>

</body>

</html>