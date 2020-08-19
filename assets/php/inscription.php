<?php include('meta.php')?>
<?=template_meta('connection')?>


<div class="row conect" style="width: 100vw;">
        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            <img src="../img/LOGO.png" alt="logo" style="height: 75%;padding-left: 35%;">
        </div>
        <form class="form-horizontal col-md-4" >
            <fieldset>

                <!-- Form Name -->
                <legend style="padding-top: 12%;">Inscrivez-vous</legend>
    <div style="border:solid 1px black;border-radius: 10px; padding-bottom:4%;">

                <!-- Text input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input id="textinput" name="textinput" type="text" placeholder="Nom" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col" style="padding-top: 2%;">
                        <input id="" name="" type="name" placeholder="Prénom" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col" style="padding-top: 2%;">
                        <input id="textinput" name="textinput" type="email" placeholder="Adresse E-mail" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col" style="padding-top: 2%;">
                        <input id="" name="" type="name" placeholder="Ville" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col" style="padding-top: 2%;">
                        <input id="" name="" type="name" placeholder="Adresse" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col" style="padding-top: 2%;">
                        <input id="" name="" type="number" placeholder="Code Postal" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 2%;">
                        <input id="" name="" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col" style="padding-top: 2%;">
                        <input id="" name="" type="password" placeholder="Confirme Mot passe" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;">
                    </div>
                </div>

                <div style="padding-top: 2%;">
                    <input type="checkbox" name="memo" id="memo"> <label for="memo"> J’ai lu et j’accepte les conditions générales d’utilisation et la 
politique de confidentialité.</label>
                </div>

                <!-- Button -->
                <div class="form-group">
                    <div class="col" style="padding-top: 3.5%;">
                        <button id="" name="" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;">Inscrivez-vous
</button>
                    </div>
                </div>

                <div style="padding-top: 1%;">
                    <a href="insc.php">Vous avez déjà un compte? Connectez-vous</a>
    </div>
                </div>
            </fieldset>
        </form>
    </div>

</body>
</html>