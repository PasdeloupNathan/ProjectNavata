<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
session_start();
?>


<?php include 'meta.php';?>



<?=template_meta('Changez votre nom')?>

<body class="body2">

<?=template_header()?>

<div class="maininput">
<h2>Modifiez vos informations</h2>

<div>

<label for="noms">Nom :</label> <input type="text" name="noms" placeholder="Changez votre nom">
<label for="prénoms">Prénom :</label> <input type="text" name="prénoms" placeholder="Changez votre prénoms">
<br>
<label for="adresse">Adresse :</label> <input type="text" name="adresse" placeholder="Changez votre Adresse">
<label for="ville">Ville :</label> <input type="text" name="ville" placeholder="Changez votre Ville">
<br>
<label for="codepostal">Code-postal :</label> <input type="text" name="codepostal" placeholder="Changez votre Code-postal">
<label for="nation">Nationalité :</label> <input type="text" name="nation" placeholder="Changez votre Nationalié">
<br>
<label for="email">Email :</label> <input type="text" name="email" placeholder="Changez votre Email">
<label for="tel">N°Telephone :</label> <input type="text" name="tel" placeholder="Changez votre N°Telephone">
<br>
<label for="naissance">Date de naissance :</label> <input type="text" name="naissance" placeholder="Changez votre Date de naissance">
<label for="idcard">N°ID :</label> <input type="text" name="idcard" placeholder="Changez votre N°ID">

</div>
</div>

<?=template_footer()?>

</body>

</html>