<?php include('meta.php')?>
<?=template_meta('create')?> 

<body class="body2">
<?=template_header()?>

    <div class="row test">
        <div class="col-md-4 row align-items-center" style="height: 20vh;">
            
         </div>
        <form class="form-horizontal col-md-4 animate__animated animate__backInUp" >
            <fieldset>

                    <!-- Form Name -->
                    <legend >Formulaire de création d’un concours</legend>
        <div style="border-radius: 10px; padding-bottom:4%;">

                    <!-- Text input-->
                    <div class="form-group">
                        <div class="col" style="padding-top: 4%;">
                            <input id="textinput" name="textinput" type="text" placeholder="Nom du concours" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%; border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="name" placeholder="Nom de votre entreprises" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="name" placeholder="Déscription" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="name" placeholder="Localisation" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="date" placeholder="Date" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="number" placeholder="Max de participent" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col" style="padding-top: 1%;">
                            <input id="" name="" type="number" placeholder="Votre site" class="form-control input-md" required="" style="border:solid 1px #707070; margin-left: 5%; width:90%;border-radius: 0;">
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 40.6%; margin-top: -10.23%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

            <!-- A MODIFIER  -->

                    <div style="padding-top: 1%;">
                        <input type="checkbox" name="memo" id="memo"> <label for="memo"> J’ai lu et j’accepte les conditions générales d’utilisation et la 
                        politique de confidentialité.</label>
                    </div>

            <!-- A   -->


                    <!-- Button -->
                    <div class="form-group">
                        <div class="col" style="padding-top: 2.5%;">
                            <button id="" name="" class="btn btn-primary" style="width: 100%;background-color: #ffffff;color: #707070;border:solid 1px #707070;border-radius: 0;">Validez votre concours</button>
                            <i class="fas fa-caret-right" style="position: absolute; transform: rotate(315deg);margin-left: 45%; margin-top: -10.26%; color: #de2b76 ;font-size: 1.5rem;"></i>
                        </div>
                    </div>

                    <div style="padding-top: 1%;">
                        <a href="insc.php">Retour</a>
                    </div>
                    </div>
            </fieldset>
        </form>
    </div>



<?=template_footer()?>
</body>
</html>
