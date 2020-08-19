<?php


function template_meta($title) {
echo<<<EOT
    <!DOCTYPE html>
    <html>
    <head>  
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <link rel="stylesheet" href="../css/nav.min.css">
        <link rel="stylesheet" href="../css/footerNoBootstrap.min.css">
        <link rel="stylesheet" href="../css/index.min.css">
        <link rel="stylesheet" href="../css/concours.min.css">
    </head>
 
EOT;
}

function template_header() {
echo<<<EOT
    <body>
    <div class="menu">
        <div class="row haut align-items-center">
            <div class="logo"><img src="../img/LOGO.png" alt="logo" class="logoimg"></div>
        </div>
    
        <div class="row bas align-items-center">
            <div class="col acceuil">
                <h2 class="h2nav">Acceuil</h2>
            </div>
            <div class="col"></div>
            <div class="col">
                <h2 class="h2nav">Concours</h2>
            </div>
            <div class="col"></div>
            <div class="col">
                <h2 class="h2nav">Profil</h2>
            </div>
    
        </div>
    </div>
    <div class="bleu align-items-center">
        <p class="pnav"> Identifiez-vous (ou inscrivez-vous gratuitement) afin de profiter pleinement des fonctionnalités.</p>
    </div>
    
EOT;
}

function template_footer(){
echo<<<EOT
    
    <div class="footer">
    <h2 class="copy h2foot">Copyright</h2>
    <h2 class="CGU h2foot">Mention legal et CGU</h2>
    <h2 class="contact h2foot">Contact</h2>
    </div>
    
    </body>
    </html>

EOT;
}



?>
