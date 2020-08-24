<?php
include 'meta.php';
?>


<?=template_meta('Acceuil')?>
   
<body class="body">

<?=template_header()?>
<div class="main1 row" style="margin-left:0;margin-right:0;">
    
<div class="col doubleC row align-items-center">
    <div class="newC">
        <h2 class="h2new">Nouveaux Concours</h2>
        <i class="fas fa-caret-right rose1"></i>
            <div class="row info">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginf">
                </div>
                <div class="col-5 offset-md-1">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
            <div class="row info">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginf">
                </div>
                <div class="col-5 offset-md-1">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
    </div>
</div>
<div class="col doubleC row align-items-center">
    <div class="endC">
        <h2 class="h2new">Fin Concours</h2>
        <i class="fas fa-caret-right rose1"></i>
        <div class="row info">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginf">
                </div>
                <div class="col-5 offset-md-1">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
            <div class="row info">
                <div class="col-5 offset-md-1">
                    <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginf">
                </div>
                <div class="col-5 offset-md-1">
                    <p>Nom <br> Info <br> Desc</p>
                </div>
            </div>
    </div>
</div>


</div>
<div class="main2 row align-items-center">
    <div class="bestc">
        <div class="titrec">
            <i class="fas fa-caret-right fleche2"></i> <h2 class="h2cat">  $Categorie  </h2><i class="fas fa-caret-right fleche1"></i>
        </div>
        <i class="fas fa-caret-right rose2"></i>
        <div class="row info2">
            <div class="col-5 offset-md-1">
                <img src="../img/exam.jpg" alt="concours" style="width: 100%;" class="imginf">
            </div>
            <div class="col-5 offset-md-1">
                <p>Nom <br> Info <br> Desc</p>
            </div>
        </div>
    </div>
</div>


<?=template_footer()?>

</body>

</html>