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

<div class="container">
    <div class="row">
        <div class="xs-12 md-6 mx-auto">
            <div id="countUp">
                <div class="numberRedirect" data-count="404">0</div>
                <div class="textRedirect">Page not found</div>
                <div class="textRedirect">This may not mean anything.</div>
                <div class="textRedirect">I'm probably working on something that has blown up.</div>
            </div>
        </div>
    </div>
</div>    

<?=template_footer()?>
</body>