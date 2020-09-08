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
<input type="text" name="noms" placeholder="Changez votre nom">
</div>

<?=template_footer()?>

</body>

</html>