<?php
include 'meta.php';
?>

<?=template_meta('Concours')?>
    


<body class="body">




    


<?=template_header()?>


<div class="main3 h2nav">
    
        <div class="firstBox" class="container">
           
                <div class=" title">
                    <H2>Concours avec le plus d'angouement</H2>
                </div>
                <div class="row bas align-items-center">
                    <div class="col-6 acceuil">
                        <img id="logoImg2" src="../img/test1.jpg" alt="logo">
                    </div>
                    <div class="col-6">
                        <div class="List">
                        <h2 class=" col- subList">Concours</h2>
                        <h2 class=" col- subList">Concours2</h2>
                        <h2 class=" col- subList">Concours3</h2>
                    
                    </div>
                </div>
            </div>
        </div>
        </div>

<div class="main3 h2nav">
<div class="firstBox" class="container">
           
            <div class="row List">
                <div class="col-6 title">
                    <H2>Liste des concours disponible</H2>
                </div>
                <div class="col-4 search">
                 
                <select class="fond" value="recherché" name="selectbasic" class="form-control">
                <!-- <option value="">--Catégorie--</option> -->
                    <optgroup label="Concours" >
                    <option class="fond" value="1">Sport</option>
                    <option class="fond" value="2">Education</option>
                    <option class="fond" value="3">Academique</option>
                    <option class="fond" value="4">Fonctionnaire</option>
                    <option class="fond" value="5">E-sport</option>
                    </optgroup>
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
                
                <div class="row  align-items-center">
                <div class="col-6">
                        <div class="List">
                        <h2 class=" col- h2nav list1">Concours1</h2>
                        <h2 class=" col- h2nav">Concours2</h2>
                        <h2 class=" col- h2nav list2">Concour3</h2>
                        <h2 class=" col- h2nav list2">Concours4</h2>
                    
                    <div class="col- arrow1">
                        <p class=""><i class="fas fa-caret-left"></i>  Page suivante  </p>  
                        </div>
                        </div>
                    </div>
                    
                    <div class="col-6 acceuil">
                        <div>
                        <img id="logoImg2" src="../img/test1.jpg" alt="logo">
                        </div>
                        <div class="desc">
                            <p class=" h2nav">Lorem ipsum dolor sit,</p>
                        </div>
                        
                            <div class="arrow2">
                            <p class="">  Page suivante <i class="fas fa-caret-right "></i> </p>  
                            </div>
                        
                    </div>
                    
                    
                    
                </div>
            </div>
    
</div>


<?=template_footer()?>

