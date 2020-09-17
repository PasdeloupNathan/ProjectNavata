<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<?php if($_SESSION["rôles"] == 'admin'){
  ?>



<?php
include 'meta.php';
?>


<?=template_meta('admin')?>
    



<body class="body2">
    


    

<?=template_header()?>
<section class="row page">
<?=template_admin()?>

<!-- tableau permettant de lister les datas des users -->
<div style="height: 100%;" class="col">
<table id="customers">
  <tr>
    <th>Identifiant</th>
    <th>Nom</th>
    <th>Mail</th>
    <th>Role</th>
    <th>Publicité</th>
  </tr>
  <tr>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
  </tr>
  <tr>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
  </tr>
  <tr>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
  </tr>
  <tr>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
  </tr>
  <tr>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
    <td>__________</td>
  </tr>
</table>
</div>

<?=template_footer()?>
<?php
} else{
    header("Location: redirection.php");
}
?>