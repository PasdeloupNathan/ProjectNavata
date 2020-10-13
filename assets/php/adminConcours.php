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
	$stmt = $pdo->prepare('SELECT * FROM concours
						   WHERE noms_concours LIKE :search_query
							  OR descriptionConcours LIKE :search_query
							  OR locaConcours LIKE :search_query
							ORDER BY id_concours
							LIMIT :current_page, :record_per_page');
	// The percentages are added each side of the search query so we can find a match in the column value.
	$stmt->bindValue(':search_query', '%' . $_GET['search'] . '%');
} else {
	// Prepare the SQL statement and get records from our concours table, LIMIT will determine the page
	$stmt = $pdo->prepare('SELECT * FROM concours ORDER BY id_concours LIMIT :current_page, :record_per_page');
}



// The above queries are ordered by id, you can change this if you want to order by another column, such as "name"
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$concours = $stmt->fetchAll(PDO::FETCH_ASSOC);
// Get the total number of concours, this is so we can determine whether there should be a next and previous button
if (isset($_GET['search'])) {
	$stmt = $pdo->prepare('SELECT COUNT(*) FROM concours');
	$stmt->bindValue(':search_query', '%' . $_GET['search'] . '%');
	$stmt->execute();
	$num_concours = $stmt->fetchColumn();
} else {
	$num_concours = $pdo->query('SELECT COUNT(*) FROM concours')->fetchColumn();
}

//  code permettant de compté le nombre de place restante
 
?>



<body class="body2">

<?=template_headerAdmin()?>
<div class="  row page ">
<?=template_admin()?>

<div class="col">
<table id="customers">

	<div class="col row top">
		<div class="col-6">
<h2 class="candid1">Liste des concours</h2>
		</div>
	</div>
	

	<table id="customers">
    	<form action="listeCandidat.php" method="get">
			<input type="text" name="search" placeholder="Search..." value="<?=isset($_GET['search']) ? htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
		</form>
        <thead style="padding: 1%;">
            <tr>
                <th>ID</th >
                <th>categorieConcours</th>
                <th>noms_concours</th>
                <th>descriptionConcours</th>
                <th>locaConcours</th>
                <th>date_concours</th>
                <th>placeConcoursMax</th>
                <th>placeConcoursPrise</th>
                <th>placeConcoursRestante</th>
               
               
            </tr>
        </thead>
        <tbody>
			<!-- boucle for each permettant d'affiché les donnés de la table concours -->
            <?php foreach ($concours as $contact): ?>
            <tr>
                <td class="cel"><?=$contact['id_concours']?></td>
                <td><?=$contact['categorieConcours']?></td>
                <td><?=$contact['noms_concours']?></td>
                <td><?=$contact['descriptionConcours']?></td>
                <td><?=$contact['locaConcours']?></td>
                <td><?=$contact['date_concours']?></td>
                <td><?=$contact['placeConcoursMax']?></td>
                <td><?=$contact['placeConcoursPrise']?></td>
                <td><?=$contact['placeConcoursPrise'] = $contact['placeConcoursMax'] - $contact['placeConcoursPrise']; ?></td>
                

            </tr>
            <?php endforeach; ?>
		</tbody>
</table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a class="aRead" href="adminConcours.php?page=<?=$page-1?><?=isset($_GET['search']) ? '&search=' . htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
			<i class="fas fa-angle-double-left fa-sm"></i>
		</a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_concours): ?>
		<a class="aRead" href="adminConcours.php?page=<?=$page+1?><?=isset($_GET['search']) ? '&search=' . htmlentities($_GET['search'], ENT_QUOTES) : ''?>">
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
