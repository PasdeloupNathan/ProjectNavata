<?php include('meta.php')?>
<?=template_meta('connection')?>

<body>


    


<div class="row conect" style="width: 100vw;">
            
        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            <img src="../img/LOGO.png" alt="logo" style="height: 75%;padding-left: 35%;" class="animate__animated animate__rotateIn">
        </div>
        <form class="form-horizontal col-md-4 animate__animated animate__backInUp">
            <fieldset>

                <!-- Form Name -->
                <legend style="padding-top: 15%;">Connectez-Vous</legend>

                <!-- Text input-->

                <div class="form-group "> 
                    <div class="col" style="padding-top: 15%;"> 
                
                        <input id="textinput"name="textinput" type="email" placeholder="Email" class="form-control input-md"  required="" style="border:solid 1px #707070;border-radius: 0;">
                        <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 45%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                    </div>
                </div>
           
                <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input id="" name="" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070;border-radius: 0;">
                        <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 45%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>

                    </div>
                </div>

                <div style="padding-top: 5%;">
                    <input type="checkbox" name="memo" id="memo"> <label for="memo"> Memorisez vos information</label>
                </div>

                <div style="padding-top: 2.5%;">
                    <a href="mdpo.php">Mot de passe oublié ?</a>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <div class="col" style="padding-top: 7.5%;">
                        <button id="" name="" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;border-radius: 0;">Connectez-Vous</button>
                        <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 45%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                    </div>
                </div>

                <div style="padding-top: 5%;">
                    <a href="./inscription.php">Pas encore inscrit ? Inscrivez-vous.</a>
                </div>
                </div>
            </fieldset>
        </form>
    </div>

 


</body>
</html>
