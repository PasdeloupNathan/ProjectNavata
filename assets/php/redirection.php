<? include 'model.php'; ?>
<?php session_start(); 

  ?>
<!-- // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion// -->

<!-- Appeller de la page meta.php ou se situe toute les fonction template  -->
<?php include 'meta.php';?>
<!-- fonction permettant d'accédé a la page correspondant aux rôles -->
<?php
if($_SESSION == FALSE){
    template_header();
}elseif($_SESSION["rôles"] == 'candidat'){
    template_headerUsers();
}elseif($_SESSION["rôles"] == 'entreprise'){
    template_headerEntreprise();
}elseif($_SESSION["rôles"] == 'admin'){
    template_headerAdmin();
}

?>


<?=template_meta('Redirection')?>
<body class="body">

<!-- 
<section class="col row redirect1" >
<div class="col Sousredirect">
salut je suis le trait_exists
</div>

</section> -->

<div class="col">
    <!-- premiere partie du site contenent le concours avec les plus d'angouement  -->
        <div class="redirect1 " class="container">
           
                <div  class="col ">
                <img  class="logoimg3" src="https://freefrontend.com/assets/img/html-funny-404-pages/SVG-Animation-404-Page.gif" alt="logo">
                <div class="col">
                        
                        <h2 class=" col- textredirect">Vous essayez d'accéder a une page non autorisé</h2> <br>
                        <h3 class=" col- textredirect"> veuillez retournez vers le droit chemin en cliquant <a href="index.php"> ici</a></h3>
                        <p>Sinon vous serez redirigé automatiquement vers la page d'acceuil dans  <span id="counter">10</span> seconde(s).</p>
                        
                    
                    </div>
                </div>
                
            </div>
        </div>
        </div>

<div class="main3 h2nav"> 

<script type="text/javascript">
function countdown() {
    var temp = document.getElementById('counter');
    if (parseInt(temp.innerHTML)<=0) {
        location.href = 'index.php';
    }
    temp.innerHTML = parseInt(temp.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>
<?=template_footer()?>
</body>


