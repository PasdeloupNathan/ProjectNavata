<?php
include 'meta.php';
?>
<?=template_meta('admin')?>
    



<body class="body2">
    


    

<?=template_header()?>



<section class="row page">
  <div class="col- navGauche ">
<div class="  vertical-menu">
  <a  class=" col- active">MENU</a>
  <div class="menu1"><button class="but col-" >Acceuil </button></div>
  <div class="menu1"><button class=" col-" >Concours</button></div>
  <div class="menu1"><button class=" col-">Utilisateurs</button></div>
  <div class="menu1"><button class=" col-">LOGS</button></div>
  
</div>
</div>
<div class="col">
  <div class="ListStats" style="width:50%">
    <div class="col stats ">
    nombre de visiteurs mensuelle :
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
</section>






<?=template_footer()?>

</body>

</html>