<?php include('../function.php')  ?>


  
  <?=template_header2('loginpro')?>
<br>
<body style="background-color: #f8f9fa;">
<section style="margin-left: 60px; margin-right: 60px;">
        <div class="row nomarge">
        </div>
        <style>
.zoom {
  

  transition: transform .2s;
  
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.18); /* IE 9 */
  -webkit-transform: scale(1.18); /* Safari 3-8 */
  transform: scale(1.18); 
}

</style>
    
<?php 
$pdo->prepare("select * from users where rôles = ?");
            $test = $result->execute([$pdo]);


// Associative array
$row = $result -> fetch_assoc();
?>
 <div class="row nomarge">
<?php
 while($row=mysqli_fetch_array($result)){
  

    ?>
            <div  style="text-align:center;" class="col-md-3 col-sm-6">
                
            
               <br>
               <br>
               <p>     <?php echo $row['nom'] ?></p>
                <p>     <?php echo $row['prénoms'] ?></p>
                <p>     <?php echo $row['id_users'] ?>€</p>
                <br>
            </div>        
           
      
    <?php
  }  
?></div>
       

       
        

    </section>
</body>

<br>
<?=template_footer()?>








