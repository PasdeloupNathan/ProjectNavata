<?php


include 'meta.php';
// $total= nombre_vues()
$annee = (int)date('Y');

?>
<?=template_meta('adminConcours')?>
    



<body class="body2">
    


    

<?=template_header()?>

<div class="row page">

<?=template_admin()?>
<!-- //frontEnd -->
<div class="col">
  <div class="ListStats" style="width:50%">
    <div class="col-  stats ">
    <?php 
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'function' . DIRECTORY_SEPARATOR . 'compteur.php';
    ajouter_vue();
    $vues = nombre_vues()
    ?>
    nombre de visiteurs  : <?= $vues ?> visites
    </div>
    
    <div class="col stats ">
    nombre de personne inscrite :
    </div>
    <div class="graph row"style="width:50%">

    
    <div id="cercle" class="col graph">

    </div>
    <div id="cercle" class="col graph">

    </div>
    </div>
  </div>
  <div class="ListStats" style="width:50%">
    <div class="col stats ">
    nombre de concours :
    </div>  
    <div class="col stats ">
    pourcentage homme/femme :
    </div>
    <div class="graph row"style="width:50%">

    
    <div id="cercle" class="col graph">

    </div>
    <div id="cercle" class="col graph">

    </div>
    </div>
  </div>
</div>
</div>


<!-- //backEnd -->




<?=template_footer()?>

</body>

</html>