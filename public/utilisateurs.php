<?php
$titre = "Gestion des utilisateurs";
$styles_sheet_name = "style.css";
$static_repository = "static/";
$chemin_imgage_h1 = "static/img/volvo-show-our-offer-v1-2326x800.jpg";

function AfficherTableauUtilisateur(){
	for ($user_in_db=0; $user_in_db < 10; $user_in_db++) { 
		echo "<tr>\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >".$user_in_db."</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >Test n°".$user_in_db."</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >test n°".$user_in_db."</a></td>\n</tr>";
	}
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require 'static/head.php'; ?>

</head>
<body>
	<?php require 'static/topnav.php'; ?>
	<div class="row">
		<div class="column">
		</div>

		<div class="column">
			<input type="text" id="myInput" onkeyup="mainSearch()" placeholder="Rechercher un nom d'utilisateur..." title="Type in a name">
			<table id="myTable">
				<tr class="header">
				    <th>NOM Prenom</th>
				    <th>N°A/EN</th>
				    <th>Profile</th>
			  	</tr>
			  	<?php AfficherTableauUtilisateur();?>
			</table>
			<script src="static/script/search.js"></script>
		</div>
		<div class="column">
		</div>
	</div>
	<?php require 'static/footer.php'; ?>
</body>
</html>