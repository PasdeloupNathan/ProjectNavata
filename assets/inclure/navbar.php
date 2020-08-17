
<?php

function template_header($title) {
echo<<<EOT

<div class="menu">
    <div class="row haut align-items-center">
        <div class="logo"><img src="../LOGO.png" alt="logo" class="logoimg"></div>
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
<div class="bleu row align-items-center">
    <p class="pnav"> Identifiez-vous (ou inscrivez-vous gratuitement) afin de profiter pleinement des fonctionnalités.</p>
</div>

EOT;
}

?>