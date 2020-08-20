


<?php include('meta.php')?>
<?=template_meta('Connection')?>

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
                <div class="form-group">
                    <div class="col" style="padding-top: 15%;">
                        <input id="textinput" name="textinput" type="email" placeholder="Mail" class="form-control input-md" required="" style="border:solid 1px #707070;">

                    </div>
                </div>

                <!-- Password input-->
                <div class="form-group">
                    <div class="col" style="padding-top: 5%;">
                        <input id="" name="" type="password" placeholder="Mot de passe" class="form-control input-md" required="" style="border:solid 1px #707070;">

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
                        <button id="" name="" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;">Connectez-Vous</button>
                    </div>
                </div>

                <div style="padding-top: 5%;">
                    <a href="insc.php">Pas encore inscrit ? Inscrivez-vous.</a>
                </div>

            </fieldset>
        </form>
    </div>


</body>
</html>
