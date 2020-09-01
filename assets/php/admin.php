<?php
include 'meta.php';
?>
<?=template_meta('admin')?>
    



<body class="body2">
    


    

<?=template_header()?>

<div class="row  page">

<?=template_admin()?>

<div class="col-">
  <div class="ListStats" style="width:50%">
    <div class="col-  stats ">
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
</div>






<?=template_footer()?>

</body>

</html>