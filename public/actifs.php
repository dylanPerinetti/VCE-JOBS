<?php
$titre = "Gestion des actifs";
$styles_sheet_name = "style.css";
$static_repository = "static/";
$chemin_imgage_h1 = $static_repository."img/volvo-show-corporate-information-2326x800.jpg";

function AfficherTableauActifs(){
	for ($user_in_db=0; $user_in_db < 10; $user_in_db++) { 
		echo "<tr>\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >".$user_in_db."</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >Test n°".$user_in_db."</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >Test n°".$user_in_db."</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >102178</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >test n°".$user_in_db."</a></td>\n</tr>";
	}		  	
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require $static_repository.'head.php'; ?>
</head>
<body>
	<?php require $static_repository.'topnav.php'; ?>
	<div class="row">
		<div class="column">	
			<input type="text" id="myInput" onkeyup="mainSearch()" placeholder="Rechercher un nom d'utilisateur..." title="Type in a name">
			<table id="myTable">
			  <tr class="header">
			 		<th>Appareil</th>
					<th>TAG</th>
					<th>Model</th>
					<th>IMMOBILISATION</th>
					<th><a href="utilisateurs.php" >Utilisateur<a></th>
				</tr>
				<?php AfficherTableauActifs(); ?>
			</table>
			<script src="<?=$static_repository?>script/search.js"></script>
		</div>
		<div class="column">
		</div>
	</div>
	
	<?php require $static_repository.'footer.php'; ?>
</body>
</html>