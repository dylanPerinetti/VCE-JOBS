<?php
$titre = "Gestion des actifs";
$styles_sheet_name = "style.css";
$static_repository = "static/";
$chemin_imgage_h1 = $static_repository."img/volvo-show-corporate-information-2326x800.jpg";

function AfficherTableauActifs(){
	for ($user_in_db=0; $user_in_db < 20; $user_in_db++) { 
		echo "<tr class=\"spacer\"></tr>";
		echo "<tr>\n\t<td>".$user_in_db."</td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >Test n°".$user_in_db."</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >Test n°".$user_in_db."</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" >102178</a></td>";
		echo "\n\t<td><a href=\"device-info.php?ObjectName=TESTE\" ><p class=\"nom\">jean baptist adolphe</p><p class=\"prenom\">olivier</p><p class=\"matricule\">a324565</p></a></td>";
	}		  	
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<?php require $static_repository.'head.php'; ?>
	<link rel="stylesheet" type="text/css" href="<?=$static_repository?>styles/actif-table.css">
</head>
<body>
	<?php require $static_repository.'topnav.php'; ?>
	<div class="row">
		<div class="column medium">	
			<input type="search" class="input-field" id="myInput" onkeyup="colSearch()" placeholder="Rechercher un nom d'utilisateur..." title="Rechercher un actif">
			<!--button class="sort-button" onclick="sortTable()">Trie</button-->
			<table>
			  <tr class="header">
			 		<th>APPAREIL</th>
					<th>TAG</th>
					<th>MODEL</th>
					<th>IMMOBILISATION</th>
					<th>UTILISATEUR</th>
				</tr>
				<tr class="spacer"></tr>
			</table>
			<div class="scroll-area">
				<table id="myTable">
				  	<?php AfficherTableauActifs();?>
				</table>
			</div>
			<script src="<?=$static_repository?>script/search.js"></script>
		</div>
	</div>
	
	<?php require $static_repository.'footer.php'; ?>
</body>
</html>