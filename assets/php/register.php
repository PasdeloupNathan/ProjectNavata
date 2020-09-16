<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php
// $bdd = new PDO('mysql:host=127.0.0.1;dbname=projet_navata', 'root', '');
 
if(isset($_POST['forminscription'])) {
   $prénom = htmlspecialchars($_POST['prénom']);
   $email = htmlspecialchars($_POST['email']);
   $email2 = htmlspecialchars($_POST['email2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   
   if(!empty($_POST['prénom']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $prénomlength = strlen($prénom);
      if($prénomlength <= 255) {
         if($email == $email2) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $reqemail = $pdo->prepare("SELECT * FROM users WHERE 	email = ?");
               $reqemail->execute(array($email));
               $emailexist = $reqemail->rowCount();
               if($emailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $pdo->prepare("INSERT INTO users(prénom,email,mdp) VALUES(?, ?, ?)");
                     // -- $insertmbr = $bdd->prepare("INSERT INTO users(prénom,email,mdp) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($prénom, $email, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse email déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse email n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses email ne correspondent pas !";
         }
      } else {
         $erreur = "Votre prénom ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
	<html>
   <head>
      <title>TUTO PHP</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="prénom">prénom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prénom" id="prénom" name="prénom" value="<?php if(isset($prénom)) { echo $prénom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="email">email :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre email" id="email" name="email" value="<?php if(isset($email)) { echo $email; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="email2">Confirmation du email :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre email" id="email2" name="email2" value="<?php if(isset($email2)) { echo $email2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>