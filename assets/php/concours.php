<?php
include 'meta.php';
?>

<?=template_meta('Concours')?>
    

<body class="body">
    


<?=template_header()?>


<div class="main3">
    <div class="mainConcour">
        <div class="firstBox" class="container">
            <div  class=" subBox ">
                <div class=" title">
                    <H2>Concours avec le plus d'angouement</H2>
                </div>
                <div class="row bas align-items-center">
                    <div class="col-6 acceuil">
                        <img id="logoImg2" src="../img/test1.jpg" alt="logo">
                    </div>
                    <div class="col-6">
                        <div class="List">
                        <h2 class=" col- h2nav">Concours</h2>
                        <h2 class=" col- h2nav">Concours</h2>
                        <h2 class=" col- h2nav">Concours</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="main4">
<div class="firstBox" class="container">
            <div  class=" subBox ">
            <div class="row List">
                <div class="col-6 title">
                    <H2>Liste des concours disponible</H2>
                </div>
                <div class="col-4 search">
                <select id="selectbasic" value="recherché" name="selectbasic" class="form-control">
                    <option value="1">Recherché</option>
                    <option value="2">Sport</option>
                    <option value="3">Education</option>
                    <option value="4">Academique</option>
                    <option value="4">Fonctionnaire</option>
                    <option value="4">E-sport</option>
                </select>
                </div>
            </div>
            <div class="row ListConcours align-items-center">
            <div class="col"><p>Sport</p></div>
            <div class="col"><p>Education</p></div>
            <div class="col"><p>Academique</p></div>
            <div class="col"><p>Fonctionnaire</p></div>
            <div class="col"><p>E-sport</p></div>
            </div>
                
                <div class="row bas align-items-center">
                <div class="col-6">
                        <div class="List">
                        <h2 class=" col- h2nav list1">Concours1</h2>
                        <h2 class=" col- h2nav">Concours2</h2>
                        <h2 class=" col- h2nav list2">Concour3</h2>
                        <h2 class=" col- h2nav list2">Concours4</h2>
                        </div>
                    </div>
                    
                    <div class="col-6 acceuil">
                        <div>
                        <img id="logoImg2" src="../img/test1.jpg" alt="logo">
                        </div>
                        <div>
                            <p class="col h2nav">Lorem ipsum dolor sit,</p>
                        </div>
                        
                            <div class="col fleche">
                            <p>Page suivante: <i class="arrow right"></i></p>
                            </div>
                        
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
</div>


<?=template_footer()?>

