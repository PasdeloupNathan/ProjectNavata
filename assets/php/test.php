<?php
session_start();

require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php include('meta.php')?>
<?=template_meta('test')?>

<?php


$teste = $pdo->prepare("SELECT * from users ");
$teste->execute();
$bro= $teste->fetchAll(\PDO::FETCH_ASSOC);

?>
<?php
while($array= $teste);
{
  echo $array['prénoms'];
}

?>