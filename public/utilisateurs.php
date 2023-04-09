<?php
$titre = "Gestion des utilisateurs";
$styles_sheet_name = "style.css";
$static_repository = "static/";
$chemin_imgage_h1 = "static/img/volvo-show-our-offer-v1-2326x800.jpg";

function AfficherTableauUtilisateur(){
	for ($user_in_db=60; $user_in_db > 0; $user_in_db--) { 
		echo "<tr class=\"spacer\"></tr><tr>\n\t\t\t\t\t<td><div class=\"statut green\">•</div></td><td><a href=\"device-info.php?ObjectName=TESTE\" ><p class=\"nom\">jean baptist adolphe</p><p class=\"prenom\">olivier</p></p></a><p class=\"matricule\">a324565</p></td>";
		echo "\n\t\t\t\t\t<td><a href=\"device-info.php?ObjectName=TESTE\" > 06 ".$user_in_db."2 ".$user_in_db."0 43 7".$user_in_db."</a></td>";
		echo "\n\t\t\t\t\t<td><a href=\"device-info.php?ObjectName=TESTE\" >Technicien itinerant".$user_in_db."</a></td>";
		echo "<td><div class=\"points\">•</div></td></tr>";
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require $static_repository.'head.php'; ?>
	<link rel="stylesheet" type="text/css" href="<?=$static_repository?>styles/user-table.css">
</head>
<body>
	<?php require $static_repository.'topnav.php'; ?>
	<div class="row"></div>
	<div class="row">
		<div class="column medium">
			<input type="search" class="input-field" id="myInput" onkeyup="colSearch();" placeholder="Rechercher un nom d'utilisateur..." title="Rechercher un utilisateur">
			<table>
				<tr class="header">
				    <th onclick="sortTable(0)">Statut</th>
				    <th onclick="sortTable(1)">Utilisateur</th>
				    <th onclick="sortTable(2)">Téléphone</th>
				    <th onclick="sortTable(3)">PROFIL</th><!--PHONE & SERVICE & LOCATION &(ACTION)-->
				    <th>modifier</th>
			  	</tr>
			  	<tr class="spacer"></tr>
			</table id="myTable">
			<div class="scroll-area">
				<table id="myTable">
				  	<?php AfficherTableauUtilisateur();?>
				</table>
			</div>
			<script src="<?=$static_repository?>script/search.js"></script>
		</div>
	</div>
	<?php require $static_repository.'footer.php'; ?>
</body>
</html>