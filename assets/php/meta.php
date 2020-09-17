<?php


// Function pour appeler la meta dans le code

function template_meta($title) {
echo<<<EOT
    <!DOCTYPE html>
    <html>
    <head>  
    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$title</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="../css/nav.min.css">
        <link rel="stylesheet" href="../css/footer.min.css">
        <link rel="stylesheet" href="../css/index.min.css">      
        <link rel="stylesheet" href="../css/concours.min.css">
        <link rel="stylesheet" href="../css/connects.min.css"> 
        <link rel="stylesheet" href="../css/profil.min.css">
        <link rel="stylesheet" href="../css/admin.min.css">
        <link rel="stylesheet" href="../css/adminConcours.min.css">
        <link rel="stylesheet" href="../css/adminTable.min.css">
        <link rel="stylesheet" href="../css/adminLogs.min.css">
        <link rel="stylesheet" href="../css/entreprise.min.css">
        <link rel="stylesheet" href="../css/input.min.css">

    </head>
 
EOT;
}

// Function pour appeler le header de base dans le code

function template_header() {
echo<<<EOT
    <div class="menu">
        <div class="row haut align-items-center">
            <div class="logo animate__animated animate__rubberBand"><img src="../img/LOGO.png" alt="logo" class="logoimg"></div>
        </div>
    
        <div class="row bas align-items-center">
            <div class="col accueil">
                <h2 class="h2nav"><a href="./index.php">Acceuil</a></h2>
            </div>
            <div class="col"></div>
            <div class="col">
            <h2 class="h2nav"><a href="./concours.php">Concours</a></h2>
            </div>
            <div class="col"></div>
            <div class="col">
                <h2 class="h2nav"><a href="./connection.php">Connectez-vous</a></h2>
            </div>
    
        </div>
    </div>
    <div class="bleu align-items-center">
        <p class="pnav animate__animated animate__backInLeft"> Identifiez-vous ( <a href="./inscription.php" class="animate__animated animate__shakeX">ou inscrivez-vous</a> ) afin de profiter pleinement des fonctionnalités.</p>
    </div>
    
EOT;
}
// Function pour appeler le header des candidats dans le code
function template_headerUsers() {
echo<<<EOT
        <div class="menu">
            <div class="row haut align-items-center">
                <div class="logo animate__animated animate__rubberBand"><img src="../img/LOGO.png" alt="logo" class="logoimg"></div>
            </div>
        
            <div class="row bas align-items-center">
                <div class="col accueil">
                    <h2 class="h2nav"><a href="./index.php">Acceuil</a></h2>
                </div>
                <div class="col"></div>
                <div class="col">
                <h2 class="h2nav"><a href="./concours.php">Concours</a></h2>
                </div>
                <div class="col"></div>
                <div class="col">
                    <h2 class="h2nav"><a href="./profil.php">Profil</a></h2>
                </div>
        
            </div>
        </div>
        <div class="bleu align-items-center">
            <p class="pnav animate__animated animate__backInLeft"> Identifiez-vous ( <a href="./inscription.php" class="animate__animated animate__shakeX">ou inscrivez-vous</a> ) afin de profiter pleinement des fonctionnalités.</p>
        </div>
        
    EOT;
}

// Function pour appeler le header des entreprises dans le code
function template_headerEntreprise() {
echo<<<EOT
            <div class="menu">
                <div class="row haut align-items-center">
                    <div class="logo animate__animated animate__rubberBand"><img src="../img/LOGO.png" alt="logo" class="logoimg"></div>
                </div>
            
                <div class="row bas align-items-center">
                    <div class="col accueil">
                        <h2 class="h2nav"><a href="./index.php">Acceuil</a></h2>
                    </div>
                    <div class="col"></div>
                    <div class="col">
                    <h2 class="h2nav"><a href="./concours.php">Concours</a></h2>
                    </div>
                    <div class="col"></div>
                    <div class="col">
                        <h2 class="h2nav"><a href="./entrepriseprof.php">Votre Entreprise</a></h2>
                    </div>
            
                </div>
            </div>
            <div class="bleu align-items-center">
                <p class="pnav animate__animated animate__backInLeft"> Identifiez-vous ( <a href="./inscription.php" class="animate__animated animate__shakeX">ou inscrivez-vous</a> ) afin de profiter pleinement des fonctionnalités.</p>
            </div>
            
        EOT;
    }


        // Function pour appeler le header des entreprises dans le code

function template_headerAdmin() {
echo<<<EOT
            <div class="menu">
                <div class="row haut align-items-center">
                    <div class="logo animate__animated animate__rubberBand"><img src="../img/LOGO.png" alt="logo" class="logoimg"></div>
                </div>
            
                <div class="row bas align-items-center">
                    <div class="col accueil">
                        <h2 class="h2nav"><a href="./index.php">Acceuil</a></h2>
                    </div>
                    <div class="col"></div>
                    <div class="col">
                    <h2 class="h2nav"><a href="./concours.php">Concours</a></h2>
                    </div>
                    <div class="col"></div>
                    <div class="col">
                        <h2 class="h2nav"><a href="./admin.php">Dashboard</a></h2>
                    </div>
            
                </div>
            </div>
            <div class="bleu align-items-center">
                <p class="pnav animate__animated animate__backInLeft"> Identifiez-vous ( <a href="./inscription.php" class="animate__animated animate__shakeX">ou inscrivez-vous</a> ) afin de profiter pleinement des fonctionnalités.</p>
            </div>
            
        EOT;
}
// Function pour appeler le header des admins dans le code
function template_admin(){
echo<<<EOT
    
        <div class="col-2 navGauche ">
            <div class="  vertical-menu">
                <a  class=" col active">MENU</a>
        <div class="menu1"><button onclick="location.href='./admin.php'" type="button" class="but col" >Acceuil</button></div>
        <div class="menu1"><button onclick="location.href='./adminConcours.php'" type="button" class="but col" >Concours</button></div>
        <div class="menu1"><button onclick="location.href='./adminTable.php'" type="button" class="but col" >Utilisateurs</button></div>
        <div class="menu1"><button onclick="location.href='./adminLogs.php'" type="button" class="but col" >Logs</button></div>
        
        </div>
    </div>
    
    

EOT;
}

// Function pour appeler le footer dans le code

function template_footer(){
echo<<<EOT
    <div class="foot row align-items-center">
        <div class="col acceuil">
            <h2 class="copy">Copyright</h2>
        </div>
        <div class="col">
            <h2 class="CGU">Mention legal et CGU</h2>
        </div>
        <div class="col">
            <h2 class="contact">Contact</h2>
        </div>
    </div>



EOT;
}



