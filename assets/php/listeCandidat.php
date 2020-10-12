<?php
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<!--  Permission pour le rôles admin -->

<?php
include 'meta.php';
// $total= nombre_vues()
$annee = (int)date('Y');

?>
<?php if($_SESSION["rôles"] == 'admin'){
  ?>
<?=template_meta('ListeCandidat')?>

<?php

// Connect to MySQL database

// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] :1;
// Number of records to show on each page
$records_per_page = 5;

//  code pour la barre de recherche
if (isset($_GET['search'])) {
	// Custom search, if the user entered text in the search box and pressed enter...
	// The below query will search in every column until it's fount a match, feel free to remove a field if you don't want to search it.
	$stmt = $pdo->prepare('SELECT * FROM users
						   WHERE noms LIKE :search_query
							  OR prénoms LIKE :search_query
							  OR email LIKE :search_query
							  OR ville LIKE :search_query
							  OR codepostal LIKE :search_query
							ORDER BY id_users
							LIMIT :current_page, :record_per_page');
	// The percentages are added each side of the search query so we can find a match in the column value.
	$stmt->bindValue(':search_query', '%' . $_GET['search'] . '%');
} else {
	// Prepare the SQL statement and get records from our users table, LIMIT will determine the page
	$stmt = $pdo->prepare('SELECT * FROM users ORDER BY id_users LIMIT :current_page, :record_per_page');
}



// The above queries are ordered by id, you can change this if you want to order by another column, such as "name"
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of users, this is so we can determine whether there should be a next and previous button
if (isset($_GET['search'])) {
	$stmt = $pdo->prepare('SELECT COUNT(*) FROM users');
	$stmt->bindValue(':search_query', '%' . $_GET['search'] . '%');
	$stmt->execute();
	$num_users = $stmt->fetchColumn();
} else {
	$num_users = $pdo->query('SELECT COUNT(*) FROM users')->fetchColumn();
}
?>



<body class="body2">

<?=template_headerAdmin()?>
<div class="  row page ">
<?=template_admin()?>

<div class="col">
<table id="customers">

	<div class="col row top">
		<div class="col-6">
<h2 class="candid1">Liste des candidats</h2>
		</div>
		
		<div class=" col-4">
<h2 class="col candid" type="button" onclick="location.href='./listeEntreprise.php'" >Liste des entreprise</h2>
		</div>
		
	</div>
	

	<table id="customers">
    	<form action="listeCandidat.php" method="get">
			<input type="text" name="search" placeholder="Search..." value="<?=isset($_GET['search']) ? htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
		</form>
        <thead>
            <tr>
                <th>ID</th>
                <th>noms</th>
                <th>prénoms</th>
                <th>email</th>
                <th>ville</th>
                <th>rôles</th>
            </tr>
        </thead>
        <tbody>
			<!-- boucle for each permettant d'affiché les donnés de la table USERS -->
            <?php foreach ($users as $contact): ?>
            <tr>
                <td><?=$contact['id_users']?></td>
                <td><?=$contact['noms']?></td>
                <td><?=$contact['prénoms']?></td>
                <td><?=$contact['email']?></td>
                <td><?=$contact['ville']?></td>
                <td><?=$contact['rôles']?></td>
            </tr>
            <?php endforeach; ?>
		</tbody>
</table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a class="aRead" href="listeCandidat.php?page=<?=$page-1?><?=isset($_GET['search']) ? '&search=' . htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
			<i class="fas fa-angle-double-left fa-sm"></i>
		</a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_users): ?>
		<a class="aRead" href="listeCandidat.php?page=<?=$page+1?><?=isset($_GET['search']) ? '&search=' . htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
			<i class="fas fa-angle-double-right fa-sm"></i>
		</a>
		<?php endif; ?>
	</div>
</div>
<!-- fléche pour permettre de naviqué dans le tableau -->
    
</div>

</body>



<?=template_footer()?>
<?php
} else{
    header("Location: redirection.php");
}
?>
