<?php 
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php
$result = PDO::query("SHOW COLUMNS FROM users");
echo rowCount();($result);
?>

                        
    nombre de personne inscrite :
    </div>



