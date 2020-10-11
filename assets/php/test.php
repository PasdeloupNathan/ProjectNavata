<?php
session_start();

require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php include('meta.php')?>
<?=template_meta('test')?>

