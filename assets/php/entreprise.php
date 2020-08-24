<?php include('meta.php')?>
<?=template_meta('Inscription')?>

<body style="overflow-x: hidden;">
    <div class="row conect">
        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            <img src="../img/LOGO.png" alt="logo" style="height: 75%;padding-left: 35%;" class="animate__animated animate__rotateIn">
         </div>
        <form class="form-horizontal col-md-4 animate__animated animate__backInUp" >
            <fieldset>

                    <!-- Form Name -->
                    <legend > Inscription entreprises</legend>
        <div style="border:solid 1px black;border-radius: 10px; padding-bottom:4%;">  

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col" style="padding-top: 4%;">
                            <input id="textinput" name="textinput" type="text" placeholder="Nom de la société" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="textinput" name="textinput" type="email" placeholder="Adresse E-mail" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="name" placeholder="Ville" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>   
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="name" placeholder="Adresse de la société" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="number" placeholder="Code Postal" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="number" placeholder="Numéro de siret" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>
                

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="password" placeholder="Confirme Mot passe" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div style="padding-top: 1%;">
                        <input type="checkbox" name="memo" id="memo"> <label for="memo"> J’ai lu et j’accepte les conditions générales d’utilisation et la 
                        politique de confidentialité.</label>
                    </div>



                    <!-- Button -->
                    <div class="form-group">
                        <div class="col" style="padding-top: 2.5%;">
                            <button id="" name="" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;border-radius: 0;">Inscrivez-vous</button>
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 45%; margin-top: -10.26%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div style="padding-top: 1%;">
                        <a href="insc.php">Vous avez déjà un compte? Connectez-vous</a>
                    </div>

                    <div style="padding-top: 1%;">
                        <a href="insc.php">Vous avez déjà un compte Particulier ? ou Inscrivez-vous</a>
                    </div>

            </fieldset>
        </form>
    </div>

</body>
</html>