<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<?php

require('model.php');
session_start();
if (isset($_POST['email'])){
  $email = stripslashes($_POST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  $password = stripslashes($_POST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `user` WHERE email='$email' and password='".hash('sha256', $password)."'";
  $result=$conn->query($query);
  var_dump($result);
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $rows = mysqli_num_rows($result);
      if($rows==1){
          $_SESSION['nom'] = $row['nom'];
          $_SESSION['prénoms'] = $row['prénoms'];
          $_SESSION['email'] = $row['email'];
          $_SESSION['ville'] = $row['ville'];
          $_SESSION['adresse'] = $row['adresse'];
          $_SESSION['codepostal'] = $row['codepostal'];
          $_SESSION['rôles'] = $row['rôles'];
          $_SESSION['id'] = $row['id'];
          
          
        
          header("Location: page_de_garde/pageGarde.php");
      }else{
        $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
      }
    }
  } else {
    echo "0 results";
  }
 
}
?>
<?=template_header('loginpro')?>

<section style="height:50vh" class="showcase">
<div style="width:60vw" class="container">
    <div class="card border-info rounded-0">
        <div class="card-header p-0">
                <div class="bg-login-page text-white text-center py-2">
                        <h3 style="color: #117a8b;"></i> se connecter</h3>
                </div>
                    <form class="box" action="" method="post" name="login">
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                            </div>
                            <input type="text" class="form-control" class="box-input" name="email" placeholder="email">
                        </div>
                    </div>
                       

                        <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                            </div>
                            <input type="password" class="form-control"  class="box-input" name="password" placeholder="Mot de passe">
                        </div>
                    </div>
                       
                    <input type="submit" value="Connexion " name="submit" class="box-button btn btn-info btn-block rounded-0 py-2">

                   
                        <p style="text-align: center;" class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
                        
                    
                    
                        
                        <?php if (! empty($message)) { ?>
                        <p class="errorMessage"><?php echo $message; ?></p>
                        <?php } ?>

                    </form>
                
        </div>
    </div>

 </div>
</section>


  
  
</body>
</html>