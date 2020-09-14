<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>
<?php 
session_start();
?>

<?php
if (isset($_GET['id_users'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id_users = isset($_POST['id_users']) ? $_POST['id_users'] : NULL;
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');
        // Update the record
        $stmt = $pdo->prepare('UPDATE users SET id_users = ?, name = ?, email = ?, phone = ?, title = ?, created = ? WHERE id_users = ?');
        $stmt->execute([$id_users, $name, $email, $img, $tel, $nation, $idcard, $age, $adresse, $_GET['id_users']]);
        $msg = 'Updated Successfully!';
    }
}
   
?>


<?php include 'meta.php';?>



<?=template_meta('Changez votre nom')?>

<body class="body2">

<?=template_header()?>

<div class="maininput">
<h2>Modifiez vos informations</h2>
    <form action='modifprof.php' <?=$_SESSION['id_users'];?> class="inputg row">
        <div class="input offset-md-1 col-4">

            <label for="noms">Nom : <input type="text" name="noms" value="<?= $_SESSION['noms'];?>"></label>
            <br>
            <label for="adresse">Adresse : <input type="text" name="adresse" value="<?= $_SESSION['adresse'];?>"></label>
            <br>
            <label for="codepostal">Code-postal : <input type="text" name="codepostal" value="<?= $_SESSION['codepostal'];?>"></label>
            <br>
            <label for="email">Email : <input type="text" name="email" value="<?= $_SESSION['email'];?>"></label>
            <br>
            <label for="naissance">Date de naissance : <input type="text" name="naissance" value="<?= $_SESSION['naissance'];?>"></label>
            
        </div>
        <div class="input col-4">

            <label for="prénoms">Prénom : <input type="text" name="prénoms" value="<?= $_SESSION['prénoms'];?>"></label>
            <br>
            <label for="ville">Ville : <input type="text" name="ville" value="<?= $_SESSION['ville'];?>"></label>
            <br>
            <label for="nation">Nationalité : <input type="text" name="nation" value="<?= $_SESSION['nation'];?>"></label>
            <br>
            <label for="tel">N°Telephone : <input type="text" name="tel" value="<?= $_SESSION['tel'];?>"></label>
            <br>
            <label for="idcard">N°ID : <input type="text" name="idcard" value="<?= $_SESSION['idcard'];?>"></label>

        </div>
        <div class="buttong">
            <button type='submit' value='update' >Enregistrer les modifications</button>
            <button>Annulez les modifications</button>
        </div>
    </form>
    
</div>

<?=template_footer()?>

</body>

</html>

?>