<?php
session_start();
?>

<?php
require 'model.php';
$pdo = pdo_connect_mysql();
$msg = '';
?>

<!--  Permission pour le siret_societe admin -->
<?php if($_SESSION["rôles"] == 'admin'){
  ?>
<?php
include 'meta.php';
// $total= nombre_vues()
$annee = (int)date('Y');

?>

<?=template_meta('ListeEntreprise')?>

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
	$stmt = $pdo->prepare('SELECT * FROM entreprise
						   WHERE nom_societe LIKE :search_query
							  OR prénoms LIKE :search_query
							  OR email_societe LIKE :search_query
							  OR ville_societe LIKE :search_query
							  OR codepostal LIKE :search_query
							ORDER BY id_entreprise
							LIMIT :current_page, :record_per_page');
	// The percentages are added each side of the search query so we can find a match in the column value.
	$stmt->bindValue(':search_query', '%' . $_GET['search'] . '%');
} else {
	// Prepare the SQL statement and get records from our entreprise table, LIMIT will determine the page
	$stmt = $pdo->prepare('SELECT * FROM entreprise ORDER BY id_entreprise LIMIT :current_page, :record_per_page');
}



// The above queries are ordered by id, you can change this if you want to order by another column, such as "name"
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$entreprise = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of entreprise, this is so we can determine whether there should be a next and previous button
if (isset($_GET['search'])) {
	$stmt = $pdo->prepare('SELECT COUNT(*) FROM entreprise');
	$stmt->bindValue(':search_query', '%' . $_GET['search'] . '%');
	$stmt->execute();
	$num_entreprise = $stmt->fetchColumn();
} else {
	$num_entreprise = $pdo->query('SELECT COUNT(*) FROM entreprise')->fetchColumn();
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
<h2 class=" ent1">Liste des entreprises</h2>
		</div>
		
		<div class=" col-4">
<h2 class="col ent" type="button" onclick="location.href='./listeCandidat.php'" >Liste des candidat</h2>
		</div>
		
	</div>
	

	<table id="customers">
    	<form action="listeEntreprise.php" method="get">
			<input type="text" name="search" placeholder="Search..." value="<?=isset($_GET['search']) ? htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
		</form>
        <thead>
            <tr>
                <th>ID</th>
                <th>nom_societe</th>
                <th>email_societe</th>
                <th>ville_societe</th>
            </tr>
        </thead>
        <tbody>
			<!-- boucle for each permettant d'affiché les donnés de la table entreprise -->
            <?php foreach ($entreprise as $contact): ?>
            <tr>
                <td><?=$contact['id_entreprise']?></td>
                <td><?=$contact['nom_societe']?></td>
                <td><?=$contact['email_societe']?></td>
                <td><?=$contact['ville_societe']?></td>
                
            </tr>
            <?php endforeach; ?>
		</tbody>
</table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a class="aRead" href="listeEntreprise.php?page=<?=$page-1?><?=isset($_GET['search']) ? '&search=' . htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
			<i class="fas fa-angle-double-left fa-sm"></i>
		</a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_entreprise): ?>
		<a class="aRead" href="listeEntreprise.php?page=<?=$page+1?><?=isset($_GET['search']) ? '&search=' . htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
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